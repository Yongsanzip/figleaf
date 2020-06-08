<?php
// url: /admin_notice
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <!-- headline -->
            <div class="headline">
                <h2>프로젝트 허가자</h2>
            </div>
            <!-- //headline -->

            <!-- search -->
            <div class="search">
                <form action="{{route('admin_admin.index')}}" onsubmit="return fn_notice_search(this);" method="GET">
                    <div class="search-select">
                        <select name="searchCondition">
                            <option disabled selected>- 검색기준 -</option>
                            <option value="title" {{isset($_GET['searchCondition']) ? ($_GET['searchCondition'] == 'name' ? 'selected' :'') : ''}} >이름</option>
                            <option value="title" {{isset($_GET['searchCondition']) ? ($_GET['searchCondition'] == 'email' ? 'selected' :'') : ''}} >이메일</option>
                            <option value="title" {{isset($_GET['searchCondition']) ? ($_GET['searchCondition'] == 'cellphone' ? 'selected' :'') : ''}} >휴대폰번호</option>
                        </select>
                    </div>
                    <div class="search-keyword">
                        <input type="text" name="searchKeyword" value="{{(isset($_GET['searchKeyword'])) ? $_GET['searchKeyword'] : ''}}" class="required" data-title="검색어" placeholder="검색어를 입력하세요" spellcheck="false">
                        <button type="submit">검색</button>
                    </div>
                </form>
            </div>

            <!-- table 20 row-->
            <table class="table-data table-normal">
                <colgroup>
                    <col width="25%">
                    <col width="25%">
                    <col width="25%">
                    <col width="25%">
                </colgroup>
                <thead>
                <tr>
                    <th>이름</th>
                    <th>이메일</th>
                    <th>휴대폰번호</th>
                    <th>등록일</th>
                </tr>
                </thead>
                <tbody>
                @if(count($datas) > 0)
                    @foreach($datas as $data)
                        <tr onclick="fn_link({{$data->id}})" style="cursor: pointer;">
                            <td>{{ $data->name}}</td>
                            <td>{{ $data->email}}</td>
                            <td>{{$data->cellphone}}</td>
                            <td>{{ $data->created_at->format('Y-m-d')}}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">등록된 프로젝트 허가자가 없습니다</td>
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

            <div class="btn-wrap">
                <a href="{{route('admin_admin.create')}}" class="btn-black">작성하기</a>
            </div>

        </div>
        <!-- //contesnts-inner -->
    </div>
    <script>
        var fn_link = function(el){
            document.location.href='/admin_admin/'+el;
        }
        var fn_notice_search = function(f){
            gn_validation(f);
        }
    </script>
@endsection
