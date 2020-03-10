<?php
// url : /admin_portfolio/1
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <div class="headline">
                <form action="{{route('admin_portfolio.update',['id'=>$datas->id])}}" onsubmit="return fn_admin_portfolio_submit(this);" method="POST">
                <h2>{{$datas->user->name}} 포트폴리오
{{--                    <small style="font-size: 15px; top: 20px;letter-spacing: 1px;"><span>({{$datas->user->role->role_name}})</span></small>--}}
                </h2>
                <label class="checkbox-group mt-16">
                    <input type="checkbox" id="open_yn" name="open_yn" onclick="fn_check_designer(this);" data-title="{{$datas->user->user_code}}" {{$datas->open_yn ==1 ? 'checked' : ''}} >
                    <p>열람여부</p>
                </label>
                <div class="portfolio-show-box">
                        @csrf
                        {!! method_field('PUT') !!}
                        <select class="text-field" name="hidden_yn">
                            <option value="" disabled selected>- 노출여부 - </option>
                            <option value="1" {{$datas->hidden_yn ==1 ? 'selected' : ''}}>노출</option>
                            <option value="0" {{$datas->hidden_yn ==0 ? 'selected' : ''}}>미노출</option>
                        </select>
                        <button type="submit" class="btn-black btn-s">업데이트</button>
                </div>
                <div class="devider mt-4"></div>
                </form>
            </div>

            <!-- 포트폴리오 컨텐츠  -->
            <div class="portfolio-contents">
                <img src="{{ count($datas->portfolio_images) > 0 ? asset('storage/'.( $datas->portfolio_images->first()->image_path )) : '#'}}" alt="">
                <p class="">
                    @if( app()->getLocale() =='ko')
                        {{ $datas->content_ko ? $datas->content_ko : ''}}
                    @elseif(app()->getLocale() =='en')
                        {{ $datas->content_en ? $datas->content_en : ''}}
                    @elseif(app()->getLocale() =='cn')
                        {{ $datas->content_cn ? $datas->content_cn : ''}}
                    @else
                        포트폴리오 내용이 존재하지 않습니다
                    @endif
                </p>
            </div>
            <!-- 연혁 -->
            @if($datas->histories())
                <div class="headline mt-100">
                    <h3>history</h3>
                    <div class="devider mt-4"></div>
                </div>
                <div class="portfolio-history">
                @foreach( $datas->histories() as $history)
                    <!-- history item -->
                            <h4 class="year">{{ $history->year }}</h4>
                            <ul class="list-history mb-80">
                                @if( app()->getLocale() =='ko')
                                    <li>{{ $history->history_ko }}</li>
                                @elseif(app()->getLocale() =='en')
                                    <li>{{ $history->history_en }}</li>
                                @elseif(app()->getLocale() =='cn')
                                    <li>{{ $history->history_cn }}</li>
                                @else
                                    히스토리 내용이 존재하지 않습니다
                                @endif
                            </ul>
                        <!-- //history item -->
                    @endforeach
                </div>
                @endif


            @if($datas->awards())
                <div class="headline mt-100">
                    <h3>award history</h3>
                    <div class="devider mt-4"></div>
                </div>

                <!-- 수상내역 -->
                <div class="portfolio-history">
                @foreach($datas->awards() as $awards)
                    <!-- history item -->
                            <h4 class="year">{{ $awards->year }}</h4>
                            <ul class="list-history mb-80">
                                @if( app()->getLocale() =='ko')
                                    <li>{{ $awards->history_ko }}</li>
                                @elseif(app()->getLocale() =='en')
                                    <li>{{ $awards->history_en }}</li>
                                @elseif(app()->getLocale() =='cn')
                                    <li>{{ $awards->history_cn }}</li>
                                @else
                                    히스토리 내용이 존재하지 않습니다
                                @endif
                            </ul>
                        <!-- //history item -->
                    @endforeach
                </div>
                @endif

                @if($datas->association_activties())
                <div class="headline mt-100">
                    <h3>association</h3>
                    <div class="devider mt-4"></div>
                </div>

                <!-- 협회 -->
                <div class="portfolio-assoc">
                    <ul class="list-assoc">
                    @foreach($datas->association_activties() as $association)
                        <!-- history item -->
                            <li>
                                <h4 class="year">{{$association->start_year}}~{{$association->end_year}}</h4>
                                @if( app()->getLocale() =='ko')
                                    <p>{{ $association->association_ko }}</p>
                                @elseif(app()->getLocale() =='en')
                                    <p>{{ $association->association_en }}</p>
                                @elseif(app()->getLocale() =='cn')
                                    <p>{{ $association->association_cn }}</p>
                                @else
                                    협회활동이 내용이 존재하지 않습니다
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
                    @endif


            <div class="headline mt-100">
                <h3>brand</h3>
                <div class="devider mt-4"></div>
            </div>

            <!-- 브랜드 -->
            <div class="portfolio-brand">
                <img src="{{ count($datas->brand_thumbnail_images) > 0  ? asset('storage/'. $datas->brand_thumbnail_images->first()->image_path ) : '#'}}" alt="">
                @if( app()->getLocale() =='ko')
                    {{ $datas->brand->contents_ko}}
                @elseif(app()->getLocale() =='en')
                    {{ $datas->brand->contents_en}}
                @elseif(app()->getLocale() =='en')
                    {{ $datas->brand->contents_cn}}
                @else
                    브랜드 설명 존재하지 않습니다
                @endif
            </div>

            <div class="headline mt-100">
                <h3>look book</h3>
                <div class="devider mt-4"></div>
            </div>

            <!-- 룩북 -->
            <div class="portfolio-lookbook">
            @if( $datas->look_books() )
                @foreach($datas->look_books as $look_book)
                    <!-- lookbook item -->
                            <h4 class="year">{{$look_book->year}} {{$look_book->season}}</h4>
                            <div class="slide-card slide-lookbook mb-60">
                                <div class="slide-wrap">
                                @if($look_book->look_book_images())
                                    @foreach($look_book->look_book_images as $image)
                                        <div class="slide-item">
                                            <img src="{{ asset('storage/'.$image->image_path) }}" alt="">
                                        </div>
                                    @endforeach
                                @endif
                                </div>
                            </div>
                    @endforeach
                @endif
            </div>

            <?php
//            <div class="headline mt-100">
//                <h3>project</h3>
//                <div class="devider mt-4"></div>
//            </div>
//
//            <div class="portfolio-project">
//                <div class="row text-right">
//                    <label class="checkbox-group">
//                        <input type="checkbox">
//                        <p>진행중인 프로젝트만 보기</p>
//                    </label>
//                </div>
//                <div class="slide-card slide-project">
//                    <div class="slide-wrap">
//                        <!-- 프로젝트 카드 -->
//                        <div class="slide-item">
//                            <div class="project-image">
//                                <img src="../assets/image/img-dummy-05.png" alt="">
//                            </div>
//                            <div class="project-info-box">
//                                <div class="project-info">
//                                    <p class="project-name">세상을 뮤즈로 한 자켓</p>
//                                    <p class="project-owner">강주원</p>
//                                </div>
//                                <div class="project-data-box">
//                                    <div class="progress mb-12"></div>
//                                    <div class="project-data">
//                                        <img src="../assets/image/ic-product.png" alt="">
//                                        <p>20개 남음</p>
//                                    </div>
//                                    <div class="project-data">
//                                        <img src="../assets/image/ic-calandar.png" alt="">
//                                        <p>6일 남음</p>
//                                    </div>
//                                </div>
//                            </div>
//                            <div class="badge badge-green">펀딩완료</div>
//                        </div>
//                        <!-- 프로젝트 카드 -->
//                        <div class="slide-item">
//                            <div class="project-image">
//                                <img src="../assets/image/img-dummy-05.png" alt="">
//                            </div>
//                            <div class="project-info-box">
//                                <div class="project-info">
//                                    <p class="project-name">세상을 뮤즈로 한 자켓</p>
//                                    <p class="project-owner">강주원</p>
//                                </div>
//                                <div class="project-data-box">
//                                    <div class="progress mb-12"></div>
//                                    <div class="project-data">
//                                        <img src="../assets/image/ic-product.png" alt="">
//                                        <p>20개 남음</p>
//                                    </div>
//                                    <div class="project-data">
//                                        <img src="../assets/image/ic-calandar.png" alt="">
//                                        <p>6일 남음</p>
//                                    </div>
//                                </div>
//                            </div>
//                            <div class="badge badge-green">펀딩완료</div>
//                        </div>
//                        <!-- 프로젝트 카드 -->
//                        <div class="slide-item">
//                            <div class="project-image">
//                                <img src="../assets/image/img-dummy-05.png" alt="">
//                            </div>
//                            <div class="project-info-box">
//                                <div class="project-info">
//                                    <p class="project-name">세상을 뮤즈로 한 자켓</p>
//                                    <p class="project-owner">강주원</p>
//                                </div>
//                                <div class="project-data-box">
//                                    <div class="progress mb-12"></div>
//                                    <div class="project-data">
//                                        <img src="../assets/image/ic-product.png" alt="">
//                                        <p>20개 남음</p>
//                                    </div>
//                                    <div class="project-data">
//                                        <img src="../assets/image/ic-calandar.png" alt="">
//                                        <p>6일 남음</p>
//                                    </div>
//                                </div>
//                            </div>
//                            <div class="badge badge-green">펀딩완료</div>
//                        </div>
//                        <!-- 프로젝트 카드 -->
//                        <div class="slide-item">
//                            <div class="project-image">
//                                <img src="../assets/image/img-dummy-05.png" alt="">
//                            </div>
//                            <div class="project-info-box">
//                                <div class="project-info">
//                                    <p class="project-name">세상을 뮤즈로 한 자켓</p>
//                                    <p class="project-owner">강주원</p>
//                                </div>
//                                <div class="project-data-box">
//                                    <div class="progress mb-12"></div>
//                                    <div class="project-data">
//                                        <img src="../assets/image/ic-product.png" alt="">
//                                        <p>20개 남음</p>
//                                    </div>
//                                    <div class="project-data">
//                                        <img src="../assets/image/ic-calandar.png" alt="">
//                                        <p>6일 남음</p>
//                                    </div>
//                                </div>
//                            </div>
//                            <div class="badge badge-green">펀딩완료</div>
//                        </div>
//                        <!-- 프로젝트 카드 -->
//                        <div class="slide-item">
//                            <div class="project-image">
//                                <img src="../assets/image/img-dummy-05.png" alt="">
//                            </div>
//                            <div class="project-info-box">
//                                <div class="project-info">
//                                    <p class="project-name">세상을 뮤즈로 한 자켓</p>
//                                    <p class="project-owner">강주원</p>
//                                </div>
//                                <div class="project-data-box">
//                                    <div class="progress mb-12"></div>
//                                    <div class="project-data">
//                                        <img src="../assets/image/ic-product.png" alt="">
//                                        <p>20개 남음</p>
//                                    </div>
//                                    <div class="project-data">
//                                        <img src="../assets/image/ic-calandar.png" alt="">
//                                        <p>6일 남음</p>
//                                    </div>
//                                </div>
//                            </div>
//                            <div class="badge badge-green">펀딩완료</div>
//                        </div>
//                        <!-- 프로젝트 카드 -->
//                        <div class="slide-item">
//                            <div class="project-image">
//                                <img src="../assets/image/img-dummy-05.png" alt="">
//                            </div>
//                            <div class="project-info-box">
//                                <div class="project-info">
//                                    <p class="project-name">세상을 뮤즈로 한 자켓</p>
//                                    <p class="project-owner">강주원</p>
//                                </div>
//                                <div class="project-data-box">
//                                    <div class="progress mb-12"></div>
//                                    <div class="project-data">
//                                        <img src="../assets/image/ic-product.png" alt="">
//                                        <p>20개 남음</p>
//                                    </div>
//                                    <div class="project-data">
//                                        <img src="../assets/image/ic-calandar.png" alt="">
//                                        <p>6일 남음</p>
//                                    </div>
//                                </div>
//                            </div>
//                            <div class="badge badge-green">펀딩완료</div>
//                        </div>
//                        <!-- 프로젝트 카드 -->
//                        <div class="slide-item">
//                            <div class="project-image">
//                                <img src="../assets/image/img-dummy-05.png" alt="">
//                            </div>
//                            <div class="project-info-box">
//                                <div class="project-info">
//                                    <p class="project-name">세상을 뮤즈로 한 자켓</p>
//                                    <p class="project-owner">강주원</p>
//                                </div>
//                                <div class="project-data-box">
//                                    <div class="progress mb-12"></div>
//                                    <div class="project-data">
//                                        <img src="../assets/image/ic-product.png" alt="">
//                                        <p>20개 남음</p>
//                                    </div>
//                                    <div class="project-data">
//                                        <img src="../assets/image/ic-calandar.png" alt="">
//                                        <p>6일 남음</p>
//                                    </div>
//                                </div>
//                            </div>
//                            <div class="badge badge-green">펀딩완료</div>
//                        </div>
//                    </div>
//                    <div class="btn-slide-wrap">
//                        <button class="btn-slide btn-slide-left"></button>
//                        <button class="btn-slide btn-slide-right"></button>
//                    </div>
//                </div>
//            </div>
//
//            <div class="headline mt-100">
//                <h3>news&blog</h3>
//                <div class="devider mt-4"></div>
//            </div>
//
//            <div class="portfolio-news">
//                <div class="slide-card slide-news">
//                    <div class="slide-wrap">
//                        <!-- card -->
//                        <div class="slide-item">
//                            <div class="news-image">
//                                <img src="../assets/image/img-dummy-07.png" alt="">
//                            </div>
//                            <div class="news-info-box">
//                                <p class="news-title">35년 전통 최고 품질의 클래식 법랑을 현대적으로 재해석한 크로우 캐년</p>
//                                <div class="row">
//                                    <p class="news-source">네이버블로그</p>
//                                    <p class="news-date">2019.08.22</p>											"
//                                </div>
//                            </div>
//                        </div>
//                        <!-- card -->
//                        <div class="slide-item">
//                            <div class="news-image">
//                                <img src="../assets/image/img-dummy-07.png" alt="">
//                            </div>
//                            <div class="news-info-box">
//                                <p class="news-title">35년 전통 최고 품질의 클래식 법랑을 현대적으로 재해석한 크로우 캐년</p>
//                                <div class="row">
//                                    <p class="news-source">네이버블로그</p>
//                                    <p class="news-date">2019.08.22</p>											"
//                                </div>
//                            </div>
//                        </div>
//                        <!-- card -->
//                        <div class="slide-item">
//                            <div class="news-image">
//                                <img src="../assets/image/img-dummy-07.png" alt="">
//                            </div>
//                            <div class="news-info-box">
//                                <p class="news-title">35년 전통 최고 품질의 클래식 법랑을 현대적으로 재해석한 크로우 캐년</p>
//                                <div class="row">
//                                    <p class="news-source">네이버블로그</p>
//                                    <p class="news-date">2019.08.22</p>											"
//                                </div>
//                            </div>
//                        </div>
//                        <!-- card -->
//                        <div class="slide-item">
//                            <div class="news-image">
//                                <img src="../assets/image/img-dummy-07.png" alt="">
//                            </div>
//                            <div class="news-info-box">
//                                <p class="news-title">35년 전통 최고 품질의 클래식 법랑을 현대적으로 재해석한 크로우 캐년</p>
//                                <div class="row">
//                                    <p class="news-source">네이버블로그</p>
//                                    <p class="news-date">2019.08.22</p>											"
//                                </div>
//                            </div>
//                        </div>
//                        <!-- card -->
//                        <div class="slide-item">
//                            <div class="news-image">
//                                <img src="../assets/image/img-dummy-07.png" alt="">
//                            </div>
//                            <div class="news-info-box">
//                                <p class="news-title">35년 전통 최고 품질의 클래식 법랑을 현대적으로 재해석한 크로우 캐년</p>
//                                <div class="row">
//                                    <p class="news-source">네이버블로그</p>
//                                    <p class="news-date">2019.08.22</p>											"
//                                </div>
//                            </div>
//                        </div>
//                    </div>
//                    <div class="btn-slide-wrap">
//                        <button class="btn-slide btn-slide-left"></button>
//                        <button class="btn-slide btn-slide-right"></button>
//                    </div>
//                </div>
//            </div>
            ?>

            <div class="headline mt-100">
                <h3>contact</h3>
                <div class="devider mt-4"></div>
            </div>

            <div class="portfolio-contact">
                <div class="contact-form">
                    <p class="contact-title">이메일</p>
                    <p class="contact-text"><a href="mailto:{{$datas->email}}">{{$datas->email}}</a></p>
                </div>
                <div class="contact-form">
                    <p class="contact-title">전화번호</p>
                    <p class="contact-text">{{$datas->home_phone}}</p>
                </div>
                <div class="contact-form">
                    <p class="contact-title">홈페이지</p>
                    <p class="contact-text"><a href="{{$datas->homepage}}" target="_blank">{{$datas->homepage}}</a></p>
                </div>
                <div class="contact-form">
                    <p class="contact-sns">
                        <a href="{{$datas->facebook}}" target="_blank">페이스북</a>
                    </p>
                </div>
                <div class="contact-form">
                    <p class="contact-sns">
                        <a href="{{$datas->twitter}}" target="_blank">트위터</a>
                    </p>
                </div>
                <div class="contact-form">
                    <p class="contact-sns">
                        <a href="{{$datas->instgram}}" target="_blank">인스타그램</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- //contesnts-inner -->
    </div>
<script type="text/javascript">
    var fn_admin_portfolio_submit = function(f){
        console.log(f.hidden_yn.value);
        if(f.hidden_yn.value==""){
            alert('노출 여부를 선택해주세요');
            return false;
        }
    }
    var fn_check_designer = function(e){
        if(e.checked){
            e.checked = false;
        } else {
            e.checked = true;
        }
        var params = {code:e.getAttribute('data-title')};
        callAjax('POST',true,'/check_designer',"JSON",'JSON',params,fn_check_designer_ajax_error,fn_check_designer_ajax_success);
    }
    var fn_check_designer_ajax_error = function(e){
        console.log(e);
    }
    var fn_check_designer_ajax_success = function(e){
        var open_chk = document.getElementById('open_yn');
        if(e.msg == 'normal'){
            if(!open_chk.checked){
                if(confirm('해당 유저는 일반회원등급입니다. 디자이너로 등급을 올리시겠습니까?')){
                    open_chk.checked = true;
                    return true;
                }
            }
            open_chk.checked = false;
            return false;
        } else {
            if(open_chk.checked){
                open_chk.checked = false;
            } else {
                open_chk.checked = true;
            }
        }
    }
</script>
@endsection
