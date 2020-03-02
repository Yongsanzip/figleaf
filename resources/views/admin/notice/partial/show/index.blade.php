<?php
// url: /admin_notice/1
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

            <div class="devider"></div>

            <div class="post-box">
                <div class="row">
                    <h3 class="subtitle mr-8">{{$datas->title}}</h3>
                    @if($datas->up_fix == 1)
                    <div class="badge badge-green">상단고정</div>
                    @endif
                    <p class="post-date">{{$datas->created_at}}</p>
                </div>
                <p class="post-contents">
                    {!! $datas->content !!}
                </p>
            </div>

            <div class="devider"></div>

            <div class="row mt-20 text-right">
                <a href="{{route('admin_notice.index')}}" class="btn-white btn-m w-100px mr-20">목록</a>
                <button onclick="fn_destroy_notice(); " class="btn-white btn-m w-100px">삭제</button>
                <a href="{{route('admin_notice.edit',['id'=>$datas->id])}}" class="btn-black btn-m w-100px ml-4">수정</a>
                <form id="notice_destroy_form" action="{{route('admin_notice.destroy',['id'=>$datas->id])}}" method="POST">
                    @csrf
                    {!! method_field('DELETE') !!}
                </form>
            </div>
        </div>
        <!-- //contesnts-inner -->
    </div>
    <script type="text/javascript">
        var fn_destroy_notice = function(){
            console.log(1);
            if(confirm('해당 공지사항을 삭제하시겠습니까')){
                document.getElementById('notice_destroy_form').submit();
            }
        }
    </script>
@endsection
