<?php
?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container">
        <div class="inner">
            <div class="con-project-view">
                <h2 class="project-headline">
                    project
                </h2>
                <!-- project info-->
                <div class="project-info">
                    <h3 class="project-title">
                        가볍고 활동하기 좋은 면 슬립
                    </h3>
                    <div class="project-category">
                        <span>women's apparel</span>
                        <span>top</span>
                    </div>
                    <p class="project-outline">
                        뜨고, 미인을 예수는 모래뿐일 따뜻한 커다란 가슴에 놀이 같이 있다. 새가 끓는 이것을 온갖 대중을 앞이 커다란 있으랴? 뛰노는 오직 웅대한 것이다. 품으며, 열매를 이것을 하였으며, 꽃이 더운지라 것이다. 목숨이 오직 청춘 장식하는 굳세게 인생을 아니다. 작고 새가 그들에게 싹이 힘있다. 고행을 구하지 같이, 밥을 피는 평화스러운 새 관현악이며, 방황하여도, 것이다. 그것을 곳으로 동산에는 그들의 이상을 맺어, 않는 새 철환하였는가? 전인 천자만홍이 끓는 쓸쓸한 위하여, 인류의 시들어 부패뿐이다. 방지하는 속에 인간에 타오르고 무엇을 눈이 소리다.이것은 이상은 남는 교향악이다.
                    </p>
                </div>
                <!-- //project info -->

                <!-- project detail -->
                <div class="project-detail">

                    <div class="col">
                        <div class="project-cover">
                            <img src="../images/dummy/img-dummy-04.png" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <!-- status -->
                        <div class="project-status">
                            <div class="status-item">
                                <p class="status-name">모인 금액</p>
                                <p class="status-value">
                                    284,000
                                    <span>원</span>
                                </p>
                                <p class="status-percentage">
                                    77%
                                </p>
                            </div>
                            <div class="status-item">
                                <p class="status-name">남은 시간</p>
                                <p class="status-value">
                                    18
                                    <span>일</span>
                                </p>
                                <p class="status-date">
                                    2019년 10월 3일 마감
                                </p>
                            </div>
                            <div class="status-item">
                                <p class="status-name">모인 금액</p>
                                <p class="status-value">
                                    317
                                    <span>명</span>
                                </p>
                            </div>
                        </div>
                        <!-- //status -->

                        <!-- owner -->
                        <div class="project-owner">
                            <p class="owner-caption">디자이너</p>
                            <p class="owner-name ko">
                                김해우
                            </p>
                            <p class="owner-name en">
                                Haewoo Kim
                            </p>
                            <p class="owner-text">
                                이것을 만천하의 우리의 전인 굳세게 속에 할지라도 위하여서. 소리다.이것은 투명하되 꽃 그들은 것이다. 동산에는 따뜻한 뛰노는 때문이다. 얼마나 따뜻한 보배를 아름답고 모래뿐일 가지에 뛰노는 지혜는 약동하다. 피어나는 것이 이것을 밥을 피가 영원히 힘있다. 청춘이 품으며, 낙원을 이상은 인간의 날카로우나 아니한 운다. 넣는 그림자는 인생에 우리는 앞이 피다. 열락의 바이며, 있을 끓는 이것이다. 따뜻한 없는 황금시대를 못하다 피는 청춘을 주며, 가진 것이다. 바이며, 것은 기관과 투명하되 얼마나 가진 뿐이다.
                            </p>
                            <a href="" class="btn-green">포트폴리오로 이동</a>
                        </div>
                        <!-- //owner -->

                        <!-- product -->
                        <div class="project-product">
                            <div class="info-item">
                                <p class="info-name">상품명</p>
                                <p class="info-value name">활동하기 좋은 면 슬립</p>
                            </div>
                            <div class="info-item">
                                <p class="info-name">상품가</p>
                                <p class="info-value price">
                                    17,500
                                    <span>원</span>
                                </p>
                            </div>
                            <div class="info-item">
                                <ul class="option-list confirm">
                                    <!-- option item -->
                                    <li class="option-item">
                                        <div class="option-value">
                                            <span class="option-name">활동하기에 정말 좋은 면슬립 (Color : Blue / Size : M)</span>
                                            <input class="option-amount" min="1" type="number" value="1">
                                            <span class="option-price">5,552,500원</span>
                                        </div>
                                    </li>
                                    <!-- //option item -->
                                    <li class="option-item">
                                        <div class="option-value">
                                            <span class="option-name">활동하기에 정말 좋은 면슬립 (Color : Blue / Size : M)</span>
                                            <input class="option-amount" min="1" type="number" value="1">
                                            <span class="option-price">5,552,500원</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- //product -->
                    </div>
                </div>
                <!--// project detail -->

                <!-- sponsor form -->
                <div class="sponsor-form">
                    <div class="col">
                        <div class="sponsor-item">
                            <h3 class="title">후원자 정보</h3>
                            <div class="sponsor-box">
                                <div class="row">
                                    <p class="option-name">후원자명</p>
                                    <p class="option-value">김해우</p>
                                </div>
                                <div class="row">
                                    <p class="option-name">전화번호</p>
                                    <p class="option-value">010-0000-0000</p>
                                </div>
                                <div class="row">
                                    <p class="option-name">이메일</p>
                                    <p class="option-value">hwzzang@naver.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="sponsor-item">
                            <h3 class="title">배송지 정보</h3>
                            <div class="sponsor-box">
                                <div class="row">
                                    <p class="option-name">받는 분</p>
                                    <p class="option-value">김민영</p>
                                </div>
                                <div class="row">
                                    <p class="option-name">전화번호</p>
                                    <p class="option-value">010-0000-0000</p>
                                </div>
                                <div class="row">
                                    <p class="option-name">주소</p>
                                    <div class="address-form">
                                        <p class="option-value">(12345)서울시 서대문구 연희동 123</p>
                                        <p class="option-value">행복빌라 302호</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="option-name">배송시 요구사항</p>
                                    <p class="option-value">도어락 비밀번호 1234 입니다 올라오셔서 문앞에 두고가세</p>
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
                                    <p class="option-value">8000</p>
                                    <span class="unit">포인트</span>
                                    <span class="has-point">보유 적립금 : 8000 포인트</span>
                                </div>
                                <div class="row">
                                    <p class="option-name">결제수단</p>
                                    <p class="option-value">신용카드</p>
                                </div>
                            </div>
                        </div>
                        <div class="sponsor-item">
                            <h3 class="title">환불계좌 정보</h3>
                            <div class="sponsor-box">
                                <div class="row">
                                    <p class="option-name">은행명</p>
                                    <p class="option-value">우리은행</p>
                                </div>
                                <div class="row">
                                    <p class="option-name">예금주명</p>
                                    <p class="option-value">김해우</p>
                                </div>
                                <div class="row">
                                    <p class="option-name">계좌번호</p>
                                    <p class="option-value">01248568155745</p>
                                </div>
                            </div>
                        </div>
                        <div class="sponsor-total">
                            <div class="total">
                                <p class="total-caption">후원금액</p>
                                <p class="total-price">67,850</p>
                            </div>
                            <div class="btn-wrap">
                                <a class="btn-black">프로젝트 페이지로 이동</a>
                                <a class="btn-white">마이페이지로 이동</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //sponsor form-->

            </div>
        </div>
    </main>


@endsection
