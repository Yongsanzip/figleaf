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
                <tr>
                    <td>1</td>
                    <td>HOME</td>
                    <td>2019-00-00 00:00</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>NEW</td>
                    <td>2019-00-00 00:00</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>SPECIAL</td>
                    <td>2019-00-00 00:00</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>COLLECTION</td>
                    <td>2019-00-00 00:00</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>EVENT</td>
                    <td>2019-00-00 00:00</td>
                </tr>
                </tbody>
            </table>
            <!-- //table type1 -->

        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
