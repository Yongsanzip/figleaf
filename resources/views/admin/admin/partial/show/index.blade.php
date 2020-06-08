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

            <table class="table-info">
                <colgroup>
                    <col width="140px">
                    <col>
                </colgroup>
                <thead></thead>
                <tbody>
                <tr>
                    <th>회원구분</th>
                    <td>
                        관리자
                    </td>
                </tr>
                <tr>
                    <th>*이름</th>
                    <td>
                        {{$datas->name}}
                    </td>
                </tr>
                <tr>
                    <th>*이메일</th>
                    <td>
                        {{$datas->email}}
                    </td>
                </tr>
                <tr>
                    <th>*휴대폰번호</th>
                    <td>
                        {{$datas->cellphone}}
                    </td>
                </tr>
                <tr>
                    <th>*주소</th>
                    <td>
                        ({{$datas->zip_code}}) {{$datas->address}}  {{$datas->address_detail}}
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="row mt-20 text-right">
                <a href="{{route('admin_admin.index')}}" class="btn-white btn-m w-100px mr-20">목록</a>
                <button onclick="fn_destroy_notice(); " class="btn-white btn-m w-100px">삭제</button>
                <a href="{{route('admin_admin.edit',['id'=>$datas->id])}}" class="btn-black btn-m w-100px ml-4">수정</a>
                <form id="admin_destroy_form" action="{{route('admin_admin.destroy',['id'=>$datas->id])}}" method="POST">
                    @csrf
                    {!! method_field('DELETE') !!}
                </form>
            </div>
        </div>
        <!-- //contesnts-inner -->
    </div>
    <script type="text/javascript">
        var fn_destroy_notice = function(){
            if(confirm('해당 관리자를 삭제하시겠습니까')){
                document.getElementById('admin_destroy_form').submit();
            }
        }
    </script>
@endsection
