<?php

namespace App\Http\Controllers\Client\Project;

use App\Account;
use App\Brand;
use App\Category;
use App\CategoryDetail;
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
use App\Size;
use App\SizeCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * @description 프로젝트 만들기/수정하기
     * @url /project
     * @return view
     */
    public function index(Request $request)
    {
        if ($request->material_id > 0){      // 1차 -> 2차 카테고리
            $datas = Material::where('group_id', $request->material_id)->get();
            $name = 'material';
        }

        if ($request->ajax()){              // 원단/재질 카테고리
            $view = view('client.project.partial.render.material', compact('datas','name'))->render();
            return response()->json(['html'=>$view],200, [],JSON_PRETTY_PRINT);
        } else {
            // 브랜드 소개 default 값
            // $introduction = Portfolio::where('user_id', auth()->user()->id);



            return view('client.project.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $main_categories = Category::where('id', 4)->orWhere('id', 5)->get();                  // 1차 카테고리
        $second_categories = CategoryDetail::get();                                            // 2차 카테고리
        $size_categories = SizeCategory::get();                                                // 사이즈 카테고리
        $information_tab = InformationTab::get();                                              // 취급정보 탭
        $information_list_water = InformationSelectList::where('tab_id', 1)->get();            // 취급정보 리스트 - 물세탁
        $information_list_bleach = InformationSelectList::where('tab_id', 2)->get();           // 취급정보 리스트 - 표백
        $information_list_iron = InformationSelectList::where('tab_id', 3)->get();             // 취급정보 리스트 - 다림질
        $information_list_drycleaning = InformationSelectList::where('tab_id', 4)->get();      // 취급정보 리스트 - 드라이클리닝
        $information_list_dry = InformationSelectList::where('tab_id', 5)->get();              // 취급정보 리스트 - 건조
        $groups = Group::get();                                                                // 원단 그룹
        $materials = Material::get();                                                          // 원단 - 재질

        $portfolio = Portfolio::where('user_id', auth()->user()->id)->first();                 // 포트폴리오 (연락처)
        $brand = Brand::where('portfolio_id', $portfolio->id)->first();                        // 브랜드 (브랜드명)


        $data = Project::where('user_id', auth()->user()->id)->where('progress', '<', 100)->orderBy('created_at', 'desc')->first();

        return view('client.project.partial.create.index',
            compact('main_categories', 'second_categories', 'materials', 'size_categories', 'information_tab', 'groups',
            'information_list_water', 'information_list_bleach', 'information_list_iron', 'information_list_drycleaning', 'information_list_dry', 'data', 'portfolio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // table: projects, options, sizes, fabrics, introductions, accounts, informations
        error_log($request->getContent());
        //$datas = json_decode($request->getContent());

        if ($request->project_1){                                        // 1. 프로젝트 개요
            $project = Project::updateOrCreate([
                'id'             => $request->project_id
            ], [
                'user_id'       => auth()->user()->id,
                'category_id'   => $request->first_category,
                'category2_id'  => $request->second_category,
                'condition'     => 0,
                'title'         => $request->project_title,
                'summary'       => $request->project_summary,
                'success_count' => $request->success_count,
                'progress'       => 15,
            ]);

            return response()->json($project->id, 200,[],JSON_PRETTY_PRINT);
        } elseif ($request->project_2) {                                // 2. 상품정보
            $options_name = $request->option_name;                      // 옵션, 사이즈, 원단, 취급정보
            $options_price = $request->option_price;                    // 옵션 테이블
            $option_count = $request->option_id;
            for ($i = 0; $i < count($option_count); $i++) {
                Option::updateOrCreate([
                    'id'            => $request->option_id[$i],
                    'project_id'    => $request->project_id,
                ],[
                    'option_name'   => $options_name[$i],
                    'price'         => $options_price[$i],
                ]);
            }

            $sizes_count = $request->size_id;                              // 사이즈 테이블 저장
            for ($i = 0; $i < count($sizes_count); $i++){
                Size::updateOrCreate([
                    'id'            => $request->size_id[$i],
                    'project_id'    => $request->project_id,
                    ], [
                    'size'          => $request->size[$i],
                    'total_length'  => $request->total_length[$i],
                    'shoulder'      => $request->shoulder[$i],
                    'chest'         => $request->chest[$i],
                    'arms_length'   => $request->arms_length[$i],
                    'sleeve'        => $request->sleeve[$i],
                    'armhole'       => $request->armhole[$i],
                    'waist'         => $request->waist[$i],
                    'hem'           => $request->hem[$i],
                    'crotch'        => $request->crotch[$i],
                    'hip'           => $request->hip[$i],
                    'thigh'         => $request->thigh[$i],
                    'string_length' => $request->string_length[$i],
                    'horizontal'    => $request->horizontal[$i],
                    'vertical'      => $request->vertical[$i],
                    'forefoot'      => $request->forefoot[$i],
                    'heels'         => $request->heels[$i],
                ]);
            }

            $fabric_count = count($request->fabric_ratio);

            for ($i = 0; $i < $fabric_count; $i++){                     // 원단-재질
                Fabric::updateOrCreate([
                    'id'            => $request->fabric_id[$i],
                    'project_id'    => $request->project_id,
                ],[
                    'material_id'   => $request->material_id[$i],
                    'rate'          => $request->fabric_ratio[$i]
                ]);
            }

            Project::where('id', $request->project_id)->update([         // 프로젝트
                'size_category_id'   => $request->size_category,
                'comment'            => $request->comment,
                'progress'           => 30,
            ]);

            // 취급정보 추가하기
            if ($request->information_water) {                          // 물세탁
                Informations::updateOrCreate([
                    'id'            => $request->information_water_id,
                    'project_id'    => $request->project_id,
                ],[
                    'tab_id'        => $request->water_tab_id,
                    'detail_id'     => $request->information_water,
                ]);
            }

            if ($request->information_bleach) {                         // 표백
                error_log('bleach');
                error_log($request->information_bleach);
                Informations::updateOrCreate([
                    'id'            => $request->information_bleach_id,
                    'project_id'    => $request->project_id,
                ],[
                    'tab_id'        => $request->bleach_tab_id,
                    'detail_id'     => $request->information_bleach,
                ]);
            }

            if ($request->information_iron) {                           // 다림질
                Informations::updateOrCreate([
                    'id'            => $request->information_iron_id,
                    'project_id'    => $request->project_id,
                ],[
                    'tab_id'        => $request->iron_tab_id,
                    'detail_id'     => $request->information_iron,
                ]);
            }

            if ($request->information_drycleaning) {                    // 드라이클리닝
                Informations::updateOrCreate([
                    'id'            => $request->information_drycleaning_id,
                    'project_id'    => $request->project_id,
                ],[
                    'tab_id'        => $request->drycleaning_tab_id,
                    'detail_id'     => $request->information_drycleaning,
                ]);
            }

            if ($request->information_dry) {                            // 건조
                Informations::updateOrCreate([
                    'id'            => $request->information_dry_id,
                    'project_id'    => $request->project_id,
                ],[
                    'tab_id'        => $request->dry_tab_id,
                    'detail_id'     => $request->information_dry,
                ]);
            }

            return response()->json('success', 200,[],JSON_PRETTY_PRINT);
        } elseif ($request->project_3) {                                              // 3. 스토리텔링
            if ($request->project_id) {
                Project::where('id', $request->project_id)->update([
                    'storytelling'  => $request->ir1,
                    'progress'      => 50,
                ]);
                return response()->json('success', 200,[],JSON_PRETTY_PRINT);
            } else {
                return response()->json('fail', 200,[],JSON_PRETTY_PRINT);
            }
        } elseif ($request->project_4) {                                             // 4. 프로젝트 일정
            Project::where('id', $request->project_id)->update([
                'deadline'          => $request->deadline,
                'account_date'      => $request->account_date,
                'delivery_date'     => $request->delivery_date,
                'delay_date'        => $request->delay_date,
                'agree'             => $request->agree,
                'progress'          => 75,
            ]);
            return response()->json('success', 200,[],JSON_PRETTY_PRINT);
        } elseif ($request->project_5) {                                             // 5. 디자이너/브랜드 소개
            Introduction::updateOrCreate([
                'project_id'        => $request->project_id,
            ],[
                'brand_name'        => $request->brand_name,
                'designer_name'     => $request->designer_name,
                'email'             => $request->email,
                'phone'             => $request->phone,
                'facebook'          => $request->facebook,
                'instagram'         => $request->instagram,
                'twitter'           => $request->twitter,
                'homepage'          => $request->hompage,
                'email_hidden'      => $request->email_hidden ? $request->email_hidden : 0,
                'phone_hidden'      => $request->phone_hidden ? $request->phone_hidden : 0,
                'facebook_hidden'   => $request->facebook_hidden ? $request->facebook_hidden : 0,
                'instagram_hidden'  => $request->instagram_hidden ? $request->instagram_hidden : 0,
                'twitter_hidden'    => $request->twitter_hidden ? $request->twitter_hidden : 0,
                'homepage_hidden'   => $request->homepage_hidden ? $request->homepage_hidden : 0
            ]);
            return response()->json('success', 200,[],JSON_PRETTY_PRINT);
        } elseif ($request->project_6) {                                             // 6. 정산정보
            // 정산정보
            Account::updateOrCreate([
                'project_id'         => $request->project_id,
            ],[
                'condition'          => $request->condition,
                'company_number'     => $request->company_number,
                'email'              => $request->account_email,
                'phone'              => $request->account_phone
            ]);
            // 파일추가하기
            return response()->json('success', 200,[],JSON_PRETTY_PRINT);
        }

        // 프로젝트 생성
        $project = Project::create([
            'user_id'       => '',
            'category_id'   => $request->frist_category,
            'category2_id'  => $request->second_category ? $request->second_category : '',
            'condition'     => 0,
            'title'         => $request->project_title,
            'summary'       => $request->summary,
            'success_count' => $request->success_count,
            'comment'       => $request->comment,
            'deadline'      => $request->deadline,
            'account_date'  => $request->account_date,
            'delivery_date' => $request->delivery_date,
            'delay_date'    => $request->delay_date,
            'storytelling'  => '',
            'progress'       => 15,
        ]);

        // 디자이너/브랜드 소개
        Introduction::updateOrCreate([
            'project_id'            => $project->id,
        ],[
            'condition'             => '',                          // 포트폴리오
            'contents'              => '',                          // 포트폴리오 직접입력
            'brand_name'            => $request->brand_name,
            'designer_name'         => $request->designer_name,
            'email'                 => $request->email,
            'phone'                 => $request->phone,
            'facebook'              => $request->facebook,
            'instagram'             => $request->instagram,
            'twitter'               => $request->twitter,
            'homepage'              => $request->homepage,
            'email_hidden'          => $request->email_hidden,
            'phone_hidden'          => $request->phone_hidden,
            'facebook_hidden'       => $request->facebook_hidden,
            'instagram_hidden'      => $request->instagram_hidden,
            'twitter_hidden'        => $request->twitter_hidden,
            'homepage_hidden'       => $request->hompage_hidden
        ]);

        // return
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        error_log($id);
        $select_category = CategoryDetail::where('category_id', $id)->get();
        error_log($select_category);
        return response()->json($select_category, 200, [], JSON_PRETTY_PRINT);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
