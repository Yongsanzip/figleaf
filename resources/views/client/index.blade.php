<?php
// url : /
?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container">
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
                <!-- Add Arrows -->
                <div class="swiper-button-next hero-button-next"></div>
                <div class="swiper-button-prev hero-button-prev"></div>
                <!-- Add Pagination -->
                <div class="swiper-pagination hero-pagination"></div>
            </div>
            <!-- //slide -->
        </div>
        <!-- //hero -->

        <div class="inner">

            <!-- designer -->
            <section class="con-designer">
                <div class="section-title-wrap">
                    <h2 class="section-title">designer</h2>
                    <span class="caption">디자이너</span>
                    <a href="" class="more">전체보기</a>
                </div>
                <!-- slide -->
                <div class="swiper-container designer-slide">
                    <div class="swiper-wrapper">
                        <!-- slide item-->
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">티르티르</p>
                                <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                            </div>
                            <a href="" class="link"></a>
                        </div>
                        <!-- //slide item -->
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">티르티르</p>
                                <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                            </div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">티르티르</p>
                                <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                            </div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">티르티르</p>
                                <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                            </div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">티르티르</p>
                                <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                            </div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">티르티르</p>
                                <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                            </div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">티르티르</p>
                                <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                            </div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">티르티르</p>
                                <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                            </div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">티르티르</p>
                                <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                            </div>
                            <a href="" class="link"></a>
                        </div>
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
                    <a href="" class="more">전체보기</a>
                </div>
                <!-- slide -->
                <div class="swiper-container brand-slide">
                    <div class="swiper-wrapper">
                        <!-- slide item-->
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">티르티르</p>
                                <p class="card-text"> 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                            </div>
                            <a href="" class="link"></a>
                        </div>
                        <!-- //slide item -->
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">티르티르</p>
                                <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                            </div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">티르티르</p>
                                <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                            </div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">티르티르</p>
                                <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                            </div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">티르티르</p>
                                <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                            </div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">티르티르</p>
                                <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                            </div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">티르티르</p>
                                <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                            </div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">티르티르</p>
                                <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                            </div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <p class="card-title">티르티르</p>
                                <p class="card-text">천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서. </p>
                            </div>
                            <a href="" class="link"></a>
                        </div>
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
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="text-box">
                                    <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                    <p class="card-text"> 강주원 </p>
                                </div>

                                <div class="card-info">
                                    <div class="rating">
                                        <div class="rating-bar" style="width: 80%">80</div>
                                    </div>
                                    <div class="info-box-list">
                                        <div class="info-box amount">
                                            180개 남음
                                        </div>
                                        <div class="info-box date">
                                            6일 남음
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 성공할경우 뱃지 출력 -->
                            <div class="badge badge-orange">성공</div>
                            <a href="" class="link"></a>
                            <!-- 진행중인 경우 뱃지 출력 -->
                            <!-- <div class="badge badge-green">진행중</div> -->
                            <!-- 실패한 경우 뱃지 출력 -->
                            <!-- <div class="badge badge-grey">실패</div> -->
                        </div>
                        <!-- //slide item -->
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-02.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="text-box">
                                    <p class="card-title">주얼리 악세사리</p>
                                    <p class="card-text"> 강주원 </p>
                                </div>

                                <div class="card-info">
                                    <div class="rating">
                                        <div class="rating-bar" style="width: 80%">80</div>
                                    </div>
                                    <div class="info-box-list">
                                        <div class="info-box amount">
                                            180개 남음
                                        </div>
                                        <div class="info-box date">
                                            6일 남음
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 성공할경우 뱃지 출력 -->
                            <div class="badge badge-orange">성공</div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="text-box">
                                    <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                    <p class="card-text"> 강주원 </p>
                                </div>

                                <div class="card-info">
                                    <div class="rating">
                                        <div class="rating-bar" style="width: 80%">80</div>
                                    </div>
                                    <div class="info-box-list">
                                        <div class="info-box amount">
                                            180개 남음
                                        </div>
                                        <div class="info-box date">
                                            6일 남음
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 성공할경우 뱃지 출력 -->
                            <div class="badge badge-orange">성공</div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="text-box">
                                    <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                    <p class="card-text"> 강주원 </p>
                                </div>

                                <div class="card-info">
                                    <div class="rating">
                                        <div class="rating-bar" style="width: 80%">80</div>
                                    </div>
                                    <div class="info-box-list">
                                        <div class="info-box amount">
                                            180개 남음
                                        </div>
                                        <div class="info-box date">
                                            6일 남음
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 성공할경우 뱃지 출력 -->
                            <div class="badge badge-orange">성공</div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="text-box">
                                    <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                    <p class="card-text"> 강주원 </p>
                                </div>

                                <div class="card-info">
                                    <div class="rating">
                                        <div class="rating-bar" style="width: 80%">80</div>
                                    </div>
                                    <div class="info-box-list">
                                        <div class="info-box amount">
                                            180개 남음
                                        </div>
                                        <div class="info-box date">
                                            6일 남음
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 성공할경우 뱃지 출력 -->
                            <div class="badge badge-orange">성공</div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="text-box">
                                    <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                    <p class="card-text"> 강주원 </p>
                                </div>

                                <div class="card-info">
                                    <div class="rating">
                                        <div class="rating-bar" style="width: 80%">80</div>
                                    </div>
                                    <div class="info-box-list">
                                        <div class="info-box amount">
                                            180개 남음
                                        </div>
                                        <div class="info-box date">
                                            6일 남음
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 성공할경우 뱃지 출력 -->
                            <div class="badge badge-orange">성공</div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="text-box">
                                    <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                    <p class="card-text"> 강주원 </p>
                                </div>

                                <div class="card-info">
                                    <div class="rating">
                                        <div class="rating-bar" style="width: 80%">80</div>
                                    </div>
                                    <div class="info-box-list">
                                        <div class="info-box amount">
                                            180개 남음
                                        </div>
                                        <div class="info-box date">
                                            6일 남음
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 성공할경우 뱃지 출력 -->
                            <div class="badge badge-orange">성공</div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="text-box">
                                    <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                    <p class="card-text"> 강주원 </p>
                                </div>

                                <div class="card-info">
                                    <div class="rating">
                                        <div class="rating-bar" style="width: 80%">80</div>
                                    </div>
                                    <div class="info-box-list">
                                        <div class="info-box amount">
                                            180개 남음
                                        </div>
                                        <div class="info-box date">
                                            6일 남음
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 성공할경우 뱃지 출력 -->
                            <div class="badge badge-orange">성공</div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="text-box">
                                    <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                    <p class="card-text"> 강주원 </p>
                                </div>

                                <div class="card-info">
                                    <div class="rating">
                                        <div class="rating-bar" style="width: 80%">80</div>
                                    </div>
                                    <div class="info-box-list">
                                        <div class="info-box amount">
                                            180개 남음
                                        </div>
                                        <div class="info-box date">
                                            6일 남음
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 성공할경우 뱃지 출력 -->
                            <div class="badge badge-orange">성공</div>
                            <a href="" class="link"></a>
                        </div>

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
                    <a href="" class="more">전체보기</a>
                </div>
                <!-- slide -->
                <div class="swiper-container new-project-slide">
                    <div class="swiper-wrapper">
                        <!-- slide item-->
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="text-box">
                                    <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                    <p class="card-text"> 강주원 </p>
                                </div>

                                <div class="card-info">
                                    <div class="rating">
                                        <div class="rating-bar" style="width: 80%">80</div>
                                    </div>
                                    <div class="info-box-list">
                                        <div class="info-box amount">
                                            180개 남음
                                        </div>
                                        <div class="info-box date">
                                            6일 남음
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 성공할경우 뱃지 출력 -->
                            <div class="badge badge-orange">성공</div>
                            <a href="" class="link"></a>
                        </div>
                        <!-- //slide item -->
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-02.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="text-box">
                                    <p class="card-title">주얼리 악세사리</p>
                                    <p class="card-text"> 강주원 </p>
                                </div>

                                <div class="card-info">
                                    <div class="rating">
                                        <div class="rating-bar" style="width: 80%">80</div>
                                    </div>
                                    <div class="info-box-list">
                                        <div class="info-box amount">
                                            180개 남음
                                        </div>
                                        <div class="info-box date">
                                            6일 남음
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 성공할경우 뱃지 출력 -->
                            <div class="badge badge-orange">성공</div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="text-box">
                                    <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                    <p class="card-text"> 강주원 </p>
                                </div>

                                <div class="card-info">
                                    <div class="rating">
                                        <div class="rating-bar" style="width: 80%">80</div>
                                    </div>
                                    <div class="info-box-list">
                                        <div class="info-box amount">
                                            180개 남음
                                        </div>
                                        <div class="info-box date">
                                            6일 남음
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 성공할경우 뱃지 출력 -->
                            <div class="badge badge-orange">성공</div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="text-box">
                                    <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                    <p class="card-text"> 강주원 </p>
                                </div>

                                <div class="card-info">
                                    <div class="rating">
                                        <div class="rating-bar" style="width: 80%">80</div>
                                    </div>
                                    <div class="info-box-list">
                                        <div class="info-box amount">
                                            180개 남음
                                        </div>
                                        <div class="info-box date">
                                            6일 남음
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 성공할경우 뱃지 출력 -->
                            <div class="badge badge-orange">성공</div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="text-box">
                                    <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                    <p class="card-text"> 강주원 </p>
                                </div>

                                <div class="card-info">
                                    <div class="rating">
                                        <div class="rating-bar" style="width: 80%">80</div>
                                    </div>
                                    <div class="info-box-list">
                                        <div class="info-box amount">
                                            180개 남음
                                        </div>
                                        <div class="info-box date">
                                            6일 남음
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 성공할경우 뱃지 출력 -->
                            <div class="badge badge-orange">성공</div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="text-box">
                                    <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                    <p class="card-text"> 강주원 </p>
                                </div>

                                <div class="card-info">
                                    <div class="rating">
                                        <div class="rating-bar" style="width: 80%">80</div>
                                    </div>
                                    <div class="info-box-list">
                                        <div class="info-box amount">
                                            180개 남음
                                        </div>
                                        <div class="info-box date">
                                            6일 남음
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 성공할경우 뱃지 출력 -->
                            <div class="badge badge-orange">성공</div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="text-box">
                                    <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                    <p class="card-text"> 강주원 </p>
                                </div>

                                <div class="card-info">
                                    <div class="rating">
                                        <div class="rating-bar" style="width: 80%">80</div>
                                    </div>
                                    <div class="info-box-list">
                                        <div class="info-box amount">
                                            180개 남음
                                        </div>
                                        <div class="info-box date">
                                            6일 남음
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 성공할경우 뱃지 출력 -->
                            <div class="badge badge-orange">성공</div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="text-box">
                                    <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                    <p class="card-text"> 강주원 </p>
                                </div>

                                <div class="card-info">
                                    <div class="rating">
                                        <div class="rating-bar" style="width: 80%">80</div>
                                    </div>
                                    <div class="info-box-list">
                                        <div class="info-box amount">
                                            180개 남음
                                        </div>
                                        <div class="info-box date">
                                            6일 남음
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 성공할경우 뱃지 출력 -->
                            <div class="badge badge-orange">성공</div>
                            <a href="" class="link"></a>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-image">
                                <img src="{{asset('/images/dummy/img-dummy-01.png')}}" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="text-box">
                                    <p class="card-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리하고 심플한 주얼리 악세사리 모음</p>
                                    <p class="card-text"> 강주원 </p>
                                </div>

                                <div class="card-info">
                                    <div class="rating">
                                        <div class="rating-bar" style="width: 80%">80</div>
                                    </div>
                                    <div class="info-box-list">
                                        <div class="info-box amount">
                                            180개 남음
                                        </div>
                                        <div class="info-box date">
                                            6일 남음
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 성공할경우 뱃지 출력 -->
                            <div class="badge badge-orange">성공</div>
                            <a href="" class="link"></a>
                        </div>

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

        //designer slide
        var swiper = new Swiper('.designer-slide', {
            slidesPerView: 4,
            spaceBetween: 20,
            centeredSlides: true,
            navigation: {
                nextEl: '.designer-button-next',
                prevEl: '.designer-button-prev',
            },
        });

        //brand slide
        var swiper = new Swiper('.brand-slide', {
            slidesPerView:4,
            spaceBetween: 20,
            navigation: {
                nextEl: '.brand-button-next',
                prevEl: '.brand-button-prev',
            },

        });

        //recommend project slide
        var swiper = new Swiper('.recommend-project-slide', {
            slidesPerView:4,
            spaceBetween: 20,
            navigation: {
                nextEl: '.recommend-button-next',
                prevEl: '.recommend-button-prev',
            },
        });

        //new project slide
        var swiper = new Swiper('.new-project-slide', {
            slidesPerView:4,
            spaceBetween: 20,
            navigation: {
                nextEl: '.new-button-next',
                prevEl: '.new-button-prev',
            },
        });


    </script>

@endsection
