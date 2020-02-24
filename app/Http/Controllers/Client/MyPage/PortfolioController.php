<?php

namespace App\Http\Controllers\Client\MyPage;

use App\AssociationActivity;
use App\Brand;
use App\HistoryAward;
use App\LookBook;
use App\LookBookImage;
use App\Portfolio;
use App\PortfolioImage;
use File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller {

    /************************************************************************
     * Construct
     * @description : 포트폴리오 설정
     ************************************************************************/
    public function __construct() {
        $this->middleware('auth');
    }

    /************************************************************************
     * Display register view
     * @description : 회원가입 - 회원가입 액션
     * @url         : /mypage_information/{params}
     * @method      : PUT
     * @return      : view
     ************************************************************************/
    public function index() {
        $datas = Portfolio::whereUserId(auth()->user()->id)->first();
        return view('client.mypage.portfolio.index',compact('datas'));
    }

    /************************************************************************
     * Display create view
     * @description : 설명1 - 설명2
     * @url         : /url
     * @method      : GET
     * @return      : view , data , msg ...
     ************************************************************************/
    public function create(){
        /*$check = Portfolio::whereUserId(auth()->user()->id)->first();
        if(isset($check)){
            return redirect(route('mypage_portfolio.index'));
        } else {
            return view('client.mypage.portfolio.partial.create');
        }*/
        return view('client.mypage.portfolio.partial.create');
    }

    /************************************************************************
     * Display create action
     * @description : 설명1 - 설명2
     * @url         : /url
     * @method      : POST
     * @return      : view , data , msg ...
     ************************************************************************/
    public function store(Request $request){
        try {
            $check = Portfolio::whereUserId(auth()->user()->id)->first();
            if(isset($check)) {flash('포트폴리오가 존재합니다.')->warning(); return back();}

            $request->validate([
                'portfolio_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $portfolio = Portfolio::firstOrCreate([
                'user_id'           =>auth()->user()->id,                                                               // 사용자 ID
                'content_ko'        =>$request->context_ko,                                                             // 한글내용
                'content_cn'        =>$request->context_cn,                                                             // 중문내용
                'content_en'        =>$request->context_en,                                                             // 영문내용
                'hidden_yn'         =>$request->hidden_yn ? 1 : 0,                                                      // 포트폴리오 숨김처리
                'email'             =>$request->email,                                                                  // 이메일
                'home_phone'        =>$request->home_phone,                                                             // 전화번호
                'facebook'          =>$request->facebook,                                                               // 페이스북
                'instagram'         =>$request->instagram,                                                              // 인스타그램
                'twitter'           =>$request->twitter,                                                                // 트위터
                'homepage'          =>$request->homepage,                                                               // 홈페이지
                'email_hidden'      =>$request->email_hidden ? 1 : 0,                                                   // 이메일 숨김처리
                'phone_hidden'      =>$request->phone_hidden ? 1 : 0,                                                   // 전화번호 숨김처리
                'facebook_hidden'   =>$request->facebook_hidden ? 1 : 0,                                                // 페이스북 숨김처리
                'instagram_hidden'  =>$request->instagram_hidden ? 1 : 0,                                               // 인스타그램 숨김처리
                'twitter_hidden'    =>$request->twitter_hidden ? 1 : 0,                                                 // 트위터 숨김처리
                'homepage_hidden'   =>$request->homepage_hidden ? 1 : 0,                                                // 홈페이지 숨김처리
            ]);

            $portfolio_image = $request->file('portfolio_image');
            if($portfolio_image){
                $savePath = $portfolio_image->store('images/portfolio/'.$portfolio->id.'/'.date('Y-m-d'), 'public');
                PortfolioImage::create([                                                                                // 포트폴리오 이미지 등록
                    'portfolio_id'      => $portfolio->id,
                    'image_division'    => 1,
                    'image_type'        =>$portfolio_image->getClientMimeType(),
                    'image_path'        =>$savePath,
                    'origin_name'       =>$portfolio_image->getClientOriginalName(),
                ]);
            }

            // 브랜드 등록
            $brand = Brand::create([
                'portfolio_id'  =>$portfolio->id,
                'name_ko'       =>$request->brand_name_ko ? $request->brand_name_ko : '',
                'name_cn'       =>$request->brand_name_cn ? $request->brand_name_cn : '',
                'name_en'       =>$request->brand_name_en ? $request->brand_name_en : '',
                'contents_ko'   =>$request->brand_content_ko ? $request->brand_content_ko : '',
                'contents_cn'   =>$request->brand_content_cn ? $request->brand_content_cn : '',
                'contents_en'   =>$request->brand_content_en ? $request->brand_content_en : '',
            ]);


            $brand_logo_image = $request->file('brand_logo_image');
            if($brand_logo_image){
                $savePath = $brand_logo_image->store('images/portfolio/'.$portfolio->id.'/'.date('Y-m-d'), 'public');
                PortfolioImage::create([                                                                                // 포트폴리오 이미지 등록
                    'portfolio_id'      => $portfolio->id,
                    'image_division'    => 2,
                    'image_type'        =>$brand_logo_image->getClientMimeType(),
                    'image_path'        =>$savePath,
                    'origin_name'       =>$brand_logo_image->getClientOriginalName(),
                ]);
            }

            $brand_thumbnail_image = $request->file('brand_thumbnail_image');
            if($brand_thumbnail_image){
                $savePath = $brand_thumbnail_image->store('images/portfolio/'.$portfolio->id.'/'.date('Y-m-d'), 'public');
                PortfolioImage::create([                                                                                // 포트폴리오 이미지 등록
                    'portfolio_id'      => $portfolio->id,
                    'image_division'    => 3,
                    'image_type'        =>$brand_thumbnail_image->getClientMimeType(),
                    'image_path'        =>$savePath,
                    'origin_name'       =>$brand_thumbnail_image->getClientOriginalName(),
                ]);
            }

            // 히스토리
            if(isset($request->history_array)){
            error_log("히스토리 있다 씨벌러마");
                foreach (json_decode($request->history_array,true) as $history){
                    $history['portfolio_id'] = $portfolio->id;
                    $history['type'] = '0';
                    HistoryAward::create($history);
                }
            }

            // 수상내역
            if(isset($request->awards_array)){
                error_log("어워즈 있다 씨벌러마");
                foreach (json_decode($request->awards_array, true) as $awards){
                    $awards['portfolio_id'] = $portfolio->id;
                    $awards['type'] = '1';
                    HistoryAward::create($awards);
                }
            }

            // 협회활동동
            if(isset($request->society_array)){
                error_log("협회활동 있다 씨벌러마");
                foreach (json_decode($request->society_array, true) as $society){
                    $society['portfolio_id'] = $portfolio->id;
                    AssociationActivity::create($society);
                }
            }

            for($i = 0; $i< $request->season_count; $i++){
                $look_book = LookBook::firstOrCreate([
                    'portfolio_id' =>$portfolio->id,
                    'season'=>$request->seasion.$i,
                    'year'=>$request->year
                ]);

                $look_book_images = $request->file('images');
                if($look_book_images) {
                    foreach ($look_book_images[$i] as $image) {
                        $savePath = $image->store('images/lookbook/1', 'public');
                        LookBookImage::updateOrCreate([                                                                                // 포트폴리오 이미지 등록
                            'look_book_id'      =>$look_book->id,
                            'image_type'        =>$image->getClientMimeType(),
                            'image_path'        =>$savePath,
                            'origin_name'       =>$image->getClientOriginalName(),
                        ]);
                    }
                }
            }

            return redirect(route('mypage_portfolio.index'));
        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->important();
            return back();
        }
    }

    /************************************************************************
     * Display detail view
     * @description : 설명1 - 설명2
     * @url         : /url/{id}
     * @method      : GET
     * @return      : view , data , msg ...
     ************************************************************************/
    public function show($id){

    }

    /************************************************************************
     * Display edit view
     * @description : 설명1 - 설명2
     * @url         : /url/{id}/edit
     * @method      : /GET
     * @return      : view , data , msg ...
     ************************************************************************/
    public function edit($id) {
        try {
            $datas = Portfolio::find($id);
            return view('client.mypage.portfolio.partial.edit',compact('datas'));
        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            return back();
        }
    }

    /************************************************************************
     * Display update action
     * @description : 설명1 - 설명2
     * @url         : /url/{id}
     * @method      : PUT
     * @return      : view , data , msg ...
     ************************************************************************/
    public function update(Request $request, $id){
        try {

        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            return back();
        }
    }

    /************************************************************************
     * Display destroy action
     * @description : 설명 1 설명
     * @url         : /url/{id}
     * @method      : DELETE
     * @return      : view , data , msg ...
     ************************************************************************/
    public function destroy($id) {
        try {

        } catch (\Exception $e){
            $msg = '잘못된 접근입니다. <br>'.$e->getMessage();
            flash($msg)->error();
            return back();
        }
    }
}
