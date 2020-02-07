<?php
// url : /women
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
                <!-- Add Pagination -->
                <div class="swiper-pagination hero-pagination"></div>
            </div>
            <!-- //slide -->
        </div>
        <!-- //hero -->


        <div class="inner">
            <section class="con-project">

                <div class="category-title-wrap">
                    <h2 class="category-title">New</h2>

                </div>

                <ul class="category-detail-list">
                    <li class="on">
                        <a href="">view all</a>
                    </li>
                    <li>
                        <a href="">outer</a>
                    </li>
                    <li>
                        <a href="">top</a>
                    </li>
                    <li>
                        <a href="">t-shirts/handie</a>
                    </li>
                    <li>
                        <a href="">pants</a>
                    </li>
                    <li>
                        <a href="">sports</a>
                    </li>
                    <li>
                        <a href="">dress</a>
                    </li>
                    <li>
                        <a href="">skirts</a>
                    </li>
                    <li>
                        <a href="">shoes</a>
                    </li>
                    <li>
                        <a href="">accessories</a>
                    </li>
                </ul>

                <div class="card-list">
                    <!-- card * 20 -->
                    <div class="card">
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
                        <!-- 진행중인 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-green">진행중</div> -->
                        <!-- 실패한 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-grey">실패</div> -->

                        <a href="" class="link"></a>
                    </div>
                    <!-- //card -->
                    <div class="card">
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
                        <!-- 진행중인 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-green">진행중</div> -->
                        <!-- 실패한 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-grey">실패</div> -->

                        <a href="" class="link"></a>
                    </div>
                    <div class="card">
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
                        <!-- 진행중인 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-green">진행중</div> -->
                        <!-- 실패한 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-grey">실패</div> -->

                        <a href="" class="link"></a>
                    </div>
                    <div class="card">
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
                        <!-- 진행중인 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-green">진행중</div> -->
                        <!-- 실패한 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-grey">실패</div> -->

                        <a href="" class="link"></a>
                    </div>
                    <div class="card">
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
                        <!-- 진행중인 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-green">진행중</div> -->
                        <!-- 실패한 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-grey">실패</div> -->

                        <a href="" class="link"></a>
                    </div>
                    <div class="card">
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
                        <!-- 진행중인 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-green">진행중</div> -->
                        <!-- 실패한 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-grey">실패</div> -->

                        <a href="" class="link"></a>
                    </div>
                    <div class="card">
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
                        <!-- 진행중인 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-green">진행중</div> -->
                        <!-- 실패한 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-grey">실패</div> -->

                        <a href="" class="link"></a>
                    </div>
                    <div class="card">
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
                        <!-- 진행중인 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-green">진행중</div> -->
                        <!-- 실패한 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-grey">실패</div> -->

                        <a href="" class="link"></a>
                    </div>
                    <div class="card">
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
                        <!-- 진행중인 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-green">진행중</div> -->
                        <!-- 실패한 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-grey">실패</div> -->

                        <a href="" class="link"></a>
                    </div>
                    <div class="card">
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
                        <!-- 진행중인 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-green">진행중</div> -->
                        <!-- 실패한 경우 뱃지 출력 -->
                        <!-- <div class="badge badge-grey">실패</div> -->

                        <a href="" class="link"></a>
                    </div>
                </div>

                <div class="btn-wrap">
                    <div class="btn-more">View More Project</div>
                </div>
            </section>
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
