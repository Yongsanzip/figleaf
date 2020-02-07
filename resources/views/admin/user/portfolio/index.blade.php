<?php
// url : /admin_portfolio
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <!-- headline -->
            <div class="headline">
                <h2>포트폴리오</h2>
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
                    <col width="100px">
                    <col>
                    <col>
                    <col width="180px">
                    <col width="180px">
                </colgroup>
                <thead>
                <tr>
                    <th>No.</th>
                    <th>회원명</th>
                    <th>이메일</th>
                    <th>
                        열람여부
                        <button class="sort-column">정렬</button>
                    </th>
                    <th>
                        노출여부
                        <button class="sort-column">정렬</button>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>00</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>-</td>
                    <td> - </td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>-</td>
                    <td> - </td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>-</td>
                    <td> - </td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>-</td>
                    <td> - </td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>-</td>
                    <td> - </td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>-</td>
                    <td> - </td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>-</td>
                    <td> - </td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>-</td>
                    <td> - </td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>-</td>
                    <td> - </td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>-</td>
                    <td> - </td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>-</td>
                    <td> - </td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>-</td>
                    <td> - </td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>-</td>
                    <td> - </td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>-</td>
                    <td> - </td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>송칠득</td>
                    <td>ilovedog@gmail.com</td>
                    <td>-</td>
                    <td> - </td>
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
