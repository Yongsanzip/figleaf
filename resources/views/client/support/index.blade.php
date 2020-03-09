<?php
?>
@extends('client.layouts.app')
@section('content')
    <?php $page_type = 'support'?>
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container">
        <div class="inner">
            <div class="con-project-view">
                @include('client.project.partial.layouts.header')
                <!-- sponsor form -->
                <div class="sponsor-form">
                    <form>
                        <div class="col">
                            <div class="sponsor-item">
                                <h3 class="title">후원자 정보</h3>
                                <div class="sponsor-box">
                                    <div class="row">
                                        <p class="option-name">후원자명</p>
                                        <input type="text" placeholder="이름" class="input-field" value="{{auth()->user()->name}}" readonly>
                                    </div>
                                    <div class="row">
                                        <p class="option-name">전화번호</p>
                                        <input type="tel" placeholder="전화번호" class="input-field" value="{{auth()->user()->cellphone}}" readonly>
                                    </div>
                                    <div class="row">
                                        <p class="option-name">이메일</p>
                                        <input type="email" placeholder="이메일" class="input-field" value="{{auth()->user()->email}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="sponsor-item">
                                <h3 class="title">배송지 정보</h3>
                                <div class="sponsor-box">
                                    <div class="row">
                                        <p class="option-name">받는 분</p>
                                        <input type="text" placeholder="이름" class="input-field">
                                    </div>
                                    <div class="row">
                                        <p class="option-name">전화번호</p>
                                        <input type="tel" placeholder="전화번호" class="input-field">
                                    </div>
                                    <div class="row">
                                        <p class="option-name">주소</p>
                                        <div class="address-form">
                                            <label>
                                                <input type="text" class="input-field code" placeholder="우편번호">
                                                <input type="text" class="input-field address" placeholder="주소">
                                                <button class="btn-black" type="button">검색하기</button>
                                            </label>
                                            <input type="text" placeholder="상세주소" class="input-field detail">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="option-name">배송시 요구사항</p>
                                        <input type="text" placeholder="배송시 요구사항" class="input-field">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="sponsor-item">
                                <h3 class="title">결제 정보</h3>
                                <div class="sponsor-box">
                                    <div class="row point">
                                        <p class="option-name">적립금 사용</p>
                                        <input type="text" placeholder="" class="input-field">
                                        <span class="unit">포인트</span>
                                        <span class="has-point">보유 적립금 : 8000 포인트</span>
                                    </div>
                                    <div class="row">
                                        <p class="option-name">결제수단</p>
                                        <select class="select">
                                            <option selected disabled>- 결제수단 -</option>
                                            <option>옵션1</option>
                                            <option>옵션2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="sponsor-item">
                                <h3 class="title">환불계좌 정보</h3>
                                <div class="sponsor-box">
                                    <div class="row">
                                        <p class="option-name">은행명</p>
                                        <select class="select">
                                            <option selected disabled>- 은행명 -</option>
                                            <option>옵션1</option>
                                            <option>옵션2</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <p class="option-name">예금주명</p>
                                        <input type="text" placeholder="예금주명" class="input-field">
                                    </div>
                                    <div class="row">
                                        <p class="option-name">계좌번호</p>
                                        <input type="text" placeholder="계좌번호" class="input-field">
                                    </div>
                                </div>
                            </div>
                            <div class="sponsor-total">
                                <div class="total">
                                    <p class="total-caption">후원금액</p>
                                    <p class="total-price">{{ number_format($option_total_cost) }}</p>
                                    <label class="checkbox-wrap">
                                        <input type="checkbox">
                                        <p>위 사항을 모두 확인 하였으며, 구매 진행에 동의합니다.</p>
                                    </label>
                                </div>
                                <div class="btn-wrap">
                                    <button class="btn-black">후원하기</button>
                                    <button class="btn-white">후원취소</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- //sponsor form-->

            </div>
        </div>
    </main>


@endsection
