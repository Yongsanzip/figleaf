<?php
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <!-- headline -->
            <div class="headline">
                <h2>1:1 문의</h2>
            </div>
            <!-- //headline -->

            <!-- table 20 row-->
            <table class="table-data table-normal">
                <colgroup>
                    <col width="160px">
                    <col width="160px">
                    <col>
                    <col>
                    <col width="160px">
                </colgroup>
                <thead>
                <tr>
                    <th>등록일</th>
                    <th>회원명</th>
                    <th>이메일</th>
                    <th>제목</th>
                    <th>답변여부<button class="sort-column">정렬</button></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>송칠득</td>
                    <td>ilovebird@gmail.com</td>
                    <td class="text-left">나 이거 궁금쓰</td>
                    <td>완료</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>송칠득</td>
                    <td>ilovebird@gmail.com</td>
                    <td class="text-left">나 이거 궁금쓰</td>
                    <td>완료</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>송칠득</td>
                    <td>ilovebird@gmail.com</td>
                    <td class="text-left">나 이거 궁금쓰</td>
                    <td>완료</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>송칠득</td>
                    <td>ilovebird@gmail.com</td>
                    <td class="text-left">나 이거 궁금쓰</td>
                    <td>완료</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>송칠득</td>
                    <td>ilovebird@gmail.com</td>
                    <td class="text-left">나 이거 궁금쓰</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>송칠득</td>
                    <td>ilovebird@gmail.com</td>
                    <td class="text-left">나 이거 궁금쓰</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>송칠득</td>
                    <td>ilovebird@gmail.com</td>
                    <td class="text-left">나 이거 궁금쓰</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>송칠득</td>
                    <td>ilovebird@gmail.com</td>
                    <td class="text-left">나 이거 궁금쓰</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>송칠득</td>
                    <td>ilovebird@gmail.com</td>
                    <td class="text-left">나 이거 궁금쓰</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>송칠득</td>
                    <td>ilovebird@gmail.com</td>
                    <td class="text-left">나 이거 궁금쓰</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>송칠득</td>
                    <td>ilovebird@gmail.com</td>
                    <td class="text-left">나 이거 궁금쓰</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>송칠득</td>
                    <td>ilovebird@gmail.com</td>
                    <td class="text-left">나 이거 궁금쓰</td>
                    <td>-</td>
                </tr>

                </tbody>
            </table>
            <!-- //table type1 -->

            <!-- paginiation -->
            <nav class="pagination-wrap">
                <ul class="pagination">
                    <li><a> preview </a></li>
                    <li class="active"><a>1</a></li>
                    <li><a>2</a></li>
                    <li><a>3</a></li>
                    <li><a>4</a></li>
                    <li><a>5</a></li>
                    <li><a>6</a></li>
                    <li><a>7</a></li>
                    <li><a>8</a></li>
                    <li><a>9</a></li>
                    <li><a> next </a></li>
                </ul>
            </nav>
            <!-- //pagination -->

        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
