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
                <form action="{{ route('admin_community.index') }}" method="GET">
                <div class="search-select">
                    <select name="search">
                        <option disabled selected>- 검색기준 -</option>
                        <option value="title" {{ $search == 'title' ? 'selected' : '' }}>프로젝트명</option>
                        <option value="email" {{ $search == 'email' ? 'selected' : '' }}>이메일</option>
                        <option value="name" {{ $search == 'name' ? 'selected' : '' }}>작성자명</option>
                        <option value="contents" {{ $search == 'contents' ? 'selected' : '' }}>내용</option>
                    </select>
                </div>
                <div class="search-keyword">
                    <input type="text" name="keyword" value="{{ $keyword }}" placeholder="검색어를 입력하세요" spellcheck="false">
                    <button>검색</button>
                </div>
                </form>
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
                </tbody>
            </table>
            <!-- //table type1 -->

            <!-- paginiation -->
            <nav class="pagination-wrap">
                @if($datas->count())
                    {!! $datas->appends(request()->except('page'))->render() !!}
                @endif
            </nav>
            <!-- //pagination -->

        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
