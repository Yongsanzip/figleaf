<?php
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
                    <li class="on">
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
                    <table class="community-table">
                        <colgroup>
                            <col width="200px">
                            <col width="200px">
                            <col>
                        </colgroup>
                        <thead>
                        <tr>
                            <th>등록일</th>
                            <th>프로젝트명</th>
                            <th>내용</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- tr * 10 -->
                        <tr>
                            <td>2020-01-31</td>
                            <td>세상을 뮤즈로 한 자켓</td>
                            <td>봄날의 그들에게 품에 이상의 있는 지혜는 같지 가장 쓸쓸한 황금시대다. 피어나기 품에 꽃 교향악이다. 인도하겠다는 구하지 그와 설레는 보는 속에서 그러므로 위하여서 운다.</td>
                        </tr>
                        <tr>
                            <td>2020-01-31</td>
                            <td>세상을 뮤즈로 한 자켓</td>
                            <td>청춘은 구할 발휘하기 것이다. 피고, 사람은 길지 인간의 따뜻한 없으면, 위하여, 방황하였으며, 황금시대다. 구할 싹이 그러므로 쓸쓸한 때까지 만천하의 품으며, 그들은 교향악이다. 이것이야말로 얼음과 같이 피어나는 그들의 끓는다. 이상의 가지에 열매를 끝에 않는 그것을 가진 그러므로 군영과 황금시대다. 그들은 간에 이상이 위하여서. 얼음 위하여 사라지지 대한 곳이 그들의 못할 피다.</td>
                        </tr>
                        <tr>
                            <td>2020-01-31</td>
                            <td>짙은 화장도 걱정없이 말끔히 지워내는 오일 클렌저</td>
                            <td>봄날의 그들에게 품에 이상의 있는 지혜는 같지 가장 쓸쓸한 황금시대다. 피어나기 품에 꽃 교향악이다. 인도하겠다는 구하지 그와 설레는 보는 속에서 그러므로 위하여서 운다.</td>
                        </tr>
                        </tbody>
                    </table>
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
                </div>
                <!--// mypage contents -->


            </div>
        </div>

    </main>


@endsection

