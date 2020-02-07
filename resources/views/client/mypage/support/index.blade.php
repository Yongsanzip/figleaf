<?php
// url : /mypage_support
?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">


    <main class="container">

        <div class="inner">
            <div class="con-mypage">
                <h2 class="title">my page</h2>
                <div class="text-center">
                    <div class="user-info-wrap">
                        <div class="user-info">
                            <p class="user-id">김해우(hwkim920615)<span>님</span></p>
                            <div class="badge badge-skyblue">new</div>
                        </div>
                        <div class="user-point">
                            <p class="caption">point</p>
                            <p class="point">3,442</p>
                        </div>
                    </div>
                </div>

                <!-- menu list -->
                <ul class="menu-list">
                    <li>
                        <a href="">회원정보</a>
                    </li>
                    <li class="on">
                        <a href="">후원 현황</a>
                    </li>
                    <li>
                        <a href="">내가 만든 프로젝트</a>
                    </li>
                    <li>
                        <a href="">작성한 커뮤니티</a>
                    </li>
                    <li>
                        <a href="">메시지</a>
                    </li>
                    <li>
                        <a href="">1:1 문의</a>
                    </li>
                    <li>
                        <a href="">포트폴리오</a>
                    </li>
                </ul>
                <!--// menu list -->

                <!-- mypage contents -->
                <div class="mypage-contents">
                    <div class="project-list">
                        <!-- card -->
                        <div class="project-card">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="card-contents">
                                    <div class="project-info">
                                        <p class="project-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리 주얼리</p>
                                        <p class="project-name">Miguel Walker</p>
                                    </div>
                                    <div class="project-item">
                                        <p>세상을 뮤즈로 한 자켓 (베이지) - S</p>
                                    </div>
                                    <div class="project-delivery">
                                        <p>우체국택배 / 123456789123</p>
                                        <div class="badge badge-orange">교환완료</div>
                                        <!-- <div class="badge badge-gray">교환요청</div> -->
                                    </div>
                                </div>
                                <!-- 프로젝트 상태에 따른 뱃지 -->
                                <div class="badge badge-green">진행중</div>
                                <!-- <div class="badge badge-grey">실패</div> -->
                                <!-- <div class="badge badge-orange">성공</div> -->
                            </div>
                            <a href="" class="btn-white">상세내역</a>
                        </div>
                        <!--// card -->
                        <div class="project-card">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="card-contents">
                                    <div class="project-info">
                                        <p class="project-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리 가나다라 마바사 아자차 주얼리 </p>
                                        <p class="project-name">Miguel Walker</p>
                                    </div>
                                    <div class="project-item">
                                        <p>세상을 뮤즈로 한 자켓 가나다라 마바사 아자차(베이지) - S</p>
                                    </div>
                                    <div class="project-delivery">
                                        <p>우체국택배 / 123456789123</p>
                                        <!-- <div class="badge badge-orange">교환완료</div> -->
                                        <div class="badge badge-gray">교환요청</div>
                                    </div>
                                </div>
                                <!-- 프로젝트 상태에 따른 뱃지 -->
                                <!-- <div class="badge badge-green">진행중</div> -->
                                <div class="badge badge-grey">실패</div>
                                <!-- <div class="badge badge-orange">성공</div> -->
                            </div>
                            <a href="" class="btn-white">상세내역</a>
                        </div>
                        <div class="project-card">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="card-contents">
                                    <div class="project-info">
                                        <p class="project-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리 주얼리</p>
                                        <p class="project-name">Miguel Walker</p>
                                    </div>
                                    <div class="project-item">
                                        <p>세상을 뮤즈로 한 자켓 (베이지) - S</p>
                                    </div>
                                    <div class="project-delivery">
                                        <p>우체국택배 / 123456789123</p>
                                        <!-- <div class="badge badge-orange">교환완료</div> -->
                                        <!-- <div class="badge badge-gray">교환요청</div> -->
                                    </div>
                                </div>
                                <!-- 프로젝트 상태에 따른 뱃지 -->
                                <!-- <div class="badge badge-green">진행중</div> -->
                                <!-- <div class="badge badge-grey">실패</div> -->
                                <div class="badge badge-orange">성공</div>
                            </div>
                            <a href="" class="btn-white">상세내역</a>
                        </div>
                        <div class="project-card">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="card-contents">
                                    <div class="project-info">
                                        <p class="project-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리 주얼리</p>
                                        <p class="project-name">Miguel Walker</p>
                                    </div>
                                    <div class="project-item">
                                        <p>세상을 뮤즈로 한 자켓 (베이지) - S</p>
                                    </div>
                                    <div class="project-delivery">
                                        <p>우체국택배 / 123456789123</p>
                                        <div class="badge badge-orange">교환완료</div>
                                        <!-- <div class="badge badge-gray">교환요청</div> -->
                                    </div>
                                </div>
                                <!-- 프로젝트 상태에 따른 뱃지 -->
                                <div class="badge badge-green">진행중</div>
                                <!-- <div class="badge badge-grey">실패</div> -->
                                <!-- <div class="badge badge-orange">성공</div> -->
                            </div>
                            <a href="" class="btn-white">상세내역</a>
                        </div>
                        <div class="project-card">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../images/dummy/img-dummy-02.png" alt="">
                                </div>
                                <div class="card-contents">
                                    <div class="project-info">
                                        <p class="project-title">서울패션위크 참가 패션브랜드에서 선보이는 럭셔리 주얼리</p>
                                        <p class="project-name">Miguel Walker</p>
                                    </div>
                                    <div class="project-item">
                                        <p>세상을 뮤즈로 한 자켓 (베이지) - S</p>
                                    </div>
                                    <div class="project-delivery">
                                        <p>우체국택배 / 123456789123</p>
                                        <div class="badge badge-orange">교환완료</div>
                                        <!-- <div class="badge badge-gray">교환요청</div> -->
                                    </div>
                                </div>
                                <!-- 프로젝트 상태에 따른 뱃지 -->
                                <div class="badge badge-green">진행중</div>
                                <!-- <div class="badge badge-grey">실패</div> -->
                                <!-- <div class="badge badge-orange">성공</div> -->
                            </div>
                            <a href="" class="btn-white">상세내역</a>
                        </div>
                    </div>
                    <div class="btn-wrap">
                        <button class="btn-black">더보기</button>
                    </div>
                </div>
                <!--// mypage contents -->


            </div>
        </div>

    </main>



@endsection
