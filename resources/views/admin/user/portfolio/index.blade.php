<?php
// url : /admin_portfolio
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <!-- headline -->
            <div class="headline">
                <h2>포트폴리오</h2>
            </div>
            <!-- //headline -->

            <!-- search -->
            <div class="search">
                <form action="{{route('admin_portfolio.index')}}" onsubmit="return gn_check_search_form(this);">
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
                        <button>검색</button>
                    </div>
                </form>
            </div>

            <!-- table 20 row-->
            <table class="table-data table-normal">
                <colgroup>
                    <col width="100px">
                    <col>
                    <col>
                    <col width="180px">
                    <col width="180px">
                </colgroup>
                <thead>
                <tr>
                    <th>No.</th>
                    <th>회원명</th>
                    <th>이메일</th>
                    <th>
                        열람여부
                        <button class="sort-column">정렬</button>
                    </th>
                    <th>
                        노출여부
                        <button class="sort-column">정렬</button>
                    </th>
                </tr>
                </thead>
                <tbody>
                @if(count($datas)>0)
                        @foreach($datas as $key=> $data)
                            <tr onclick="fn_link({{$data->id}})" style="cursor: pointer;">
                                <td>{{$datas->lastItem() - $key}}</td>
                                <td>{{$data->user->name}}</td>
                                <td>{{$data->user->email}}</td>
                                <td>{{$data->open_yn == 1 ? '열람' : '미열람'}}</td>
                                <td>{{$data->hidden_yn == 1 ? '노출' : '미노출'}}</td>
                            </tr>
                        @endforeach
                    @else
                    <tr>
                        <td colspan="7">등록된 포폴리오가 없습니다.</td>
                    </tr>
                @endif
                </tbody>
            </table>
            <!-- //table type1 -->

            <!-- paginiation -->
            <nav class="pagination-wrap">
                {{$datas->links()}}
            </nav>
            <!-- //pagination -->

        </div>
        <!-- //contesnts-inner -->
    </div>
<script>
    var fn_link = function(e) {
        location.href='/admin_portfolio/'+e;
    }
    var gn_check_search_form = function(f){
        gn_validation(f);
    }
</script>
@endsection
