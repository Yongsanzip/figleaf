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
                @foreach($datas as $data)
                <tr style="cursor: pointer" onclick="location.href='/admin_question/{{ $data->id }}'">
                    <td>{{ $data->created_at->format('Y-m-d H:i') }}</td>
                    <td>{{ $data->user->name }}</td>
                    <td>{{ $data->user->email }}</td>
                    <td class="text-left">{{ $data->title }}</td>
                    <td>{{ $data->answer_yn == 0 ? '-' : '완료' }}</td>
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
