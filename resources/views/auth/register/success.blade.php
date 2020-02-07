<?php
?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container">

        <div class="inner">

            <div class="con-join">
                <div class="join-header">
                    <h2 class="join-title">create acount</h2>
                    <ul class="join-step">
                        <li class="on">약관동의</li>
                        <li class="on">정보입력</li>
                        <li class="on">가입완료</li>
                    </ul>
                </div>

                <div class="complate-box">
                    <img src="../images/common/logo.png" alt="logo">
                    <p class="text">
                        회원가입이 완료되었습니다.<br>
                        입력하신 이메일로 본인확인 메일을 보냈습니다.<br>
                        해당 이메일을 확인해주셔야 본 서비스를 이용하실 수 있습니다.
                    </p>
                    <a href="" class="btn-black">홈페이지로 이동</a>
                </div>
            </div>

        </div>

    </main>

@endsection
