<?php
?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container">

        <div class="inner">

            <div class="con-login">
                <form action="{{route('send_reset_email')}}" method="POST">
                    @csrf
                    <h2 class="title margin-none">비밀번호 찾기</h2>

                    <p class="text">
                        가입 시 사용하신 이메일을 입력하시면
                        새 비밀번호를 생성할 수 있는 링크를 보내드립니다.
                    </p>

                    <div class="input-box">
                        <div class="input-item">
                            <p class="input-name">이메일</p>
                            <input type="email" name="email" class="input-field" placeholder="가입하신 이메일 주소를 입력해주세요" autofocus>
                            <!-- error -->
                            <!-- <p class="text-error">이메일 형식이 올바르지 않습니다.</p> -->
                        </div>
                    </div>

                    <button type="submit" class="btn-black">비밀번호 재설정</button>

                </form>

            </div>

        </div>

    </main>

@endsection
