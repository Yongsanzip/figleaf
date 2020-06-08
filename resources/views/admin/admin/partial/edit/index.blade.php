<?php
// url: /admin_notice/create
?>
@extends('admin.layouts.app')
@section('content')
    @include('common.summernote')
    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <!-- headline -->
            <div class="headline">
                <h2>관리자 회원수정</h2>
            </div>
            <!-- //headline -->

            <form action="{{route('admin_notice.edit',['id'=>$datas->id])}}" method="POST" onsubmit="return fn_notice_submit(this);">
                @csrf
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
                            <input type="text" class="input-field" name="name">
                        </td>
                    </tr>
                    <tr>
                        <th>*이메일</th>
                        <td>
                            <input type="email" class="input-field" name="email">
                        </td>
                    </tr>
                    <tr>
                        <th>*휴대폰번호</th>
                        <td>
                            <input type="tel" class="input-field" name="cellphone">
                        </td>
                    </tr>
                    <tr>
                        <th>*주소</th>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <th>*비밀번호</th>
                        <td><input type="password" name="password"></td>
                    </tr>
                    </tbody>
                </table>

                <!-- //text editor -->
                <div class="row mt-20 text-right">
                    <button class="btn-white btn-m w-100px">삭제</button>
                    <button type="submit" class="btn-black btn-m w-100px">등록</button>
                </div>

            </form>
        </div>
        <!-- //contesnts-inner -->
    </div>
    <script>

        var fn_notice_submit = function(f){
            gn_validation(f);
        }
    </script>
@endsection
