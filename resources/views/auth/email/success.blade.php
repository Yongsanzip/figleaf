<?php
?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container">

        <div class="inner">

            <div class="con-login">
                <form>

                    <h2 class="title margin-none">이메일 찾기</h2>

                    <div class="find-email">
                        <p class="text">
                            입력하신 정보와 일치하는 회원의 이메일주소는 다음과 같습니다.
                        </p>
                        <div class="result">
                            y****g@naver.com
                        </div>
                    </div>


                    <a href="" class="btn-black">로그인 페이지로 이동</a>

                </form>
            </div>

        </div>

    </main>

@endsection
