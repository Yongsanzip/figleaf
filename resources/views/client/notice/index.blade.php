<?php
// url : notice
// 공지사항
?>
@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container">

        <div class="inner">
            <div class="con-notice">
                <h2 class="notice-headline">notice</h2>
                <table class="notice-table">
                    <colgroup>
                        <col>
                        <col width="160px">
                        <col width="80px">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>제목</th>
                        <th>등록일</th>
                        <th>조회수</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- tr * 15 -->
                    <!-- 고정 공지-->
                    <tr class="fixed">
                        <td class="text-left">[공지] 이용약관 변경 사전 안내</td>
                        <td>2019-00-00 00:00</td>
                        <td>47</td>
                    </tr>
                    <!-- 일반공지 -->
                    <tr>
                        <td class="text-left">[공지] 이용약관 변경 사전 안내</td>
                        <td>2019-00-00 00:00</td>
                        <td>47</td>
                    </tr>
                    <tr>
                        <td class="text-left">[공지] 이용약관 변경 사전 안내</td>
                        <td>2019-00-00 00:00</td>
                        <td>47</td>
                    </tr>
                    <tr>
                        <td class="text-left">[공지] 이용약관 변경 사전 안내</td>
                        <td>2019-00-00 00:00</td>
                        <td>47</td>
                    </tr>
                    <tr>
                        <td class="text-left">[공지] 이용약관 변경 사전 안내</td>
                        <td>2019-00-00 00:00</td>
                        <td>47</td>
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
        </div>

    </main>


@endsection
