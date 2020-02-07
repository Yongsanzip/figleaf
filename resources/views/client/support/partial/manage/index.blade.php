<?php
    ?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container">
        <div class="inner">
            <div class="con-sponsor-management">
                <div class="project-info">
                    <h2 class="project-name">가볍고 활동하기 좋은 면 슬립</h2>
                    <a href="" class="btn-green">프로젝트 페이지로 이동</a>
                    <p class="project-text">
                        프로젝트 소개 영역입니다. 뜨고, 미인을 예수는 모래뿐일 따뜻한 커다란 가슴에 놀이 같이 있다. 새가 끓는 이것을 온갖 대중을 앞이 커다란 있으랴? 뛰노는 오직 웅대한 것이다. 품으며, 열매를 이것을 하였으며, 꽃이 더운지라 것이다. 목숨이 오직 청춘 장식하는 굳세게 인생을 아니다. 작고 새가 그들에게 싹이 힘있다. 고행을 구하지 같이, 밥을 피는 평화스러운 새 관현악이며, 방황하여도, 것이다. 그것을 곳으로 동산에는 그들의 이상을 맺어, 않는 새 철환하였는가? 전인 천자만홍이 끓는 쓸쓸한 위하여, 인류의 시들어 부패뿐이다. 방지하는 속에 인간에 타오르고 무엇을 눈이 소리다.이것은 이상은 남는 교향악이다.
                    </p>
                </div>
                <div class="sponsor-list">
                    <div class="sponsor-headline">
                        총 283명의 후원자들
                    </div>

                    <table class="sponsor-table">
                        <colgroup>
                            <col width="180px">
                            <col width="200px">
                            <col width="120px">
                            <col>
                            <col width="150px">
                            <col width="150px">
                            <col width="150px">
                        </colgroup>
                        <thead>
                        <tr>
                            <th>후원일</th>
                            <th>이메일</th>
                            <th>이름</th>
                            <th>금액</th>
                            <th>배송여부</th>
                            <th>교환요청여부</th>
                            <th>교환여부</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="sponsor-item">
                            <td>2019-00-00 00:00</td>
                            <td>hwkim@yongsanzip.com</td>
                            <td>김해우</td>
                            <td class="price">1,454,600</td>
                            <td>배송 대기중</td>
                            <td>요청중</td>
                            <td>X</td>
                        </tr>
                        <tr class="sponsor-item">
                            <td>2019-00-00 00:00</td>
                            <td>hwkim@yongsanzip.com</td>
                            <td>김해우</td>
                            <td class="price">1,454,600</td>
                            <td>배송 대기중</td>
                            <td>요청중</td>
                            <td>X</td>
                        </tr>
                        <tr class="sponsor-item">
                            <td>2019-00-00 00:00</td>
                            <td>hwkim@yongsanzip.com</td>
                            <td>김해우</td>
                            <td class="price">1,454,600</td>
                            <td>배송 대기중</td>
                            <td>요청중</td>
                            <td>X</td>
                        </tr>
                        <tr class="sponsor-item">
                            <td>2019-00-00 00:00</td>
                            <td>hwkim@yongsanzip.com</td>
                            <td>김해우</td>
                            <td class="price">1,454,600</td>
                            <td>배송 대기중</td>
                            <td>요청중</td>
                            <td>X</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal-overlay">
            <div class="sponsor-modal">
                <div class="row">
                    <p class="headline">후원자 정보</p>
                    <div class="contents-box">
                        <div class="info-item">
                            <p class="name">후원자명</p>
                            <p class="value">김해우</p>
                            <button class="btn-black send" type="button" onclick="fnOpenMessage()">메시지 보내기</button>
                        </div>
                        <div class="info-item">
                            <p class="name">전화번호</p>
                            <p class="value">010-0000-0000</p>
                        </div>
                        <div class="info-item">
                            <p class="name">이메일</p>
                            <p class="value">hwkim@yongsanzip.com</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p class="headline">후원 정보</p>
                    <div class="contents-box product-list">
                        <div class="product-item">
                            <span class="name">활동하기 좋은 면 슬립 (Color : Orange / Size : M)</span>
                            <span class="amount">3</span>
                            <span class="price">35,500원</span>
                        </div>
                        <div class="product-item">
                            <span class="name">활동하기 좋은 면 슬립 (Color : Orange / Size : M)</span>
                            <span class="amount">3</span>
                            <span class="price">35,500원</span>
                        </div>
                        <div class="product-item">
                            <span class="name">활동하기 좋은 면 슬립 (Color : Orange / Size : M)</span>
                            <span class="amount">3</span>
                            <span class="price">35,500원</span>
                        </div>
                        <div class="product-item">
                            <span class="name">활동하기 좋은 면 슬립 (Color : Orange / Size : M)</span>
                            <span class="amount">3</span>
                            <span class="price">35,500원</span>
                        </div>
                        <div class="product-item total">
                            <span class="name">결제금액</span>
                            <span class="price">89,500원</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p class="headline">배송 정보</p>
                    <div class="contents-box">
                        <div class="info-item">
                            <p class="name">받는 분</p>
                            <p class="value">김민영</p>
                        </div>
                        <div class="info-item">
                            <p class="name">전화번호</p>
                            <p class="value">010-1234-5678</p>
                        </div>
                        <div class="info-item">
                            <p class="name">주소</p>
                            <p class="value">
                                (12345)서울시 서대문구 연희동 123-4 701호
                            </p>
                        </div>
                        <div class="info-item">
                            <p class="name">배송 시 요구사항</p>
                            <p class="value">도어락 비밀번호 12345 입니다. 현관문 앞에 두고가세요</p>
                        </div>
                        <div class="info-item">
                            <p class="name">송장번호</p>
                            <p class="value">-</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p class="headline">교환 정보</p>
                    <div class="contents-box">
                        <div class="info-item">
                            <p class="name">교환사유</p>
                            <p class="value">배송받은 상품의 결함</p>
                        </div>
                        <div class="info-item">
                            <p class="name">받는 분</p>
                            <p class="value">김민영</p>
                        </div>
                        <div class="info-item">
                            <p class="name">전화번호</p>
                            <p class="value">010-0000-0000</p>
                        </div>
                        <div class="info-item">
                            <p class="name">주소</p>
                            <p class="value">(13245)서울시 서대문구 연희동 13-4 320호</p>
                        </div>
                        <div class="info-item">
                            <p class="name">배송 시 요구사항</p>
                            <p class="value">도어락 비밀번호 12345 입니다. 현관문 앞에 두고가세요</p>
                        </div>
                        <div class="info-item">
                            <p class="name">송장번호</p>
                            <p class="value">(대한통운)123456789123</p>
                        </div>
                    </div>
                </div>
                <div class="btn-wrap">
                    <button class="btn-black" type="button" onclick="fnCloseModal()">확인</button>
                </div>
                <button class="btn-close" type="button" onclick="fnCloseModal()">모달닫기</button>
            </div>
            <div class="message-modal">
                <form>
                    <div class="row">
                        <p class="headline">후원자에게 메시지 보내기</p>
                        <div class="contents-box">
                            <div class="info-item">
                                <p class="name">후원자명</p>
                                <p class="value">김해우</p>
                            </div>
                            <div class="info-item">
                                <p class="name">전화번호</p>
                                <p class="value">010-0000-0000</p>
                            </div>
                            <div class="info-item">
                                <p class="name">이메일</p>
                                <p class="value">hwkim@yongsanzip.com</p>
                            </div>
                        </div>
                    </div>
                    <textarea class="textarea" placeholder="메시지 내용을 입력하세요"></textarea>
                    <div class="btn-wrap">
                        <button class="btn-black" type="button" onclick="fnCloseModal()">메세지 전송하기</button>
                    </div>
                </form>
                <button class="btn-close" type="button" onclick="fnCloseModal()">모달닫기</button>
            </div>
        </div>
    </main>


@endsection
