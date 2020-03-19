<?php
?>
@extends('client.layouts.app')
@section('content')
    <?php $page_type = 'support'?>
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container">
        <div class="inner">
            <div class="con-project-view">
                @include('client.support.partial.layout.header')
                <!-- sponsor form -->
                <div class="sponsor-form">

                    <form id="supportForm" name="" method="POST">
                        @include('client.support.partial.common.payment')
                        <input type="hidden" name="support_code" id="support_code" value="{{$support->support_code}}">
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
                                <div class="title-wrap">
                                    <h3 class="title">배송지 정보</h3>
                                    <label class="checkbox-wrap">
                                        <input type="checkbox" onchange="fn_get_user_info(this);" placeholder="이름" class="input-field required">
                                        <p>후원자 정보와 동일</p>
                                    </label>
                                </div>
                                <div class="sponsor-box">
                                    <div class="row">
                                        <p class="option-name">받는 분</p>
                                        <input type="text" id="receiver_name" placeholder="이름" class="input-field required" data-title="받는 분">
                                    </div>
                                    <div class="row">
                                        <p class="option-name">전화번호</p>
                                        <input type="tel" id="receiver_cellphone" placeholder="전화번호" class="input-field required" data-title="받는분 전화번호">
                                    </div>
                                    <div class="row">
                                        <p class="option-name">주소</p>
                                        <div class="address-form">
                                            <label>
                                                <input type="text" id="receiver_zip_code" class="input-field code required" data-title="받는분 우편번호"   id="zip_code" placeholder="우편번호" readonly>
                                                <input type="text" id="receiver_address" class="input-field address required" data-title="받는분 주소"   id="address"  placeholder="주소" readonly>
                                                <button class="btn-black" type="button"  id="address_btn">검색하기</button>
                                            </label>
                                            <input type="text" id="receiver_address_detail" class="input-field detail"  placeholder="상세주소" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="option-name">배송시 요구사항</p>
                                        <input type="text" placeholder="배송시 요구사항" name="requirement" id="requirement" class="input-field">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            {{--결제 정보--}}
                            <?/*<div class="sponsor-item">
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
                            </div>*/?>
                            {{--환불계좌 정보--}}
                            <div class="sponsor-item">
                                <h3 class="title">환불계좌 정보</h3>
                                <div class="sponsor-box">
                                    <div class="row">
                                        <p class="option-name">은행명</p>
                                        @if(auth()->user()->bank_id)
                                            <p class="option-name">{{auth()->user()->bank->bank_name}}</p>
                                            <input type="hidden" id="bank_id">
                                            @else
                                            <select class="select required" data-title="은행명" name="bank_id" id="bank_id">
                                                <option selected disabled value="">- 은행명 -</option>
                                                @if(count($banks) > 0)
                                                    @foreach($banks as $bank)
                                                        <option value="{{$bank->id}}">{{$bank->bank_name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <p class="option-name">예금주명</p>
                                        @if(auth()->user()->bank_account_holder)
                                            <p class="option-name">{{auth()->user()->bank_account_holder}}</p>
                                            <input type="hidden" id="bank_account_holder">
                                        @else
                                            <input type="text" placeholder="예금주명" id="bank_account_holder" class="input-field required" data-title="예금주명" value="">
                                        @endif
                                    </div>

                                    <div class="row">
                                        <p class="option-name">계좌번호</p>
                                        @if(auth()->user()->bank_account_number)
                                            <p class="option-name">{{auth()->user()->bank_account_number}}</p>
                                            <input type="hidden" id="bank_account_number">
                                        @else
                                            <input type="text" placeholder="계좌번호" id="bank_account_number" class="input-field required" data-title="계좌번호">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    @if(in_array($data->condition,[2,5]))
                    <div class="col"></div>
                    <div class="col">
                        {{--후원금액--}}
                        <div class="sponsor-total">
                            <div class="total">
                                <p class="total-caption">후원금액</p>
                                <p class="total-price">{{ number_format($option_total_cost) }}</p>
                                <label class="checkbox-wrap">
                                    <input type="checkbox" id="agree">
                                    <p>위 사항을 모두 확인 하였으며, 구매 진행에 동의합니다.</p>
                                </label>
                            </div>
                            <div class="btn-wrap">
                                <button type="button" onclick="paybtn(this);" class="btn-black">후원하기</button>
                                <a href="{{$prevUrl}}" class="btn-white">후원취소</a>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <!-- //sponsor form-->

            </div>
        </div>
    </main>

    <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script>
        var fn_get_user_info = function(e){
            if(e.checked){
                document.getElementById('receiver_name').value              = '{{auth()->user()->name}}';
                document.getElementById('receiver_cellphone').value         = '{{auth()->user()->cellphone}}';
                document.getElementById('receiver_zip_code').value          = '{{auth()->user()->zip_code}}';
                document.getElementById('receiver_address').value           = '{{auth()->user()->address}}';
                document.getElementById('receiver_address_detail').value    = '{{auth()->user()->address_detail}}';
            } else{
                document.getElementById('receiver_name').value              = null;
                document.getElementById('receiver_cellphone').value         = null;
                document.getElementById('receiver_zip_code').value          = null;
                document.getElementById('receiver_address').value           = null;
                document.getElementById('receiver_address_detail').value    = null;
            }
        };
    </script>
@endsection
