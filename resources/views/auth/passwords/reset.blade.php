<?php
// url : /password/reset
?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container">

        <div class="inner">

            <div class="con-login">
                <form>

                    <h2 class="title margin-none">비밀번호 찾기</h2>

                    <p class="text">
                        사용하실 새 비밀번호를 입력해주세요
                    </p>

                    <div class="input-box">
                        <div class="input-item">
                            <p class="input-name">새 비밀번호</p>
                            <input type="password" class="input-field" placeholder="새 비밀번호를 입력해주세요" autofocus>
                            <!-- error -->
                            <!-- <p class="text-error">비밀번호 형식이 올바르지 않습니다.</p> -->
                        </div>
                        <div class="input-item">
                            <p class="input-name">새 비밀번호 확인</p>
                            <input type="password" class="input-field" placeholder="새 비밀번호를 다시 입력해주세요" autofocus>
                            <!-- error -->
                            <!-- <p class="text-error">동일한 비밀번호를 입력해주세요</p> -->
                            <p class="text-caption">영문, 숫자, 특수문자(!@#$%^&*+=-)를 조합한 n자 이상</p>

                        </div>
                    </div>

                    <button class="btn-black">비밀번호 변경</button>

                </form>

            </div>

        </div>

    </main>

@endsection
