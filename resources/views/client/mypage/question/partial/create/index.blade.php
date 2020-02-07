<?php
// url : /mypage_question/create
?>
문의하기
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
                    <form>
                        <div class="question-form">
                            <input type="text" class="input-field" placeholder="제목" autofocus>
                            <textarea class="textarea" placeholder="내용을 입력하세요" spellcheck="false"></textarea>
                            <div class="btn-wrap">
                                <button class="btn-black">문의하기</button>
                                <button class="btn-white">취소하기</button>
                            </div>
                        </div>
                    </form>

                </div>
                <!--// mypage contents -->


            </div>
        </div>

    </main>



@endsection
