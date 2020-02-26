<?php
// url : /admin_project
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <!-- headline -->
            <div class="headline">
                <h2>프로젝트</h2>
            </div>
            <!-- //headline -->

            <!-- search -->
            <div class="search">
                <div class="search-select">
                    <select name="option">
                        <option disabled selected>- 검색기준 -</option>
                        <option value="title">제목</option>
                        <option value="designer">디자이너</option>
                        <option value="category">카테고리</option>
                    </select>
                </div>
                <div class="search-keyword">
                    <input type="text" name="keyword" placeholder="검색어를 입력하세요" spellcheck="false">
                    <button>검색</button>
                </div>
            </div>

            <!-- table 20 row-->
            <table class="table-data table-normal">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>여부</th>
                    <th>카테고리</th>
                    <th>제목</th>
                    <th>디자이너명</th>
                    <th>수량</th>
                    <th>판매량</th>
                    <th>총 판매금액</th>
                    <th>시작일</th>
                    <th>종료일</th>
                </tr>
                </thead>
                <tbody>
                @foreach($datas as $key=>$data)
                <tr onclick="location.href='{{ route('admin_project.show', $data->id) }}'" style="cursor: pointer">
                    <td>{{ $datas->total() - ($datas->perPage()* ($datas->currentPage()-1)) - $key }}</td>
                    <td>
                        {{ $data->condition($data->condition) }}
                    </td>
                    <td>{{ $data->category->category_name }} > {{ $data->category_detail->category_name }}</td>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->introduction->designer_name }}</td>
                    <td>{{ $data->success_count }}</td>
                    <td>30(100%)</td>
                    <td>12,000,000원</td>
                    <td>{{ $data->start_date }}</td>
                    <td>{{ $data->deadline }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <!-- //table type1 -->

            <!-- paginiation -->
            <nav class="pagination-wrap">
                <ul class="pagination">
                     @if($datas->count())
                        <div class="text-center">
                            {!! $datas->appends(request()->except('page'))->render() !!}
                        </div>
                    @endif
                </ul>
            </nav>
            <!-- //pagination -->

        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
