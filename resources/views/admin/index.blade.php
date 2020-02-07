<?php
// url: /admin
?>
@extends('admin.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <!-- headline -->
            <div class="headline">
                <h2>Home</h2>
                <p>2019년 9월 16일 12:45 기준</p>
            </div>
            <!-- //headline -->

            <!-- dropdown -->
            <div class="dropdown-group">
                <div class="dropdown-header">
                    <h3>대기중인 프로젝트 수</h3>
                    <p>80개</p>
                    <div class="btn-drop"></div>
                </div>
                <div class="dropdown-contents">
                    <table class="table-data table-normal">
                        <thead>
                        <tr>
                            <th>제목</th>
                            <th>디자이너명</th>
                            <th>수량</th>
                            <th>시작일</th>
                            <th>종료일</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>30</td>
                            <td>2019-00-00</td>
                            <td>2019-00-00</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>30</td>
                            <td>2019-00-00</td>
                            <td>2019-00-00</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>30</td>
                            <td>2019-00-00</td>
                            <td>2019-00-00</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>30</td>
                            <td>2019-00-00</td>
                            <td>2019-00-00</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>30</td>
                            <td>2019-00-00</td>
                            <td>2019-00-00</td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="" class="more">더보기</a>
                </div>
            </div>
            <!-- //dropdown -->

            <!-- dropdown -->
            <div class="dropdown-group">
                <div class="dropdown-header">
                    <h3>진행중인 프로젝트 수</h3>
                    <p>80개</p>
                    <div class="btn-drop"></div>
                </div>
                <div class="dropdown-contents">
                    <table class="table-data table-normal">
                        <thead>
                        <tr>
                            <th>제목</th>
                            <th>디자이너명</th>
                            <th>수량</th>
                            <th>시작일</th>
                            <th>종료일</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>30</td>
                            <td>2019-00-00</td>
                            <td>2019-00-00</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>30</td>
                            <td>2019-00-00</td>
                            <td>2019-00-00</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>30</td>
                            <td>2019-00-00</td>
                            <td>2019-00-00</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>30</td>
                            <td>2019-00-00</td>
                            <td>2019-00-00</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>30</td>
                            <td>2019-00-00</td>
                            <td>2019-00-00</td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="" class="more">더보기</a>
                </div>
            </div>
            <!-- //dropdown -->

            <!-- dropdown -->
            <div class="dropdown-group">
                <div class="dropdown-header">
                    <h3>오늘 하루 펀딩 참여 수</h3>
                    <p>80개</p>
                    <div class="btn-drop"></div>
                </div>
                <div class="dropdown-contents">
                    <table class="table-data table-normal">
                        <thead>
                        <tr>
                            <th>제목</th>
                            <th>후원자명</th>
                            <th>후원자 아이디</th>
                            <th>후원금액</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>김도토리</td>
                            <td>ilovecat_koreancat</td>
                            <td>5,000,000원</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>김도토리</td>
                            <td>ilovecat_koreancat</td>
                            <td>5,000,000원</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>김도토리</td>
                            <td>ilovecat_koreancat</td>
                            <td>5,000,000원</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>김도토리</td>
                            <td>ilovecat_koreancat</td>
                            <td>5,000,000원</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>김도토리</td>
                            <td>ilovecat_koreancat</td>
                            <td>5,000,000원</td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="" class="more">더보기</a>
                </div>
            </div>
            <!-- //dropdown -->

            <!-- dropdown -->
            <div class="dropdown-group">
                <div class="dropdown-header">
                    <h3>오늘 가입한 유저 수</h3>
                    <p>16명</p>
                    <div class="btn-drop"></div>
                </div>
                <div class="dropdown-contents">
                    <table class="table-data table-normal">
                        <thead>
                        <tr>
                            <th>제목</th>
                            <th>후원자명</th>
                            <th>후원자 아이디</th>
                            <th>후원금액</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>김도토리</td>
                            <td>ilovecat_koreancat</td>
                            <td>5,000,000원</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>김도토리</td>
                            <td>ilovecat_koreancat</td>
                            <td>5,000,000원</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>김도토리</td>
                            <td>ilovecat_koreancat</td>
                            <td>5,000,000원</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>김도토리</td>
                            <td>ilovecat_koreancat</td>
                            <td>5,000,000원</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>김도토리</td>
                            <td>ilovecat_koreancat</td>
                            <td>5,000,000원</td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="" class="more">더보기</a>
                </div>
            </div>
            <!-- //dropdown -->

            <!-- dropdown -->
            <div class="dropdown-group">
                <div class="dropdown-header">
                    <h3>오늘의 1:1 문의</h3>
                    <p>80개</p>
                    <div class="btn-drop"></div>
                </div>
                <div class="dropdown-contents">
                    <table class="table-data table-normal">
                        <thead>
                        <tr>
                            <th>등록일</th>
                            <th>회원명</th>
                            <th>제목</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>2019-00-00 00:00</td>
                            <td>박다람쥐</td>
                            <td>끝나지 않는 나의 비지니스</td>
                        </tr>
                        <tr>
                            <td>2019-00-00 00:00</td>
                            <td>박다람쥐</td>
                            <td>끝나지 않는 나의 비지니스</td>
                        </tr>
                        <tr>
                            <td>2019-00-00 00:00</td>
                            <td>박다람쥐</td>
                            <td>끝나지 않는 나의 비지니스</td>
                        </tr>
                        <tr>
                            <td>2019-00-00 00:00</td>
                            <td>박다람쥐</td>
                            <td>끝나지 않는 나의 비지니스</td>
                        </tr>
                        <tr>
                            <td>2019-00-00 00:00</td>
                            <td>박다람쥐</td>
                            <td>끝나지 않는 나의 비지니스</td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="" class="more">더보기</a>
                </div>
            </div>
            <!-- //dropdown -->

            <!-- dropdown -->
            <div class="dropdown-group">
                <div class="dropdown-header">
                    <h3>배송진행이 필요한 프로젝트 수</h3>
                    <p>32개</p>
                    <div class="btn-drop"></div>
                </div>
                <div class="dropdown-contents">
                    <table class="table-data table-normal">
                        <thead>
                        <tr>
                            <th>제목</th>
                            <th>디자이너명</th>
                            <th>수량</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>수량</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>수량</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>수량</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>수량</td>
                        </tr>
                        <tr>
                            <td>끝나지 않는 나의 비지니스</td>
                            <td>박초롱초롱빛나리</td>
                            <td>수량</td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="" class="more">더보기</a>
                </div>
            </div>
            <!-- //dropdown -->




        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
