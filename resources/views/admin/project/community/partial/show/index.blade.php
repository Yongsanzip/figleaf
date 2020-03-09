<?php
// url : /admin_community/1
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

            <!-- table 20 row-->
            <table class="table-data table-normal">
                <colgroup>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col width="100px">
                </colgroup>
                <thead>
                <tr>
                    <th>프로젝트명</th>
                    <th>작성일</th>
                    <th>이메일</th>
                    <th>작성자명</th>
                    <th>히든여부</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-left">{{ $data->project->title }}</td>
                    <td>{{ $data->created_at->format('Y-m-d H:i') }}</td>
                    <td>{{ $data->user->email }}</td>
                    <td>{{ $data->user->name }}</td>
                    <td id="hidden_name">{{ $data->hidden_yn == 0 ? '-' : '히든' }}</td>
                </tr>
                </tbody>
            </table>
            <!-- //table-->

            <!-- contents -->
            <p class="text-contents-gray mt-20">
                {!! $data->contents !!}
            </p>
            <!-- //contents -->

            <!-- row -->
            <div class="row text-right mt-20">
                <button type="button" class="btn-m btn-white w-100px" onclick="location.href='{{ $url }}'">목록</button>
                <button type="button" class="btn-m btn-black w-100px" id="hidden_btn">히든 처리</button>
            </div>
        </div>
        <!-- //contesnts-inner -->
    </div>

    <script>
        document.getElementById('hidden_btn').addEventListener('click', function () {
            var hidden_yn = 0;
            var hidden_name = document.getElementById('hidden_name').textContent;
            var msg = '';

            if (hidden_name === '히든') {
                hidden_yn = 1;
            }

            var data = {
                id: "{{ $data->id }}",
                hidden_yn: hidden_yn
            };

            var error = function () {
                alert('오류');
            };

            var success = function (data) {
                if (data === 'hidden_y') {
                    document.getElementById('hidden_name').textContent = '히든';
                } else {
                    document.getElementById('hidden_name').textContent = '-';
                }
                alert('완료되었습니다.');
            };

            if (hidden_yn == 0) {
                msg = '히든처리 하시겠습니까?';
            } else {
                msg = '히든처리해제 하시겠습니까?';
            }

            if (confirm(msg)) {
                callAjax('POST',true,'/admin_community/',"JSON",'JSON',data,error,success);
            }
        });
    </script>

@endsection
