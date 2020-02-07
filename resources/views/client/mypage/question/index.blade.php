<?php
// url : /mypage_question
// 1:1문의하기
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
                            <p class="user-id">김해우(hwkim920615)<span>님</span></p>
                            <div class="badge badge-skyblue">new</div>
                        </div>
                        <div class="user-point">
                            <p class="caption">point</p>
                            <p class="point">3,442</p>
                        </div>
                    </div>
                </div>

                <!-- menu list -->
                <ul class="menu-list">
                    <li>
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
                    <li class="on">
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
                    <table class="question-table">
                        <colgroup>
                            <col width="60px">
                            <col width="300px">
                            <col>
                            <col width="150px">
                            <col width="150px">
                        </colgroup>
                        <thead>
                        <tr>
                            <th>no.</th>
                            <th>제목</th>
                            <th>내용</th>
                            <th>등록일</th>
                            <th>답변여부</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>33</td>
                            <td>
                                <p class="question-title">
                                    안녕하세요 프로젝트 옵션상품 문의드려요
                                </p>
                            </td>
                            <td>
                                <p class="question-text">
                                    봄날의 그들에게 품에 이상의 있는 지혜는 같지 가장 쓸쓸한 황금시대다. 피어나기 품에 꽃 교향악이다. 인도하겠다는 구하지 그와 설레는 보는 속에서 그러므로 위하여서 운다.봄날의 그들에게 품에 이상의 있는 지혜는 같지 가장 쓸쓸한 황금시대다. 피어나기 품에 꽃 교향악이다. 인도하겠다는 구하지 그와 설레는 보는 속에서 그러므로 위하여서 운다.
                                </p>
                            </td>
                            <td>
                                2020-01-18
                            </td>
                            <td>
                                <div class="badge badge-black">yes</div>
                                <!-- <div class="badge badge-grey">no</div> -->
                            </td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>
                                <p class="question-title">
                                    안녕하세요 프로젝트 옵션상품 문의드려요
                                </p>
                            </td>
                            <td>
                                <p class="question-text">
                                    봄날의 그들에게 품에 이상의 있는 지혜는 같지 가장 쓸쓸한 황금시대다.
                                </p>
                            </td>
                            <td>
                                2020-01-18
                            </td>
                            <td>
                                <!-- <div class="badge badge-black">yes</div> -->
                                <div class="badge badge-grey">no</div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="question-row">
                        <div class="pagination-wrap">
                            <ul class="pagination">
                                <li class="prev"><a href="">prev</a></li>
                                <li class="on"><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">4</a></li>
                                <li><a href="">5</a></li>
                                <li><a href="">6</a></li>
                                <li><a href="">7</a></li>
                                <li><a href="">8</a></li>
                                <li><a href="">9</a></li>
                                <li class="next"><a href="">next</a></li>
                            </ul>
                        </div>
                        <a href="" class="btn-white">1:1 문의하기</a>
                    </div>


                </div>
                <!--// mypage contents -->


            </div>
        </div>

    </main>


@endsection
