<?php
// url : /mypage_information
// 마이페이지 - 회원정보
?>

@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container">

        <div class="inner">
            <div class="con-mypage">
                <h2 class="title">my page</h2>
                <div class="text-center">
                    <div class="user-info-wrap">
                        <div class="user-info">
                            <p class="user-id">{{$datas->name}}({{$datas->email}})<span>님</span></p>
                            <div class="badge badge-skyblue">new</div>
                        </div>
                        <div class="user-point" style="display: none">
                            <p class="caption">point</p>
                            <p class="point">{{$datas->saving_point}}</p>
                        </div>
                    </div>
                </div>

                <!-- menu list -->
                <ul class="menu-list">
                    <li class="on">
                        <a href="">회원정보</a>
                    </li>
                    <li>
                        <a href="">후원 현황</a>
                    </li>
                    <li>
                        <a href="">내가 만든 프로젝트</a>
                    </li>
                    <li>
                        <a href="">작성한 커뮤니티</a>
                    </li>
                    <li>
                        <a href="">메시지</a>
                    </li>
                    <li>
                        <a href="">1:1 문의</a>
                    </li>
                    <li>
                        <a href="">포트폴리오</a>
                    </li>
                </ul>
                <!--// menu list -->

                <!-- mypage contents -->
                <div class="mypage-contents">
                    <form>
                        <table class="user-table">
                            <colgroup>
                                <col width="160px">
                                <col>
                            </colgroup>
                            <tbody>
                            <tr>
                                <th>이름</th>
                                <td>
                                    <input type="text" class="input-field" placeholder="이름">
                                    <div class="badge badge-skyblue">new</div>
                                </td>
                            </tr>
                            <tr>
                                <th>기존 비밀번호</th>
                                <td>
                                    <input type="password" class="input-field" placeholder="비밀번호">
                                </td>
                            </tr>
                            <tr>
                                <th>신규 비밀번호</th>
                                <td class="new-password">
                                    <input type="password" class="input-field" placeholder="신규 비밀번호">
                                    <input type="password" class="input-field" placeholder="신규 비밀번호 재입력">
                                </td>
                            </tr>
                            <tr>
                                <th>성별</th>
                                <td class="gender">
                                    <label class="checkbox-wrap">
                                        <input type="radio">
                                        <p>남자</p>
                                    </label>
                                    <label class="checkbox-wrap">
                                        <input type="radio">
                                        <p>여자</p>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <th>이메일</th>
                                <td class="email">
                                    <div>
                                        <p class="text">hwkim@yongsanzip.com</p>
                                        <label class="checkbox-wrap">
                                            <input type="checkbox">
                                            <p>정보메일을 수신하겠습니다.</p>
                                        </label>
                                    </div>
                                    <p class="caption">
                                        이메일 수신에 동의하시면 여러가지 할인혜택과 각종 이벤트 정보를 받아보실 수 있습니다.<br>
                                        회원가입관련, 주문배송관련 등의 메일은 수신동의와 상관없이 모든 회원에게 발송됩니다.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <th>휴대폰번호</th>
                                <td class="phone">
                                    <div>
                                        <input type="tel" class="input-field" placeholder="휴대폰번호">
                                        <label class="checkbox-wrap">
                                            <input type="checkbox">
                                            <p>SMS를 수신하겠습니다.</p>
                                        </label>
                                    </div>
                                    <p class="caption">
                                        SMS 수신에 동의하시면 여러가지 할인혜택과 각종 이벤트 정보를 받아보실 수 있습니다.<br>
                                        회원가입관련, 주문배송관련 등의 SMS는 수신동의와 상관없이 구매 회원에게 발송됩니다.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <th>주소</th>
                                <td class="address">
                                    <div class="postal">
                                        <label>
                                            <input type="text" class="input-field" placeholder="우편번호">
                                            <button class="btn-white">주소찾기</button>
                                        </label>
                                    </div>
                                    <div class="detail">
                                        <input type="text" class="input-field" placeholder="주소">
                                        <input type="text" class="input-field" placeholder="상세주소">
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <div class="btn-wrap">
                            <button class="btn-black">수정하기</button>
                        </div>
                    </form>
                </div>
                <!--// mypage contents -->


            </div>
        </div>

    </main>

@endsection
