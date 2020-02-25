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
            <form action="{{route('admin_information.index')}}" method="GET" onsubmit="return fn_admin_information(f);">
            <div class="search">
                <div class="search-select">
                    <select name="searchCondition" data-title="검색기준" class="required">
                        <option disabled selected>- 검색기준 -</option>
                        <option value="name">회원명</option>
                        <option value="email">이메일</option>
                        <option value="home_phone">휴대전화번호</option>
                        <option value="cellphone">휴대전화번호</option>
                    </select>
                </div>
                <div class="search-keyword">
                    <input type="text" name="searchKeyword" placeholder="검색어를 입력하세요" class="required" spellcheck="false" data-title="검색어">
                    <button type="submit">검색</button>
                </div>
            </div>
            </form>

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
                        <tr>
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
    </script>
@endsection
