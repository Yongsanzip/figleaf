<?php
// url : /mypage_message/1
// 메시지 상세보기
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
                    <li>
                        <a href="">후원 현황</a>
                    </li>
                    <li>
                        <a href="">내가 만든 프로젝트</a>
                    </li>
                    <li>
                        <a href="">작성한 커뮤니티</a>
                    </li>
                    <li class="on">
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
                    <div class="message-header">
                        <p class="message-name">김해우</p>
                        <h2 class="message-title">미리 준비하는 서울 패션 위크 컬렉션에등장한 두툼한 겨울 코트 1+1 이벤트</h2>
                        <a href="" class="btn-white">프로젝트로 이동</a>
                    </div>
                    <div class="message-contents">
                        <ul class="message-list">
                            <!-- 날짜 -->
                            <li class="date">
                                <p>2019.09.18</p>
                            </li>
                            <!-- 받은 메세지 -->
                            <li class="receive">
                                <div class="bubble">
                                    <p class="text">안녕하세요 김해우 고객님,<br> 무엇을 도와드릴까요</p>
                                    <span class="time">13:00</span>
                                </div>
                            </li>
                            <!-- 보낸 메세지 -->
                            <li class="send">
                                <div class="bubble">
                                    <p class="text">안녕하세요</p>
                                    <span class="time">13:00</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="message-footer">
                        <form>
                            <textarea class="textarea" spellcheck="false" placeholder="내용을 입력해주세요"></textarea>
                            <button class="btn-black">전송</button>
                        </form>
                    </div>
                </div>
                <!--// mypage contents -->


            </div>
        </div>

    </main>


@endsection
