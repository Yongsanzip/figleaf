<?php
// url : /
?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container">
        <!-- hero -->
        @include('client.layouts.partial.hero')
        <!-- //hero -->

        <div class="inner">

            <!-- designer -->
            <section class="con-designer">
                <div class="section-title-wrap">
                    <h2 class="section-title">designer</h2>
                    <span class="caption">디자이너</span>
                    <a href="/designer" class="more">전체보기</a>
                </div>
                <!-- slide -->
                <div class="swiper-container designer-slide">
                    <div class="swiper-wrapper">
                        <!-- slide item-->
                        @foreach($designer as $data)
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('storage/'.$data->portfolio_images->first()->image_path)}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">{{ $data->user->name }}</p>
                                <p class="card-text">
                                    @if( app()->getLocale() =='ko')
                                        {{ $data->content_ko ? $data->content_ko : ''}}
                                    @elseif(app()->getLocale() =='en')
                                        {{ $data->content_en ? $data->content_en : ''}}
                                    @elseif(app()->getLocale() =='cn')
                                        {{ $data->content_cn ? $data->content_cn : ''}}
                                    @else
                                        포트폴리오 내용이 존재하지 않습니다
                                    @endif
                                </p>
                            </div>
                            <a href="/designer/{{ $data->id }}" class="link"></a>
                        </div>
                        @endforeach
                        <!-- //slide item -->
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next designer-button-next"></div>
                    <div class="swiper-button-prev designer-button-prev"></div>
                </div>
                <!--// slide-->
            </section>
            <!--// designer-->

            <!-- brand -->
            <section class="con-brand">
                <div class="section-title-wrap">
                    <h2 class="section-title">brand</h2>
                    <span class="caption">브랜드</span>
                    <a href="/brand" class="more">전체보기</a>
                </div>
                <!-- slide -->
                <div class="swiper-container brand-slide">
                    <div class="swiper-wrapper">
                        <!-- slide item-->
                        @foreach($brand as $data)
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('storage/'.$data->brand_thumbnail_images->first()->image_path)}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">{{ $data->user->name }}</p>
                                <p class="card-text">
                                    @if( app()->getLocale() =='ko')
                                        {{ $data->brand->name_ko}}
                                    @elseif(app()->getLocale() =='en')
                                        {{ $data->brand->name_en}}
                                    @elseif(app()->getLocale() =='en')
                                        {{ $data->brand->name_cn}}
                                    @else
                                        브랜드명이 존재하지 않습니다
                                    @endif
                                </p>
                            </div>
                            <a href="/designer/{{ $data->id }}" class="link"></a>
                        </div>
                        @endforeach
                        <!-- //slide item -->
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next brand-button-next"></div>
                    <div class="swiper-button-prev brand-button-prev"></div>
                </div>
                <!-- //slide -->
            </section>
            <!-- //brand -->



            <!-- news -->
            <section class="con-news">
                <div class="section-title-wrap">
                    <h2 class="section-title">news</h2>
                    <span class="caption">뉴스</span>
                    <a href="" class="more">전체보기</a>
                </div>
                <!-- news list-->
                <div class="news-list">
                    <!-- card -->
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <p class="card-title">
                                천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서 이성은 밝은 그들의 따뜻한.
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="card-name">프레시안</p>
                            <p class="card-date">2019.08.22</p>
                        </div>
                        <a href="" class="link"></a>
                    </div>
                    <!-- //card -->
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <p class="card-title">
                                천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서 이성은 밝은 그들의 따뜻한.
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="card-name">프레시안</p>
                            <p class="card-date">2019.08.22</p>
                        </div>
                        <a href="" class="link"></a>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <p class="card-title">
                                거선의 위하여서 이성은 밝은 그들의 따뜻한.
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="card-name">프레시안</p>
                            <p class="card-date">2019.08.22</p>
                        </div>
                        <a href="" class="link"></a>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                        </div>
                        <div class="card-contents">
                            <p class="card-title">
                                천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서 이성은 밝은 그들의 따뜻한.
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="card-name">프레시안</p>
                            <p class="card-date">2019.08.22</p>
                        </div>
                        <a href="" class="link"></a>
                    </div>
                </div>
            </section>
            <!-- //news -->
        </div>

        <!-- middile ad banner-->
        <div class="ad-banner ad-main-middle">
            <img src="{{asset('/images/dummy/img-dummy-12.png')}}" alt="">
            <button class="btn-close-black">닫기</button>
            <a href="" class="link"></a>
        </div>
        <!--// middle ad banner-->


        <div class="inner">
            <!-- recommend project -->
            <section class="con-project">
                <div class="section-title-wrap">
                    <h2 class="section-title">recommend projects</h2>
                    <span class="caption">추천</span>
                    <a href="" class="more">전체보기</a>
                </div>
                <!-- slide -->
                <div class="swiper-container recommend-project-slide">
                    <div class="swiper-wrapper">
                        <!-- slide item-->
                        @foreach($project as $data)
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('storage/'.$data->main_image->image_path)}}" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="text-box">
                                    <p class="card-title">{{ $data->title }}</p>
                                    <p class="card-text">{{ $data->introduction->designer_name }}</p>
                                </div>

                                <div class="card-info">
                                    <div class="rating">
                                        <div class="rating-bar" style="width: {{ ceil($data->supportCount($data->id)/$data->success_count*100) }}%"></div>
                                    </div>
                                    <div class="info-box-list">
                                        <div class="info-box amount">
                                            {{ $data->success_count - $data->supportCount($data->id) }}개 남음
                                        </div>
                                        <div class="info-box date">
                                            {{ $date = ceil((strtotime($data->deadline) - strtotime("now"))/(60*60 *24)) > 0 ? $date.'일 남음' : '마감' }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 성공할경우 뱃지 출력 -->
                            <div class="badge badge-orange">성공</div>
                            <a href="/project/{{ $data->id }}" class="link"></a>
                            @if($data->condition == 2)
                                <div class="badge badge-green">진행중</div>
                            @elseif($data->condition == 4)
                                <div class="badge badge-grey">실패</div>
                            @elseif($data->condition == 5)
                                <div class="badge badge-orange">성공</div>
                            @endif
                        </div>
                        @endforeach
                        <!-- //slide item -->
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next recommend-button-next"></div>
                    <div class="swiper-button-prev recommend-button-prev"></div>
                </div>
                <!-- //slide -->
            </section>
            <!--// recommend project -->

            <!-- new project -->
            <section class="con-project">
                <div class="section-title-wrap">
                    <h2 class="section-title">new projects</h2>
                    <span class="caption">신규</span>
                    <a href="/menu?type=new" class="more">전체보기</a>
                </div>
                <!-- slide -->
                <div class="swiper-container new-project-slide">
                    <div class="swiper-wrapper">
                        <!-- slide item-->
                        @foreach($new_project as $data)
                            <div class="swiper-slide card">
                                <div class="card-image">
                                    <img src="{{asset('storage/'.$data->main_image->image_path)}}" alt="">
                                </div>
                                <div class="card-contents">
                                    <div class="text-box">
                                        <p class="card-title">{{ $data->title }}</p>
                                        <p class="card-text">{{ $data->introduction->designer_name }}</p>
                                    </div>

                                    <div class="card-info">
                                        <div class="rating">
                                            <div class="rating-bar" style="width: {{ ceil($data->supportCount($data->id)/$data->success_count*100) }}%"></div>
                                        </div>
                                        <div class="info-box-list">
                                            <div class="info-box amount">
                                                {{ $data->success_count - $data->supportCount($data->id) }}개 남음
                                            </div>
                                            <div class="info-box date">
                                                {{ $date = ceil((strtotime($data->deadline) - strtotime("now"))/(60*60 *24)) > 0 ? $date.'일 남음' : '마감' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 성공할경우 뱃지 출력 -->
                                <a href="/project/{{ $data->id }}" class="link"></a>
                                @if($data->condition == 2)
                                    <div class="badge badge-green">진행중</div>
                                @elseif($data->condition == 4)
                                    <div class="badge badge-grey">실패</div>
                                @elseif($data->condition == 5)
                                    <div class="badge badge-orange">성공</div>
                                @endif
                            </div>
                        @endforeach
                        <!-- //slide item -->
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next new-button-next"></div>
                    <div class="swiper-button-prev new-button-prev"></div>
                </div>
                <!-- //slide -->
            </section>
            <!--// new project -->
        </div>

        <!-- bottom ad banner-->
        <div class="ad-banner ad-main-bottom">
            <img src="{{asset('/images/dummy/img-dummy-13.png')}}" alt="">
            <button class="btn-close-white">닫기</button>
            <a href="" class="link"></a>
        </div>
        <!--// bottom ad banner-->
    </main>




    <script src="{{asset('js/swiper.min.js')}}"></script>
    <script>
        var designerSwiper, brandSwiper, rpSwiper, npSwiper;
        var swpViewInit = window.innerWidth;
        var swpSpaceInit = 0;

        if(swpViewInit >= 1024){
            swpViewInit = 4;
            swpSpaceInit = 20;
        }else{
            swpViewInit = 2;
            swpSpaceInit = 10;
        }


        //designer slide
        designerSwiper = new Swiper('.designer-slide', {
            slidesPerView: swpViewInit,
            spaceBetween: swpSpaceInit,
            centeredSlides: true,
            navigation: {
                nextEl: '.designer-button-next',
                prevEl: '.designer-button-prev',
            },
        });


        //brand slide
        brandSwiper = new Swiper('.brand-slide', {
            slidesPerView:swpViewInit,
            spaceBetween: swpSpaceInit,
            navigation: {
                nextEl: '.brand-button-next',
                prevEl: '.brand-button-prev',
            },

        });

        //recommend project slide
        rpSwiper = new Swiper('.recommend-project-slide', {
            slidesPerView:swpViewInit,
            spaceBetween: swpSpaceInit,
            navigation: {
                nextEl: '.recommend-button-next',
                prevEl: '.recommend-button-prev',
            },
        });


        //new project slide
        npSwiper = new Swiper('.new-project-slide', {
            slidesPerView:swpViewInit,
            spaceBetween: swpSpaceInit,
            navigation: {
                nextEl: '.new-button-next',
                prevEl: '.new-button-prev',
            },
        });


        function resizeSlide(){
            //device width check
            var ww = $(window).width();
            //pc device
            if (ww>=1024){
                designerSwiper.params.slidesPerView = 4;
                brandSwiper.params.slidesPerView = 4;
                rpSwiper.params.slidesPerView = 4;
                npSwiper.params.slidesPerView = 4;

                designerSwiper.params.spaceBetween = 20;
                brandSwiper.params.paceBetweenw =20;
                rpSwiper.params.spaceBetween = 20;
                npSwiper.params.spaceBetween = 20;

            }
            //mobile device
            if (ww<1024){
                designerSwiper.params.slidesPerView = 2;
                brandSwiper.params.slidesPerView = 2;
                rpSwiper.params.slidesPerView = 2;
                npSwiper.params.slidesPerView = 2;

                designerSwiper.params.spaceBetween = 10;
                brandSwiper.params.paceBetweenw =10;
                rpSwiper.params.spaceBetween = 10;
                npSwiper.params.spaceBetween = 10;
            }
        }

        //responsive
        window.addEventListener('resize',resizeSlide);

        //designer contents reset
        document.getElementsByClassName('designer-button-next')[0].click();
    </script>

@endsection
