<?php
// url : /
?>
@extends('client.layouts.app')
@section('content')
    <main class="container">

        <div class="inner">

            <div class="con-join">
                <form class="surface-wrap" id="registerForm" method="POST" action="{{ route('register') }}" aria-label="가입하기" onsubmit="return fn_register_submit(this);">
                    @csrf
                    <div class="join-header">
                        <h2 class="join-title">create acount</h2>
                        <ul class="join-step">
                            <li class="on">약관동의</li>
                            <li class="on">정보입력</li>
                            <li>가입완료</li>
                        </ul>
                    </div>

                    <div class="join-box">
                        <div class="join-notice">
                            *는 필수입력입니다.
                        </div>
                        <div class="input-item">
                            <p class="input-name">이메일*</p>
                            <input type="email" id="email" class="input-field required" data-title="이메일" name="email" placeholder="이메일" autofocus onchange="fn_email_check(this);">
                            <div>
                                <p id="email_regex" class="text-error" style="display: none;">이메일 형식이 잘못되었습니다.</p>
                                <p id="email_check_fail" class="text-error" style="display: none;">이미사용되고 있는 아이디 입니다.</p>
                                <p id="email_check_success" class="text-success" style="display: none;">사용가능한 이메일입니다.</p>
                            </div>
                            <!-- error -->
                            <!-- <p class="text-error">필수항목입니다. 입력해주세요</p> -->
                            <!-- <p class="text-error">형식이 올바르지 않습니다.</p> -->
                        </div>
                        <div class="input-item">
                            <p class="input-name">비밀번호*</p>
                            <input type="password" class="input-field" name="password" placeholder="비밀번호">
                        </div>
                        <div class="input-item">
                            <p class="input-name">비밀번호 확인*</p>
                            <input type="password" class="input-field" name="password_confirmation" placeholder="비밀번호 확인">
                            <p class="text-caption">영문, 숫자, 특수문자(!@#$%^&*+=-)를 조합한 n자 이상</p>
                            <!-- error -->
                            <!-- <p class="text-error">동일한 비밀번호를 입력해주세요</p> -->
                        </div>
                        <div class="input-item">
                            <p class="input-name">이름*</p>
                            <input type="text" class="input-field required" data-title="이름" name="name" placeholder="이름">
                            <!-- error -->
                            <!-- <p class="text-error">필수항목입니다. 입력해주세요</p> -->
                        </div>
                        <div class="input-item">
                            <p class="input-name">전화번호</p>
                            <input type="tel" class="input-field" name="home_phone" data-title="전화번호" placeholder="(-)없이 입력해주세요">
                            <!-- error -->
                            <!-- <p class="text-error">필수항목입니다. 입력해주세요</p> -->
                            <!-- <p class="text-error">형식이 올바르지 않습니다.</p> -->
                        </div>
                        <div class="input-item">
                            <p class="input-name">핸드폰번호*</p>
                            <input type="tel" class="input-field required" data-title="핸드폰번호" name="cellphone" placeholder="(-)없이 입력해주세요">
                            <!-- error -->
                            <!-- <p class="text-error">형식이 올바르지 않습니다.</p> -->
                        </div>
                        <div class="input-item">
                            <p class="input-name">주소*</p>
                            <div class="address">
                                <input type="text" class="input-field required" data-title="우편번호" name="zip_code" id="zip_code" placeholder="우편번호" readonly>
                                <input type="text" class="input-field required" data-title="주소" name="address" id="address" placeholder="주소" readonly>
                                <button type="button" class="btn-black btn-adress" id="address_btn">검색</button>
                            </div>
                            <input type="text" class="input-field" name="address_detail" placeholder="상세주소" >
                        </div>
                        <div class="input-item">
                            <p class="input-name">성별</p>
                            <div class="gender">
                                <label class="checkbox-wrap">
                                    <input type="radio" name="gender" value="0" checked>
                                    <p>남자</p>
                                </label>
                                <label class="checkbox-wrap">
                                    <input type="radio" name="gender" value="1">
                                    <p>여자</p>
                                </label>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <a href="" class="btn-white">before</a>
                            <button class="btn-black">join</button>
                        </div>
                    </div>
                    <input type="hidden" name="sms_check" id="sms_check" value="{{$sms_check}}">
                    <input type="hidden" name="email_check" id="email_check" value="{{$email_check}}">
                </form>
            </div>

        </div>

    </main>
    <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script type="text/javascript">

        var fn_register_submit = function(f){
            if(!gn_validation(f)) return false;

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
            return false;
        }
        var fn_email_check = function(e){
            document.getElementById('email_regex').style.display='none';
            if(isEmail(e.value)){
                var params = {email:e.value};
                callAjax('POST',true,'/check_email','JSON','JSON',params,gn_ajax_error,fn_check_email_success);
            } else {
                document.getElementById('email').focus();
                document.getElementById('email').value = '';
                document.getElementById('email_regex').style.display='block';
            }

        }
        var fn_check_email_success = function(e){
            if(e.status){
                document.getElementById('email_check_success').style.display='block';
                document.getElementById('email_check_fail').style.display='none';
            } else {
                document.getElementById('email_check_success').style.display='none';
                document.getElementById('email_check_fail').style.display='block';
                document.getElementById('email').value='';
            }
        }
    </script>

@endsection

