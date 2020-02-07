<?php
// 가입 후 이메일 인증 -> 가입 완료페이지
?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container">

        <div class="inner">

            <div class="con-join">
                <div class="join-header">
                    <h2 class="join-title">create acount</h2>
                </div>

                <div class="complate-box">
                    <img src="../images/common/logo.png" alt="logo">
                    <p class="text">
                        회원가입이 완료되었습니다.<br>
                        피그리프의 서비스를 즐겨보세요!
                    </p>
                    <a href="" class="btn-black">로그인 페이지로 이동</a>
                </div>
            </div>

        </div>

    </main>

@endsection
