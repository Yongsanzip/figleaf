<?php
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <!-- headline -->
            <div class="headline">
                <h2>회원정보</h2>
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
                <thead>
                <tr>
                    <th>구분</th>
                    <th>회원명</th>
                    <th>이메일</th>
                    <th>전화번호</th>
                    <th>메일수신여부</th>
                    <th>SMS수신여부</th>
                    <th>허가여부<button class="sort-column">정렬</button></th>
                    <th>가입일</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>일반</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>010-0000-0000</td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> 2019-00-00 </td>
                </tr>
                <tr>
                    <td>관리자</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>010-0000-0000</td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> 2019-00-00 </td>
                </tr>
                <tr>
                    <td>일반</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>010-0000-0000</td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> 2019-00-00 </td>
                </tr>
                <tr>
                    <td>일반</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>010-0000-0000</td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> 2019-00-00 </td>
                </tr>
                <tr>
                    <td>일반</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>010-0000-0000</td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> 2019-00-00 </td>
                </tr>
                <tr>
                    <td>일반</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>010-0000-0000</td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> 2019-00-00 </td>
                </tr>
                <tr>
                    <td>일반</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>010-0000-0000</td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> 2019-00-00 </td>
                </tr>
                <tr>
                    <td>일반</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>010-0000-0000</td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> 2019-00-00 </td>
                </tr>
                <tr>
                    <td>일반</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>010-0000-0000</td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> 2019-00-00 </td>
                </tr>
                <tr>
                    <td>일반</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>010-0000-0000</td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> 2019-00-00 </td>
                </tr>
                <tr>
                    <td>일반</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>010-0000-0000</td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> 2019-00-00 </td>
                </tr>
                <tr>
                    <td>일반</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>010-0000-0000</td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> 2019-00-00 </td>
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
