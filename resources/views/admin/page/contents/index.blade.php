<?php
// url : /admin_contents
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">
            <!-- headline -->
            <div class="headline">
                <h2>콘텐츠</h2>
            </div>
            <!-- //headline -->

            <!-- table -->
            <table class="table-data table-normal">
                <colgroup>
                    <col width="100px">
                    <col>
                    <col width="320px">
                </colgroup>
                <thead>
                <tr>
                    <th>No.</th>
                    <th>메뉴</th>
                    <th>수정일</th>
                </tr>
                </thead>
                <tbody>
                @foreach($datas as $key=>$data)
                <tr style="cursor: pointer" onclick="location.href='/admin_contents/{{ $data->id }}'">
                    <td>{{ $key+1 }}</td>
                    <td>{{ $data->menu }}</td>
                    <td>{{ $data->lastestContent($data->id) }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <!-- //table type1 -->

        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
