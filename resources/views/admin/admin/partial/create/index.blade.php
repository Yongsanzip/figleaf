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
                <h2>프로젝트허가자 회원등록</h2>
            </div>
            <!-- //headline -->

            <form action="{{route('admin_admin.store')}}" method="POST" onsubmit="return fn_admin_submit(this);">
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
                            프로젝트허가자
                        </td>
                    </tr>
                    <tr>
                        <th>*이름</th>
                        <td>
                            <input type="text" class="input-field required" data-title="이름" name="name">
                        </td>
                    </tr>
                    <tr>
                        <th>*이메일</th>
                        <td>
                            <input type="text" class="input-field required" data-title="이메일" name="email">
                        </td>
                    </tr>
                    <tr>
                        <th>*휴대폰번호</th>
                        <td>
                            <input type="tel" class="input-field required" data-title="휴대폰번호" name="cellphone">
                        </td>
                    </tr>
                    <tr>
                        <th>*주소</th>
                        <td>
                            <div class="address">
                                <input type="text" class="input-field required" data-title="우편번호" name="zip_code" id="zip_code" placeholder="우편번호" readonly>
                                <button type="button" class="btn-black btn-adress" id="address_btn">검색</button>
                            </div>
                            <div class="address">
                                <input type="text" class="input-field required" data-title="주소" name="address" id="address" placeholder="주소" readonly>
                            </div>
                            <input type="text" class="input-field" name="address_detail" placeholder="상세주소" >
                        </td>
                    </tr>
                    <tr>
                        <th>*성별</th>
                        <td>
                            <div class="gender">
                                <label class="checkbox-wrap">
                                    <input type="radio" name="gender" value="0" checked>
                                    <p>남자</p>
                                </label>
                                <label class="checkbox-wrap">
                                    <input type="radio" name="gender" value="1">
                                    <p>여자</p>
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>*비밀번호</th>
                        <td><input type="password" name="password" class="input-field  required"></td>
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
    <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script>

        var fn_admin_submit = function(f){
            gn_validation(f);
        }
    </script>
    <style>
        .note-group-image-url {
            display: none;
        }
    </style>
@endsection
