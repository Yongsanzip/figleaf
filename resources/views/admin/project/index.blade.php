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
                <form action="{{ route('admin_project.index') }}" method="GET">
                    <input type="hidden" name="status" value="{{ $status }}">
                <div class="search-select">
                    <select name="option">
                        <option disabled selected>- 검색기준 -</option>
                        <option value="title" {{ $option ? ($option == 'title' ? 'selected' : '') : '' }}>제목</option>
                        <option value="designer_name" {{ $option ? ($option == 'designer_name' ? 'selected' : '') : '' }}>디자이너</option>
                        <option value="category_name">카테고리</option>
                    </select>
                </div>
                <div class="search-keyword">
                    <input type="text" name="keyword" placeholder="검색어를 입력하세요" value="{{ $keyword ? $keyword : '' }}" spellcheck="false">
                    <div class="search-select" style="display: none">
                        <select>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_id == 4 ? "Women's apparel > " : "Men's apparel > "  }} {{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button>검색</button>
                </div>
                </form>
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
                    <td>{{ $data->category_name }} > {{ $data->category_detail_name }}</td>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->introduction->designer_name }}</td>
                    <td>{{ $data->success_count }}</td>
                    <td>{{ $data->supporter_count }}({{ $data->supporter_count/$data->success_count*100 }}%)</td>
                    <td>{{ number_format($data->total_cost) }}원</td>
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
