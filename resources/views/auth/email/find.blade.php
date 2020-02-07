<?php
// url : /email_find
// 이메일 찾기 버튼 누르면 success 페이지로 이동
?>
<form method="POST" action="{{ route('email_find.store') }}">
    @csrf
    <button>이메일 찾기</button>
</form>

@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container">

        <div class="inner">

            <div class="con-login">
                <form>

                    <h2 class="title margin-none">이메일 찾기</h2>

                    <p class="text">
                        회원명과 전화번호를 입력하시면
                        가입 시 사용하신 메일주소를 알려드립니다.
                    </p>

                    <div class="input-box">
                        <div class="input-item">
                            <p class="input-name">회원명</p>
                            <input type="password" class="input-field" placeholder="회원명" autofocus>
                            <!-- error -->
                            <!-- <p class="text-error">형식이 올바르지 않습니다.</p> -->
                        </div>
                        <div class="input-item">
                            <p class="input-name">전화번호</p>
                            <input type="password" class="input-field" placeholder="하이픈( - ) 없이 입력해주세요" autofocus>
                            <!-- error -->
                            <!-- <p class="text-error">형식이 올바르지 않습니다.</p> -->
                        </div>
                    </div>

                    <button class="btn-black">이메일 찾기</button>

                </form>
                <div class="login-footer">
                    <div class="login-intro">
                        <p>아직 계정이 없으신가요?</p>
                        <a href="">회원가입</a>
                    </div>
                </div>
            </div>

        </div>

    </main>

@endsection
