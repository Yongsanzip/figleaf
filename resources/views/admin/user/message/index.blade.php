<?php
// url : /admin_message
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-wrap">
            <!-- contesnts-inner -->
            <div class="contents-inner">

                <!-- headline -->
                <div class="headline">
                    <h2>메세지</h2>
                </div>
                <!-- //headline -->

                <!-- search -->
                <div class="search">
                    <div class="search-select">
                        <select>
                            <option disabled selected>- 검색기준 -</option>
                            <option>검색기준</option>
                            <option>검색기준</option>
                        </select>
                    </div>
                    <div class="search-keyword">
                        <input type="text" placeholder="검색어를 입력하세요" spellcheck="false">
                        <button>검색</button>
                    </div>
                </div>

                <!-- table 20 row-->
                <table class="table-data table-normal">
                    <colgroup>
                        <col width="160px">
                        <col width="160px">
                        <col width="160px">
                        <col>
                        <col>
                    </colgroup>
                    <thead>
                    <tr>
                        <th>최근 메세지 전송일</th>
                        <th>회원명</th>
                        <th>디자이너명</th>
                        <th>프로젝트명</th>
                        <th>최신메시지 내용</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2019-00-00 00:00</td>
                        <td>송칠득</td>
                        <td>김보송</td>
                        <td class="text-left">가을의 속삭임 자켓</td>
                        <td class="text-left"> 궁금쓰 </td>
                    </tr>
                    <tr>
                        <td>2019-00-00 00:00</td>
                        <td>송칠득</td>
                        <td>김보송</td>
                        <td class="text-left">가을의 속삭임 자켓</td>
                        <td class="text-left"> 궁금쓰 </td>
                    </tr>
                    <tr>
                        <td>2019-00-00 00:00</td>
                        <td>송칠득</td>
                        <td>김보송</td>
                        <td class="text-left">가을의 속삭임 자켓</td>
                        <td class="text-left"> 궁금쓰 </td>
                    </tr>
                    <tr>
                        <td>2019-00-00 00:00</td>
                        <td>송칠득</td>
                        <td>김보송</td>
                        <td class="text-left">가을의 속삭임 자켓</td>
                        <td class="text-left"> 궁금쓰 </td>
                    </tr>
                    <tr>
                        <td>2019-00-00 00:00</td>
                        <td>송칠득</td>
                        <td>김보송</td>
                        <td class="text-left">가을의 속삭임 자켓</td>
                        <td class="text-left"> 궁금쓰 </td>
                    </tr>
                    <tr>
                        <td>2019-00-00 00:00</td>
                        <td>송칠득</td>
                        <td>김보송</td>
                        <td class="text-left">가을의 속삭임 자켓</td>
                        <td class="text-left"> 궁금쓰 </td>
                    </tr>
                    <tr>
                        <td>2019-00-00 00:00</td>
                        <td>송칠득</td>
                        <td>김보송</td>
                        <td class="text-left">가을의 속삭임 자켓</td>
                        <td class="text-left"> 궁금쓰 </td>
                    </tr>
                    <tr>
                        <td>2019-00-00 00:00</td>
                        <td>송칠득</td>
                        <td>김보송</td>
                        <td class="text-left">가을의 속삭임 자켓</td>
                        <td class="text-left"> 궁금쓰 </td>
                    </tr>
                    <tr>
                        <td>2019-00-00 00:00</td>
                        <td>송칠득</td>
                        <td>김보송</td>
                        <td class="text-left">가을의 속삭임 자켓</td>
                        <td class="text-left"> 궁금쓰 </td>
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
        <!-- //contesnts-inner -->
    </div>

@endsection
