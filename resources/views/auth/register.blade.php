<?php
// url : /
?>
@extends('client.layouts.app')
@section('content')
    <main class="container">

        <div class="inner">

            <div class="con-join">
                <form>

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
                            <input type="email" class="input-field" placeholder="이메일" autofocus>
                            <!-- error -->
                            <!-- <p class="text-error">필수항목입니다. 입력해주세요</p> -->
                            <!-- <p class="text-error">형식이 올바르지 않습니다.</p> -->
                        </div>
                        <div class="input-item">
                            <p class="input-name">비밀번호*</p>
                            <input type="password" class="input-field" placeholder="비밀번호">
                            <!-- error -->
                            <!-- <p class="text-error">필수항목입니다. 입력해주세요.</p> -->
                            <!-- <p class="text-error">형식이 올바르지 않습니다.</p> -->
                        </div>
                        <div class="input-item">
                            <p class="input-name">비밀번호 확인*</p>
                            <input type="password" class="input-field" placeholder="비밀번호 확인">
                            <p class="text-caption">영문, 숫자, 특수문자(!@#$%^&*+=-)를 조합한 n자 이상</p>
                            <!-- error -->
                            <!-- <p class="text-error">동일한 비밀번호를 입력해주세요</p> -->
                        </div>
                        <div class="input-item">
                            <p class="input-name">이름*</p>
                            <input type="text" class="input-field" placeholder="이름">
                            <!-- error -->
                            <!-- <p class="text-error">필수항목입니다. 입력해주세요</p> -->
                        </div>
                        <div class="input-item">
                            <p class="input-name">전화번호*</p>
                            <input type="tel" class="input-field" placeholder="(-)없이 입력해주세요">
                            <!-- error -->
                            <!-- <p class="text-error">필수항목입니다. 입력해주세요</p> -->
                            <!-- <p class="text-error">형식이 올바르지 않습니다.</p> -->
                        </div>
                        <div class="input-item">
                            <p class="input-name">핸드폰번호</p>
                            <input type="tel" class="input-field" placeholder="(-)없이 입력해주세요">
                            <!-- error -->
                            <!-- <p class="text-error">형식이 올바르지 않습니다.</p> -->
                        </div>
                        <div class="input-item">
                            <p class="input-name">주소</p>
                            <div class="address">
                                <input type="text" class="input-field" placeholder="우편번호">
                                <input type="text" class="input-field" placeholder="주소">
                                <button class="btn-black btn-adress">검색</button>
                            </div>
                            <input type="text" class="input-field" placeholder="상세주소">
                        </div>
                        <div class="input-item">
                            <p class="input-name">성별</p>
                            <div class="gender">
                                <label class="checkbox-wrap">
                                    <input type="radio">
                                    <p>남자</p>
                                </label>
                                <label class="checkbox-wrap">
                                    <input type="radio">
                                    <p>여자</p>
                                </label>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <a href="" class="btn-white">before</a>
                            <button class="btn-black">join</button>
                        </div>
                    </div>


                </form>
            </div>

        </div>

    </main>
@endsection
