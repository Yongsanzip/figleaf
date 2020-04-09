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
                    <img src="{{asset('../images/common/logo-horizontal-black.png')}}" alt="logo">
                    <p class="text">
                        비밀번호를 재설정하기위에 메일을 보냈습니다.<br>
                        메일함을 확인하시고 비밀번호를 재설정해주세요!
                    </p>
                    <a href="/login" class="btn-black">로그인 페이지로 이동</a>
                </div>
            </div>

        </div>

    </main>

@endsection
