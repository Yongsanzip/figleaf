<?php
// url : /news
?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container con-main">
        <!-- hero -->
        <div class="main-hero">
            <!-- slide -->
            <div class="swiper-container hero-slide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('/images/dummy/img-dummy-10.png')}}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('/images/dummy/img-dummy-11.png')}}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('/images/dummy/img-dummy-10.png')}}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('/images/dummy/img-dummy-11.png')}}" alt="">
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination hero-pagination"></div>
            </div>
            <!-- //slide -->
        </div>
        <!-- //hero -->


        <div class="inner">
            <!-- news -->
            <section class="con-news">
                <div class="section-title-wrap">
                    <h2 class="section-title">news</h2>
                    <span class="caption">뉴스</span>
                    <a href="" class="more">전체보기</a>
                </div>

                <div class="news-list">
                    <!-- card * 20 -->
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


                <div class="btn-wrap">
                    <div class="btn-more">View More News</div>
                </div>
            </section>
            <!--//news -->
        </div>

    </main>




    <script src="{{asset('js/swiper.min.js')}}"></script>
    <script>

        // hero slide
        var swiper = new Swiper('.hero-slide', {
            spaceBetween: 0,
            navigation: {
                nextEl: '.hero-button-next',
                prevEl: '.hero-button-prev',
            },
            loop:true,
            pagination: {
                el: '.hero-pagination',
                clickable: true,
            },
        });

    </script>

@endsection
