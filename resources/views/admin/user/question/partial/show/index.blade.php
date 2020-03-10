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
                    <col width="160px">
                </colgroup>
                <thead>
                <tr>
                    <th>등록일</th>
                    <th>회원명</th>
                    <th>제목</th>
                    <th>답변여부</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $data->created_at->format('Y-m-d H:i') }}</td>
                    <td>{{ $data->user->name }}</td>
                    <td class="text-left">{{ $data->title }}</td>
                    <td>{{ $data->answer_yn == 0 ? '-' : '완료' }}</td>
                </tr>
                </tbody>
            </table>
            <!-- //table type1 -->

            <!-- question  -->
            <p class="text-contents-white">
                {!! $data->content !!}
            </p>
            <!-- //question -->

            <div class="devider"></div>

            <!-- answer -->
            <div class="row mt-20">
                <h3 class="title">답변</h3>
                <p class="caption">{{ $data->answer_at ? $data->answer_at->format('Y-m-d H:i') : '' }}</p>
            </div>

            @if($data->answer_yn == 1)
                <div id="answer_exits">
                <p class="text-contents-gray">
                    {!! $data->answer !!}
                </p>
                <div class="row text-right mt-20">
                    <button type="button" class="btn-white btn-m w-100px" onclick="deleteAnswer({{ $data->id }})">삭제</button>
                    <button type="button" class="btn-black btn-m w-100px" onclick="addAnswer('answer_exits')">수정</button>
                </div>
                </div>
                <!-- //answer -->
            @else
            <!-- noanswer -->
            <div id="answer_hidden">
            <p class="text-contents-gray">
                답변이 없습니다.
            </p>
                <div class="row text-right mt-20">
                    <button type="button" class="btn-black btn-m w-100px" onclick="addAnswer('answer_hidden')">등록</button>
                </div>
            </div>
            @endif

            <div id="answer_add" style="display: none">
                <!-- // 답변 등록 -->
                <textarea class="textarea mh-180px" id="contents" placeholder="답변을 입력해주세요">{{ $data->answer }}</textarea>
                <!-- //answer -->

                <div class="row text-right mt-20">
                    <button type="button" class="btn-white btn-m w-100px" onclick="cancelAnswer()">취소</button>
                    <button type="button" class="btn-black btn-m w-100px" onclick="storeAnswer({{ $data->id }})">작성</button>
                </div>
            </div>
                <!-- // 답변 등록 -->

            <!-- //noanswer -->

        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
