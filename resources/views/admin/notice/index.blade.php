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
                <h2>공지사항</h2>
            </div>
            <!-- //headline -->

            <!-- search -->
            <div class="search">
                <form action="{{route('admin_notice.index')}}" onsubmit="return fn_notice_search(this);" method="GET">
                    <div class="search-select">
                        <select name="searchCondition">
                            <option disabled selected>- 검색기준 -</option>
                            <option value="title" {{isset($_GET['searchCondition']) ? ($_GET['searchCondition'] == 'title' ? 'selected' :'') : ''}} >제목</option>
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
                    <col width="80px">
                    <col>
                    <col width="160px">
                    <col width="180px">
                </colgroup>
                <thead>
                <tr>
                    <th>No.</th>
                    <th>제목</th>
                    <th>
                        상단고정여부
                        <button class="sort-column">정렬</button>
                    </th>
                    <th>등록일</th>
                </tr>
                </thead>
                <tbody>
                @if(count($datas) > 0)
                    @foreach($datas as $data)
                        <tr onclick="fn_link({{$data->id}})" style="cursor: pointer;">
                            <td></td>
                            <td>{{ $data->title}}</td>
                            <td>{{ $data->up_fix == 1 ? '고정' : '미고정'}}</td>
                            <td>{{ $data->created_at->format('Y-m-d')}}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">공지사항이 없습니다</td>
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
                <a href="{{route('admin_notice.create')}}" class="btn-black">작성하기</a>
            </div>

        </div>
        <!-- //contesnts-inner -->
    </div>
    <script>
        var fn_link = function(el){
            document.location.href='/admin_notice/'+el;
        }
        var fn_notice_search = function(f){
            gn_validation(f);
        }
    </script>
@endsection
