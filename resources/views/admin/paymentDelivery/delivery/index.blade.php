<?php
// url : /admin_delivery
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">
            <!-- headline -->
            <div class="headline">
                <h2>배송내역</h2>
            </div>
            <!-- //headline -->

            <!-- search -->
            <div class="search">
                <div class="search-select">
                    <select>
                        <option>- 검색기준 -</option>
                        <option>검색기준</option>
                        <option>검색기준</option>
                    </select>
                </div>
                <div class="search-keyword">
                    <input type="text" placeholder="검색어를 입력하세요" spellcheck="false">
                    <button>검색</button>
                </div>
            </div>

            <!-- table -->
            <table class="table-data table-normal">
                <colgroup>
                    <col width="80px">
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col width="80px">
                    <col width="80px">
                </colgroup>
                <thead>
                <tr>
                    <th>여부</th>
                    <th>프로젝트명</th>
                    <th>예상배송일</th>
                    <th>이메일</th>
                    <th>후원자명</th>
                    <th>옵션</th>
                    <th>
                        배송
                        <button class="sort-column">정렬</button>
                    </th>
                    <th>
                        교환
                        <button class="sort-column">정렬</button>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>진행중</td>
                    <td class="text-left">신입사원 추천! 맞춤 정장 세트</td>
                    <td>2019-00-00 00:00</td>
                    <td>duknowkimch@naver.com</td>
                    <td>최덕배</td>
                    <td>옵션명 / 사이즈 * 수량</td>
                    <td>배송요청</td>
                    <td>환불요청</td>
                </tr>
                <tr>
                    <td>진행중</td>
                    <td class="text-left">신입사원 추천! 맞춤 정장 세트</td>
                    <td>2019-00-00 00:00</td>
                    <td>duknowkimch@naver.com</td>
                    <td>최덕배</td>
                    <td>옵션명 / 사이즈 * 수량</td>
                    <td>배송중</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>실패</td>
                    <td class="text-left">신입사원 추천! 맞춤 정장 세트</td>
                    <td>2019-00-00 00:00</td>
                    <td>duknowkimch@naver.com</td>
                    <td>최덕배</td>
                    <td>옵션명 / 사이즈 * 수량</td>
                    <td>배송완료</td>
                    <td>환불요청</td>
                </tr>
                <tr>
                    <td>진행중</td>
                    <td class="text-left">신입사원 추천! 맞춤 정장 세트</td>
                    <td>2019-00-00 00:00</td>
                    <td>duknowkimch@naver.com</td>
                    <td>최덕배</td>
                    <td>옵션명 / 사이즈 * 수량</td>
                    <td>배송요청</td>
                    <td>환불요청</td>
                </tr>
                <tr>
                    <td>진행중</td>
                    <td class="text-left">신입사원 추천! 맞춤 정장 세트</td>
                    <td>2019-00-00 00:00</td>
                    <td>duknowkimch@naver.com</td>
                    <td>최덕배</td>
                    <td>옵션명 / 사이즈 * 수량</td>
                    <td>배송중</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>실패</td>
                    <td class="text-left">신입사원 추천! 맞춤 정장 세트</td>
                    <td>2019-00-00 00:00</td>
                    <td>duknowkimch@naver.com</td>
                    <td>최덕배</td>
                    <td>옵션명 / 사이즈 * 수량</td>
                    <td>배송완료</td>
                    <td>환불요청</td>
                </tr>
                <tr>
                    <td>진행중</td>
                    <td class="text-left">신입사원 추천! 맞춤 정장 세트</td>
                    <td>2019-00-00 00:00</td>
                    <td>duknowkimch@naver.com</td>
                    <td>최덕배</td>
                    <td>옵션명 / 사이즈 * 수량</td>
                    <td>배송요청</td>
                    <td>환불요청</td>
                </tr>
                <tr>
                    <td>진행중</td>
                    <td class="text-left">신입사원 추천! 맞춤 정장 세트</td>
                    <td>2019-00-00 00:00</td>
                    <td>duknowkimch@naver.com</td>
                    <td>최덕배</td>
                    <td>옵션명 / 사이즈 * 수량</td>
                    <td>배송중</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>실패</td>
                    <td class="text-left">신입사원 추천! 맞춤 정장 세트</td>
                    <td>2019-00-00 00:00</td>
                    <td>duknowkimch@naver.com</td>
                    <td>최덕배</td>
                    <td>옵션명 / 사이즈 * 수량</td>
                    <td>배송완료</td>
                    <td>환불요청</td>
                </tr>
                <tr>
                    <td>진행중</td>
                    <td class="text-left">신입사원 추천! 맞춤 정장 세트</td>
                    <td>2019-00-00 00:00</td>
                    <td>duknowkimch@naver.com</td>
                    <td>최덕배</td>
                    <td>옵션명 / 사이즈 * 수량</td>
                    <td>배송요청</td>
                    <td>환불요청</td>
                </tr>
                <tr>
                    <td>진행중</td>
                    <td class="text-left">신입사원 추천! 맞춤 정장 세트</td>
                    <td>2019-00-00 00:00</td>
                    <td>duknowkimch@naver.com</td>
                    <td>최덕배</td>
                    <td>옵션명 / 사이즈 * 수량</td>
                    <td>배송중</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>실패</td>
                    <td class="text-left">신입사원 추천! 맞춤 정장 세트</td>
                    <td>2019-00-00 00:00</td>
                    <td>duknowkimch@naver.com</td>
                    <td>최덕배</td>
                    <td>옵션명 / 사이즈 * 수량</td>
                    <td>배송완료</td>
                    <td>환불요청</td>
                </tr>
                <tr>
                    <td>진행중</td>
                    <td class="text-left">신입사원 추천! 맞춤 정장 세트</td>
                    <td>2019-00-00 00:00</td>
                    <td>duknowkimch@naver.com</td>
                    <td>최덕배</td>
                    <td>옵션명 / 사이즈 * 수량</td>
                    <td>배송요청</td>
                    <td>환불요청</td>
                </tr>
                <tr>
                    <td>진행중</td>
                    <td class="text-left">신입사원 추천! 맞춤 정장 세트</td>
                    <td>2019-00-00 00:00</td>
                    <td>duknowkimch@naver.com</td>
                    <td>최덕배</td>
                    <td>옵션명 / 사이즈 * 수량</td>
                    <td>배송중</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>실패</td>
                    <td class="text-left">신입사원 추천! 맞춤 정장 세트</td>
                    <td>2019-00-00 00:00</td>
                    <td>duknowkimch@naver.com</td>
                    <td>최덕배</td>
                    <td>옵션명 / 사이즈 * 수량</td>
                    <td>배송완료</td>
                    <td>환불요청</td>
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
