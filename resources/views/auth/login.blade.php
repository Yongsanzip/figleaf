<?php
// url : /
?>
@extends('client.layouts.app')
@section('content')
    <main class="container">

        <div class="inner">

            <div class="con-login">
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" id="loginForm" onsubmit="return fn_login_submit(this);">
                    @csrf
                    <h2 class="title">login</h2>

                    <div class="input-box">
                        <div class="input-item">
                            <p class="input-name">이메일</p>
                            <input type="email" class="input-field" name="email" id="email" placeholder="이메일" autofocus required>
                            <!-- error -->
                            <!-- <p class="text-error">이메일 형식이 올바르지 않습니다.</p> -->
                        </div>
                        <div class="input-item">
                            <p class="input-name">비밀번호</p>
                            <input type="password" class="input-field" name="password" id="password" placeholder="비밀번호" required>
                            <!-- error -->
                            <!-- <p class="text-error">등록되지 않은 이메일이거나, 이메일 또는 비밀번호가 회원정보와 일치하지 않습니다.</p> -->
                        </div>
                    </div>
                    <label class="checkbox-wrap">
                        <input type="checkbox" name="remeber">
                        <p>이메일 저장</p>
                    </label>
                    <button class="btn-black">로그인</button>

                </form>
                <div class="login-footer">
                    <div class="login-intro">
                        <p>아직 계정이 없으신가요?</p>
                        <a href="/register">회원가입</a>
                    </div>
                    <div class="login-menu">
                        <a href="">이메일 찾기</a>
                        <a href="">비밀번호 찾기</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript">
        var fn_login_submit = function(f){
            if(f.email.value ==''){
                alert("이메일을 입력해주세요");
                f.email.focus();
                return false;
            }
            if(f.password.value ==''){
                alert("비밀번호를 입력해주세요");
                f.password.focus();
                return false;
            }
            return true;
        }
    </script>
@endsection
