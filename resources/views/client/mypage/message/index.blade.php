<?php
// url : /mypage_message
// message
$tab='message';
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
                    @include('client.mypage.partial.navi')
                <!--// menu list -->

                <!-- mypage contents -->
                <div class="mypage-contents">
                    <div class="mypage-tab-list">
                        <a href="" class="mypage-tab on">문의/후원한 프로젝트</a>
                        <a href="" class="mypage-tab">만든 프로젝트</a>
                    </div>
                    <div class="project-message-list">
                        <!-- card * 10 -->
                        <div class="project-message-card">
                            <div class="card-image">
                                <img src="../images/dummy/img-dummy-01.png" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <a href="">
                                            미리 준비하는 서울패션위크 컬렉션에 등장한 두툼한 겨울코트 1+1 이벤트
                                        </a>
                                    </h3>
                                    <div class="new">new</div>
                                    <p class="card-date">2019.08.22 12:30</p>
                                </div>
                                <p class="card-name">Sophie Morrison</p>
                                <p class="card-message">
                                    제가 후원한 프로젝트 관련하여 질문이 있어 문의 드렸습니다. 배송 일자가 아직은 정해지지 않은 것 인가요?
                                </p>
                            </div>
                        </div>
                        <!--// card -->
                        <div class="project-message-card">
                            <div class="card-image">
                                <img src="../images/dummy/img-dummy-01.png" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <a href="">
                                            미리 준비하는 서울패션위크 컬렉션에 등장한 두툼한 겨울코트 1+1 이벤트
                                        </a>
                                    </h3>
                                    <div class="new">new</div>
                                    <p class="card-date">2019.08.22 12:30</p>
                                </div>
                                <p class="card-name">Sophie Morrison</p>
                                <p class="card-message">
                                    제가 후원한 프로젝트 관련하여 질문이 있어 문의 드렸습니다. 배송 일자가 아직은 정해지지 않은 것 인가요?
                                </p>
                            </div>
                        </div>
                        <div class="project-message-card">
                            <div class="card-image">
                                <img src="../images/dummy/img-dummy-01.png" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <a href="">
                                            미리 준비하는 서울패션위크 컬렉션에 등장한 두툼한 겨울코트 1+1 이벤트
                                        </a>
                                    </h3>
                                    <div class="new">new</div>
                                    <p class="card-date">2019.08.22 12:30</p>
                                </div>
                                <p class="card-name">Sophie Morrison</p>
                                <p class="card-message">
                                    제가 후원한 프로젝트 관련하여 질문이 있어 문의 드렸습니다. 배송 일자가 아직은 정해지지 않은 것 인가요?
                                </p>
                            </div>
                        </div>
                        <div class="project-message-card">
                            <div class="card-image">
                                <img src="../images/dummy/img-dummy-01.png" alt="">
                            </div>
                            <div class="card-contents">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <a href="">
                                            미리 준비하는 서울패션위크 컬렉션에 등장한 두툼한 겨울코트 1+1 이벤트
                                        </a>
                                    </h3>
                                    <div class="new">new</div>
                                    <p class="card-date">2019.08.22 12:30</p>
                                </div>
                                <p class="card-name">Sophie Morrison</p>
                                <p class="card-message">
                                    제가 후원한 프로젝트 관련하여 질문이 있어 문의 드렸습니다. 배송 일자가 아직은 정해지지 않은 것 인가요?
                                </p>
                            </div>
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
