<?php
// url : /password/reset
?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container">

        <div class="inner">

            <div class="con-login">
                <form action="{{route('password.update')}}" method="POST" onsubmit="return fn_reset_password_submit(this);">
                    @csrf
                    <h2 class="title margin-none">비밀번호 변경</h2>
                    <p class="text">사용하실 새 비밀번호를 입력해주세요</p>
                    <div class="input-box">
                        <div class="input-item">
                            <p class="input-name">새 비밀번호</p>
                            <input type="password" name="password" id="password" class="input-field" placeholder="새 비밀번호를 입력해주세요" autofocus>
                            <!-- error -->
                            <!-- <p class="text-error">비밀번호 형식이 올바르지 않습니다.</p> -->
                        </div>
                        <div class="input-item">
                            <p class="input-name">새 비밀번호 확인</p>
                            <input type="password" name="password_check" id="password_check" class="input-field" placeholder="새 비밀번호를 다시 입력해주세요" autofocus>
                            <!-- error -->
                            <!-- <p class="text-error">동일한 비밀번호를 입력해주세요</p> -->
                            <p class="text-caption">영문, 숫자, 특수문자(!@#$%^&*+=-)를 조합한 8자 이상</p>
                            <input type="hidden" name="email" value="{{$email}}">
                            <input type="hidden" name="token" value="{{$token}}">
                        </div>
                    </div>

                    <button class="btn-black">비밀번호 변경</button>

                </form>

            </div>

        </div>

    </main>
<script type="text/javascript">
    var fn_reset_password_submit = function(f){
        if(!gn_nullCheck(f.password.value)){
            alert('새 비밀번호를 입력해주세요');
            f.password.focus();
            return false;
        }
        if(!gn_nullCheck(f.password_check.value)){
            alert('새 비밀번호를 한번더 입력해주세요');
            f.password_check.focus();
            return false;
        }

        if(f.password.value != f.password_check.value){
            alert('새 비밀번호와 새 비밀번호 확인이 일치하지 않습니다.');
            return false;
        }

        if(!checkPasswordPattern(f.password.value)){
            alert("비밀번호는 8자리 이상 문자, 숫자, 특수문자로 구성하여야 합니다.");
            return false;
        }

        return true;
    }
</script>
@endsection
