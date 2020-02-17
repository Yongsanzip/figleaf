<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::GET('/locale/{locale}','LocaleController@locale')->name('locale');

Auth::routes();

// 이메일 인증
Route::get('verified_email','Auth\RegisterController@verified_email')->name('verified_email');
// 비밀번호 재설정 send_reset_email 보내기
Route::post('send_reset_email','Auth\ResetPasswordController@send_reset_email')->name('send_reset_email');
/************************************** Client **************************************/
Route::group(['middleware'=>'locale'],function(){
    // 메인
    Route::get('/', 'Client\HomeController@index');
    // 메인 메뉴 - 디자이너 페이지
    Route::resource('designer', 'Client\MainMenu\DesignerController');
    // 메인 메뉴 - 브랜드 페이지
    Route::resource('brand', 'Client\MainMenu\BrandController');
    // 메인 메뉴 - 뉴스 페이지
    Route::resource('news', 'Client\MainMenu\NewsController');
    // 메인 메뉴 - Women's apparel
    Route::resource('women', 'Client\MainMenu\WomenController');
    // 메인 메뉴 - Men's apparel
    Route::resource('men', 'Client\MainMenu\MenController');
    // 메인 메뉴 - New
    Route::resource('new', 'Client\MainMenu\NewController');
    // 메인 메뉴 - Special
    Route::resource('special', 'Client\MainMenu\SpecialController');
    // 메인 메뉴 - Collection
    Route::resource('collection', 'Client\MainMenu\CollectionController');
    // 메인 메뉴 - Event
    Route::resource('event', 'Client\MainMenu\EventController');
    // 검색
    Route::resource('search', 'Client\Search\SearchController');
    // 회원가입 - 약관동의
    Route::get('/agree', 'Auth\AgreeController@index');

    Route::post('/agree_complete','Auth\AgreeController@complete');
    // 회원가입
    Route::post('/register', 'Auth\RegisterController@create')->name('register');
    // 이메일 찾기
    Route::resource('email_find', 'Auth\Email\EmailFindController');
    // 문의하기
    Route::resource('inquiry', 'Client\Inquiry\InquiryController');
    // 서비스 소개
    Route::get('service', 'Client\Crm\ServiceController@index');
    // 회원가입 약관
    Route::get('terms', 'Client\Crm\TermsConditionsController@index');
    // 개인정보처리방침
    Route::get('privacy', 'Client\Crm\PrivacyController@index');
    // 수수료 정책
    Route::get('fees', 'Client\Crm\FeesController@index');
    // 배송지연관련 정책
    Route::get('delay', 'Client\Crm\DelayController@index');
    // 스토리텔링 작성가이드
    Route::get('story_telling', 'Client\Crm\StoryTellingController@index');

    /****** 팝업 ******/
    // 수수료 정책
    Route::get('popup_fees', 'Client\Popup\FeesController@index');


    // 프로젝트
    Route::resource('project', 'Client\Project\ProjectController');
    // 포트폴리오


    // middleware - auth
    // 마이페이지 - 회원정보
    Route::resource('mypage_information', 'Client\MyPage\InformationController');
    // 마이페이지 - 회원정보 - 비밀번호 체크
    Route::POST('/check_password','Client\MyPage\InformationController@check_password');
    // 마이페이지 - 후원현황
    Route::resource('mypage_support', 'Client\MyPage\SupportController');
    // 마이페이지 - 내가 만든 프로젝트
    Route::resource('mypage_project', 'Client\MyPage\ProjectController');
    // 마이페이지 - 작성한 커뮤니티
    Route::resource('mypage_community', 'Client\MyPage\CommunityController');
    // 마이페이지 - 메시지
    Route::resource('mypage_message', 'Client\MyPage\MessageController');
    // 마이페이지 - 1:1 문의
    Route::resource('mypage_question', 'Client\MyPage\QuestionController');
    // 마이페이지 - 포트폴리오
    Route::resource('mypage_portfolio', 'Client\MyPage\PortfolioController');
    // 마이페이지 - 적립금
    Route::resource('mypage_point', 'Client\MyPage\PointController');
    /************************** 권한 필요 **************************/
    Route::group(['middleware' => 'auth'],function() {

    });
});


/************************************** Admin **************************************/
// 관리자 메인
Route::get('/admin', 'Admin\HomeController@index');
// 관리자 공지사항
Route::resource('admin_notice', 'Admin\Notice\NoticeController');
// 관리자 페이지 - 배너 관리
Route::resource('admin_banner', 'Admin\Page\BannerController');
// 관리자 페이지 - 콘텐츠 관리
Route::resource('admin_contents', 'Admin\Page\ContentsController');
// 관리자 페이지 - 뉴스등록
Route::resource('admin_news', 'Admin\Page\NewsController');
// 관리자 결제/배송 - 후원내역
Route::resource('admin_support', 'Admin\PaymentDelivery\SupportController');
// 관리자 결제/배송 - 배송내역
Route::resource('admin_delivery', 'Admin\PaymentDelivery\DeliveryController');
// 관리자 프로젝트
Route::resource('admin_project', 'Admin\Project\ProjectController');
// 관리자 프로젝트 - 비고
Route::resource('admin_note', 'Admin\Project\NoteController');
// 관리자 커뮤니티
Route::resource('admin_community', 'Admin\Project\CommunityController');
// 관리자 회원 - 회원정보
Route::resource('admin_information', 'Admin\User\InformationController');
// 관리자 회원 - 메시지
Route::resource('admin_message', 'Admin\User\MessageController');
// 관리자 회원 - 포트폴리오
Route::resource('admin_portfolio', 'Admin\User\PortfolioController');
// 관리자 회원 - 1:1 문의
Route::resource('admin_question', 'Admin\User\QuestionController');
