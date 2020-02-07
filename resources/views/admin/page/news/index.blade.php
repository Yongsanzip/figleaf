<?php
// /admin_news
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">
            <!-- headline -->
            <div class="headline">
                <h2>뉴스등록</h2>
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
                    <col width="160px">
                    <col width="360px">
                    <col>
                    <col width="320px">
                    <col width="160px">
                </colgroup>
                <thead>
                <tr>
                    <th>작성일</th>
                    <th>제목</th>
                    <th>출처</th>
                    <th>URL</th>
                    <th>등록일</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>한국이 낳은 천재 디자이너 해우 김, 해외시장 진출 성공</td>
                    <td>패션뉴스</td>
                    <td>http://news.naver.com/main/read.nhn</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>한국이 낳은 천재 디자이너 해우 김, 해외시장 진출 성공</td>
                    <td>패션뉴스</td>
                    <td>http://news.naver.com/main/read.nhn</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>한국이 낳은 천재 디자이너 해우 김, 해외시장 진출 성공</td>
                    <td>패션뉴스</td>
                    <td>http://news.naver.com/main/read.nhn</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>한국이 낳은 천재 디자이너 해우 김, 해외시장 진출 성공</td>
                    <td>패션뉴스</td>
                    <td>http://news.naver.com/main/read.nhn</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>한국이 낳은 천재 디자이너 해우 김, 해외시장 진출 성공</td>
                    <td>패션뉴스</td>
                    <td>http://news.naver.com/main/read.nhn</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>한국이 낳은 천재 디자이너 해우 김, 해외시장 진출 성공</td>
                    <td>패션뉴스</td>
                    <td>http://news.naver.com/main/read.nhn</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>한국이 낳은 천재 디자이너 해우 김, 해외시장 진출 성공</td>
                    <td>패션뉴스</td>
                    <td>http://news.naver.com/main/read.nhn</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>한국이 낳은 천재 디자이너 해우 김, 해외시장 진출 성공</td>
                    <td>패션뉴스</td>
                    <td>http://news.naver.com/main/read.nhn</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>한국이 낳은 천재 디자이너 해우 김, 해외시장 진출 성공</td>
                    <td>패션뉴스</td>
                    <td>http://news.naver.com/main/read.nhn</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>한국이 낳은 천재 디자이너 해우 김, 해외시장 진출 성공</td>
                    <td>패션뉴스</td>
                    <td>http://news.naver.com/main/read.nhn</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>한국이 낳은 천재 디자이너 해우 김, 해외시장 진출 성공</td>
                    <td>패션뉴스</td>
                    <td>http://news.naver.com/main/read.nhn</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>한국이 낳은 천재 디자이너 해우 김, 해외시장 진출 성공</td>
                    <td>패션뉴스</td>
                    <td>http://news.naver.com/main/read.nhn</td>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>한국이 낳은 천재 디자이너 해우 김, 해외시장 진출 성공</td>
                    <td>패션뉴스</td>
                    <td>http://news.naver.com/main/read.nhn</td>
                    <td>2019-00-00</td>
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

            <div class="row text-right">
                <button class='btn-black btn-m w-100px'>등록</button>
            </div>
        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
