<?php
// url : /admin_community
?>
@extends('admin.layouts.app')
@section('content')
    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <!-- headline -->
            <div class="headline">
                <h2>커뮤니티</h2>
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
                    <col width="320px">
                    <col width="150px">
                    <col width="160px">
                    <col width="100px">
                    <col>
                    <col width="100px">
                </colgroup>
                <thead>
                <tr>
                    <th>프로젝트명</th>
                    <th>작성일</th>
                    <th>이메일</th>
                    <th>작성자명</th>
                    <th>내용</th>
                    <th>히든여부</th>
                </tr>
                </thead>
                <tbody>
                @foreach($datas as $data)
                <tr style="cursor: pointer" onclick="location.href='/admin_community/{{ $data->id }}'">
                    <td class="text-left"><span class="text-overflow">{{ $data->project->title }}</span></td>
                    <td>{{ $data->created_at->format('Y-m-d h:i') }}</td>
                    <td>{{ $data->user->email }}</td>
                    <td>{{ $data->user->name }}</td>
                    <td class="text-left"><span class="text-overflow">{!! $data->contents !!}</span></td>
                    <td>{{ $data->hidden_yn == 0 ? '-' : '히든' }}</td>
                </tr>
                @endforeach
                <tr>
                    <td class="text-left">
                        <span class="text-overflow">끝나지 않는 나의 비지니스</span>
                    </td>
                    <td>2019-00-00 00:00</td>
                    <td>ilovecat_koreancat@gmail.com</td>
                    <td>홍길도</td>
                    <td class="text-left">
                        <span class="text-overflow">배송 언제부터 시작되나요</span>
                    </td>
                    <td>-</td>
                </tr>
                <tr>
                    <td class="text-left">끝나지 않는 나의 비지니스</td>
                    <td>2019-00-00 00:00</td>
                    <td>ilovecat_koreancat@gmail.com</td>
                    <td>홍길도</td>
                    <td class="text-left">배송 언제부터 시작되나요</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td class="text-left">끝나지 않는 나의 비지니스</td>
                    <td>2019-00-00 00:00</td>
                    <td>ilovecat_koreancat@gmail.com</td>
                    <td>홍길도</td>
                    <td class="text-left">배송 언제부터 시작되나요</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td class="text-left">끝나지 않는 나의 비지니스</td>
                    <td>2019-00-00 00:00</td>
                    <td>ilovecat_koreancat@gmail.com</td>
                    <td>홍길도</td>
                    <td class="text-left">배송 언제부터 시작되나요</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td class="text-left">끝나지 않는 나의 비지니스</td>
                    <td>2019-00-00 00:00</td>
                    <td>ilovecat_koreancat@gmail.com</td>
                    <td>홍길도</td>
                    <td class="text-left">배송 언제부터 시작되나요</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td class="text-left">끝나지 않는 나의 비지니스</td>
                    <td>2019-00-00 00:00</td>
                    <td>ilovecat_koreancat@gmail.com</td>
                    <td>홍길도</td>
                    <td class="text-left">배송 언제부터 시작되나요</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td class="text-left">끝나지 않는 나의 비지니스</td>
                    <td>2019-00-00 00:00</td>
                    <td>ilovecat_koreancat@gmail.com</td>
                    <td>홍길도</td>
                    <td class="text-left">배송 언제부터 시작되나요</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td class="text-left">끝나지 않는 나의 비지니스</td>
                    <td>2019-00-00 00:00</td>
                    <td>ilovecat_koreancat@gmail.com</td>
                    <td>홍길도</td>
                    <td class="text-left">배송 언제부터 시작되나요</td>
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
