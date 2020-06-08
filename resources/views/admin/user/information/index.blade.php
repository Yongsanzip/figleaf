<?php
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <!-- headline -->
            <div class="headline">
                <h2>회원정보</h2>
            </div>
            <!-- //headline -->

            <!-- search -->

            <div class="search">
                <form action="{{route('admin_information.index')}}" method="GET" onsubmit="return fn_admin_information(f);">
                <div class="search-select">
                    <select name="searchCondition" data-title="검색기준" class="required">
                        <option disabled selected>- 검색기준 -</option>
                        @foreach($condition as $key=>$data)
                            <option value="{{$key}}" {{(isset($_GET['searchCondition'])) ? ($_GET['searchCondition'] == $key ? 'selected' : '') : ''}} >{{$data}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="search-keyword">
                    <input type="text" name="searchKeyword" placeholder="검색어를 입력하세요" class="required" spellcheck="false" data-title="검색어" value="{{(isset($_GET['searchKeyword'])) ?  $_GET['searchKeyword']: ''}}">
                    <button type="submit">검색</button>
                </div>
                </form>
            </div>


            <!-- table 20 row-->
            <table class="table-data table-normal">
                <thead>
                <tr>
                    <th>구분</th>
                    <th>회원명</th>
                    <th>이메일</th>
                    <th>전화번호</th>
                    <th>메일수신여부</th>
                    <th>SMS수신여부</th>
                    <th>허가여부<button class="sort-column">정렬</button></th>
                    <th>가입일</th>
                </tr>
                </thead>
                <tbody>
                @if($datas)
                    @foreach($datas as $data)
                        <tr onclick="javascript: fn_detail_link(this);" data-key="{{$data->user_code}}">
                            <td>{{$data->role->role_name}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->cellphone}}</td>
                            <td>{{$data->email_yn  == 1 ? '수신' : '미수신' }}</td>
                            <td>{{$data->sms_yn == 1 ? '수신' : '미수신'}}</td>
                            <td> - </td>
                            <td>{{$data->created_at->format('Y-m-d')}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <!-- //table type1 -->

            <!-- paginiation -->
            <nav class="pagination-wrap">
                {{--{!! $datas->appends(request()->except('page'))->render() !!}--}}
                {!! $datas->links() !!}
            </nav>
            <!-- //pagination -->

        </div>
        <!-- //contesnts-inner -->
    </div>
    <script>
        var fn_admin_information = function(f){
            gn_validation(f);
        }
        var fn_detail_link = function(e){
            window.location.href='/admin_information/'+e.getAttribute('data-key') ;
        }

    </script>
@endsection
