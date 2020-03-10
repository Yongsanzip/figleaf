<?php

namespace App\Http\Controllers\Client\Project;

use App\Account;
use App\Brand;
use App\Category;
use App\CategoryDetail;
use App\Community;
use App\Fabric;
use App\Group;
use App\Informations;
use App\InformationSelectList;
use App\InformationTab;
use App\Introduction;
use App\Material;
use App\Option;
use App\Portfolio;
use App\Project;
use App\ProjectImage;
use App\Size;
use App\SizeCategory;
use App\ViewProject;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description 프로젝트 만들기/수정하기 - 카테고리 ajax
     * @url /project
     * @return view
     */
    public function index(Request $request)
    {
        try {
            if ($request->material_id > 0){                                                                             // 1차 -> 2차 카테고리
                $datas = Material::where('group_id', $request->material_id)->get();
                $name = 'material';
            }

            if ($request->ajax()){                                                                                      // 원단/재질 카테고리
                $view = view('client.project.partial.render.material', compact('datas','name'))->render();

                return response()->json(['html'=>$view],200, [],JSON_PRETTY_PRINT);
            } else {
                // 브랜드 소개 default 값
                // $introduction = Portfolio::where('user_id', auth()->user()->id);
                return view('client.project.index');
            }
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /**
     * Show the form for creating a new resource.
     * @description 프로젝트 만들기/수정하기
     * @url /project/create
     * @return view
     */
    public function create(Request $request)
    {
        try {
            $main_categories              = Category::where('id', 4)->orWhere('id', 5)->get();                          // 1차 카테고리
            $second_categories            = CategoryDetail::get();                                                      // 2차 카테고리
            $size_categories              = SizeCategory::get();                                                        // 사이즈 카테고리
            $information_tab              = InformationTab::get();                                                      // 취급정보 탭
            $information_list_water       = InformationSelectList::where('tab_id', 1)->get();                           // 취급정보 리스트 - 물세탁
            $information_list_bleach      = InformationSelectList::where('tab_id', 2)->get();                           // 취급정보 리스트 - 표백
            $information_list_iron        = InformationSelectList::where('tab_id', 3)->get();                           // 취급정보 리스트 - 다림질
            $information_list_drycleaning = InformationSelectList::where('tab_id', 4)->get();                           // 취급정보 리스트 - 드라이클리닝
            $information_list_dry         = InformationSelectList::where('tab_id', 5)->get();                           // 취급정보 리스트 - 건조
            $groups                       = Group::get();                                                               // 원단 그룹
            $materials                    = Material::get();                                                            // 원단 - 재질
            $portfolio                    = Portfolio::where('user_id', auth()->user()->id)->first();                   // 포트폴리오 (연락처)
            $brand                        = Brand::where('portfolio_id', $portfolio->id)->first();                      // 브랜드 (브랜드명)


            if ($request->id) {
                $data = Project::where('user_id', auth()->user()->id)->where('id', $request->id)->first();
                if (!$data) {
                    return redirect('/project/create');
                }
            } else {
                $data = Project::where('user_id', auth()->user()->id)->where('progress', '!=', 100)->orderBy('created_at', 'desc')->first();
            }

            return view('client.project.partial.create.index',
                compact('main_categories', 'second_categories', 'materials', 'size_categories', 'information_tab', 'groups',
                    'information_list_water', 'information_list_bleach', 'information_list_iron', 'information_list_drycleaning', 'information_list_dry', 'data', 'portfolio'));
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /**
     * Store a newly created resource in storage.
     * @description 프로젝트 만들기/수정하기 저장 (이미지 1: 대표이미지 2: 사업자등록증 3: 통장사본)
     * @url /project
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */
    public function store(Request $request)
    {
        // table: projects, options, sizes, fabrics, introductions, accounts, informations
        try {
            if ($request->project_1){                                                                                   // 1. 프로젝트 개요
                $project = Project::updateOrCreate([
                    'id'                    => $request->project_id
                ], [
                    'user_id'               => auth()->user()->id,
                    'category_id'           => $request->first_category,
                    'category2_id'          => $request->second_category,
                    'title'                 => $request->project_title,
                    'summary'               => $request->project_summary,
                    'success_count'         => $request->success_count,
                ]);

                if ($project->progress != 100) {
                    $project->progress = 15;
                    $project->save();
                }

                $project_image = $request->file('main_file');                                                      // 대표이미지 (썸네일)
                if($project_image){
                    $image = ProjectImage::where('project_id', $project->id)->where('image_division', 1)->first();
                    if ($image) {                                                                                       // 업데이트라면 업로드 된 파일 삭제 후 재업로드
                        Storage::delete($image->image_path);
                    }

                    $savePath = $project_image->store('images/project/'.date('Y-m-d').'/thumbnail', 'public');
                    ProjectImage::updateOrCreate([                                                                      // 프로젝트 이미지 등록
                        'project_id'        => $project->id,
                        'image_division'    => 1,
                    ],[
                        'image_type'        => $project_image->getClientMimeType(),
                        'image_path'        => $savePath,
                        'origin_name'       => $project_image->getClientOriginalName(),
                    ]);
                }

                return response()->json($project->id, 200,[],JSON_PRETTY_PRINT);
            } elseif ($request->project_2) {                                                                            // 2. 상품정보
                $options_name = $request->option_name;                                                                  // 옵션, 사이즈, 원단, 취급정보
                $options_price = $request->option_price;                                                                // 옵션 테이블
                $option_count = $request->option_name;

                for ($i = 0; $i < count($option_count); $i++) {                                                         // 옵션 저장
                    if ($options_name[$i] != null) {
                        Option::updateOrCreate([
                            'id'                => $request->option_id[$i],
                            'project_id'        => $request->project_id,
                        ],[
                            'option_name'       => $options_name[$i],
                            'price'             => $options_price[$i],
                        ]);
                    }
                }

                if ($request->delete_option_id) {                                                                       // 옵션 삭제
                    $delete_option_arr = explode(",", $request->delete_option_id);
                    foreach ($delete_option_arr as $delete_option){
                        Option::where('id', $delete_option)->delete();
                    }
                }

                $sizes_count = $request->size;                                                                          // 사이즈 테이블 저장

                for ($i = 0; $i < count($sizes_count); $i++){
                    if ($request->size[$i] != null) {
                        Size::updateOrCreate([
                            'id'                => $request->size_id[$i],
                            'project_id'        => $request->project_id,
                        ], [
                            'size'              => $request->size[$i],
                            'total_length'      => $request->total_length[$i],
                            'shoulder'          => $request->shoulder[$i],
                            'chest'             => $request->chest[$i],
                            'arms_length'       => $request->arms_length[$i],
                            'sleeve'            => $request->sleeve[$i],
                            'armhole'           => $request->armhole[$i],
                            'waist'             => $request->waist[$i],
                            'hem'               => $request->hem[$i],
                            'crotch'            => $request->crotch[$i],
                            'hip'               => $request->hip[$i],
                            'thigh'             => $request->thigh[$i],
                            'string_length'     => $request->string_length[$i],
                            'horizontal'        => $request->horizontal[$i],
                            'vertical'          => $request->vertical[$i],
                            'forefoot'          => $request->forefoot[$i],
                            'heels'             => $request->heels[$i],
                        ]);
                    }
                }

                if ($request->delete_size_id) {                                                                         // 사이즈 삭제
                    $delete_size_arr = explode(",", $request->delete_size_id);
                    foreach ($delete_size_arr as $delete_size) {
                        Size::where('id', $delete_size)->delete();
                    }
                }

                $fabric_count = count($request->fabric_ratio);

                for ($i = 0; $i < $fabric_count; $i++){                                                                 // 원단-재질
                    if ($request->fabric_ratio[$i] != null) {
                        Fabric::updateOrCreate([
                            'id'                => $request->fabric_id[$i],
                            'project_id'        => $request->project_id,
                        ],[
                            'material_id'       => $request->material_id[$i],
                            'rate'              => $request->fabric_ratio[$i]
                        ]);
                    }
                }

                if ($request->delete_fabric_id) {                                                                       // 원단-재질 삭제
                    $delete_fabric_arr = explode(",", $request->delete_fabric_id);
                    foreach ($delete_fabric_arr as $delete_fabric) {
                        Fabric::where('id', $delete_fabric)->delete();
                    }
                }

                Project::where('id', $request->project_id)->update([                                                    // 프로젝트
                    'size_category_id'      => $request->size_category,
                    'comment'               => $request->comment,
                ]);

                $project = Project::where('id', $request->project_id)->first();

                if ($project->progress != 100) {
                    $project->progress = 30;
                    $project->save();
                }

                // 취급정보 추가하기
                if ($request->information_water) {                                                                      // 물세탁
                    Informations::updateOrCreate([
                        'id'                => $request->information_water_id,
                        'project_id'        => $request->project_id,
                    ],[
                        'tab_id'            => $request->water_tab_id,
                        'detail_id'         => $request->information_water,
                    ]);
                }

                if ($request->information_bleach) {                                                                     // 표백
                    Informations::updateOrCreate([
                        'id'                => $request->information_bleach_id,
                        'project_id'        => $request->project_id,
                    ],[
                        'tab_id'            => $request->bleach_tab_id,
                        'detail_id'         => $request->information_bleach,
                    ]);
                }

                if ($request->information_iron) {                                                                       // 다림질
                    Informations::updateOrCreate([
                        'id'                => $request->information_iron_id,
                        'project_id'        => $request->project_id,
                    ],[
                        'tab_id'            => $request->iron_tab_id,
                        'detail_id'         => $request->information_iron,
                    ]);
                }

                if ($request->information_drycleaning) {                                                                // 드라이클리닝
                    Informations::updateOrCreate([
                        'id'                => $request->information_drycleaning_id,
                        'project_id'        => $request->project_id,
                    ],[
                        'tab_id'            => $request->drycleaning_tab_id,
                        'detail_id'         => $request->information_drycleaning,
                    ]);
                }

                if ($request->information_dry) {                                                                        // 건조
                    Informations::updateOrCreate([
                        'id'                => $request->information_dry_id,
                        'project_id'        => $request->project_id,
                    ],[
                        'tab_id'            => $request->dry_tab_id,
                        'detail_id'         => $request->information_dry,
                    ]);
                }

                return response()->json('success', 200,[],JSON_PRETTY_PRINT);
            } elseif ($request->project_3) {                                                                            // 3. 스토리텔링
                if ($request->project_id) {
                    Project::where('id', $request->project_id)->update([
                        'storytelling'      => $request->ir1,
                    ]);

                    $project = Project::where('id', $request->project_id)->first();

                    if ($project->progress != 100) {
                        $project->progress = 45;
                        $project->save();
                    }

                    return response()->json('success', 200,[],JSON_PRETTY_PRINT);
                } else {
                    return response()->json('fail', 200,[],JSON_PRETTY_PRINT);
                }
            } elseif ($request->project_4) {                                                                            // 4. 프로젝트 일정
                Project::where('id', $request->project_id)->update([
                    'deadline'              => $request->deadline,
                    'account_date'          => $request->account_date,
                    'delivery_date'         => $request->delivery_date,
                    'delay_date'            => $request->delay_date,
                    'agree'                 => $request->agree,
                ]);

                $project = Project::where('id', $request->project_id)->first();

                if ($project->progress != 100) {
                    $project->progress = 60;
                    $project->save();
                }

                return response()->json('success', 200,[],JSON_PRETTY_PRINT);
            } elseif ($request->project_5) {                                                                            // 5. 디자이너/브랜드 소개
                Introduction::updateOrCreate([
                    'project_id'            => $request->project_id,
                ],[
                    'brand_name'            => $request->brand_name,
                    'designer_name'         => $request->designer_name,
                    'email'                 => $request->email,
                    'phone'                 => $request->phone,
                    'facebook'              => $request->facebook,
                    'instagram'             => $request->instagram,
                    'twitter'               => $request->twitter,
                    'homepage'              => $request->homepage,
                    'email_hidden'          => $request->email_hidden ? $request->email_hidden : 0,
                    'phone_hidden'          => $request->phone_hidden ? $request->phone_hidden : 0,
                    'facebook_hidden'       => $request->facebook_hidden ? $request->facebook_hidden : 0,
                    'instagram_hidden'      => $request->instagram_hidden ? $request->instagram_hidden : 0,
                    'twitter_hidden'        => $request->twitter_hidden ? $request->twitter_hidden : 0,
                    'homepage_hidden'       => $request->homepage_hidden ? $request->homepage_hidden : 0
                ]);

                $project = Project::where('id', $request->project_id)->first();
                if ($project->progress != 100) {
                    $project->progress = 75;
                    $project->save();
                }

                return response()->json('success', 200,[],JSON_PRETTY_PRINT);
            } elseif ($request->project_6) {                                                                            // 6. 정산정보
                // project 100
                Account::updateOrCreate([
                    'project_id'            => $request->project_id,
                ],[
                    'condition'             => $request->condition,
                    'company_number'        => $request->company_number,
                    'email'                 => $request->account_email,
                    'phone'                 => $request->account_phone
                ]);

                $company_image = $request->file('company_file');                                                   // 사업자등록증
                if($company_image){

                    $company_image_exist = ProjectImage::where('project_id', $request->project_id)->where('image_division', 2)->first();
                    if ($company_image_exist) {                                                                         // 존재할 경우 업로드 된 파일 삭제
                        Storage::delete($company_image_exist->image_path);
                    }

                    $savePath = $company_image->store('images/project/'.date('Y-m-d').'/company', 'public');
                    ProjectImage::updateOrCreate([                                                                      // 프로젝트 이미지 등록
                        'project_id'        => $request->project_id,
                        'image_division'    => 2,
                    ],[
                        'image_type'        => $company_image->getClientMimeType(),
                        'image_path'        => $savePath,
                        'origin_name'       => $company_image->getClientOriginalName(),
                    ]);
                }

                $bank_image = $request->file('bank_file');                                                         // 통장사본
                if($bank_image){
                    $bank_image_exist = ProjectImage::where('project_id', $request->project_id)->where('image_division', 3)->first();
                    if ($bank_image_exist) {                                                                            // 존재할 경우 업로드 된 파일 삭제
                        Storage::delete($bank_image_exist->image_path);
                    }

                    $savePath = $bank_image->store('images/project/'.date('Y-m-d').'/bank', 'public');
                    ProjectImage::updateOrCreate([                                                                      // 프로젝트 이미지 등록
                        'project_id'        => $request->project_id,
                        'image_division'    => 3,
                    ],[
                        'image_type'        => $bank_image->getClientMimeType(),
                        'image_path'        => $savePath,
                        'origin_name'       => $bank_image->getClientOriginalName(),
                    ]);
                }

                Project::where('id', $request->project_id)->update([
                    'condition'             => 1,
                ]);

                $project = Project::where('id', $request->project_id)->first();

                if ($project->progress != 100) {
                    $project->progress = 100;
                    $project->save();
                }

                return response()->json('success', 200,[],JSON_PRETTY_PRINT);
            }
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }


    /**
     * Display the specified resource.
     * @description : 프로젝트 상세보기
     * @url         : /project/{id}
     * @method      : GET
     * @param       : int  $id
     * @return      : view
     */
    public function show($id)
    {
        try {
            $support = ViewProject::where('id', $id)->first();                                                          // 뷰프로젝트 데이터
            $supporter_count = $support->supporter_count;                                                               // 후원자 수
            $total_cost = $support->total_cost;                                                                         // 모인금액

            $data = Project::where('id',$id)->first();                                                                  // 프로젝트 데이터
            $portfolio = Portfolio::where('user_id', $data->user_id)->first();                                          // 포트폴리오 데이터
            $communities = Community::where('project_id', $id)->orderBy('created_at', 'desc')->paginate(20);            // 커뮤니티 데이터
            $datas = Portfolio::where('user_id', $data->user_id)->first();                                              // 포트폴리오 데이터

            $date_diff = ceil((strtotime($data->deadline) - strtotime("now"))/(60*60 *24));                 // 남은시간 (남은 일자)


            return view('client.project.partial.show.index', compact('data', 'portfolio', 'communities', 'supporter_count', 'total_cost', 'date_diff', 'datas'));
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $select_category = CategoryDetail::where('category_id', $id)->get();
            return response()->json($select_category, 200, [], JSON_PRETTY_PRINT);
        } catch (\Exception $e){
            $description = '잘못된 접근입니다. <br>'.$e->getMessage();
            $title = '500 ERROR';
            return view('errors.error',compact('description','title'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
