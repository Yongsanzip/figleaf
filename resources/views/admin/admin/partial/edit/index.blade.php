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

            <form action="{{route('admin_admin.update',['id'=>$datas->id])}}" method="POST" onsubmit="return fn_notice_submit(this);">
                {!! method_field('PUT') !!}
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
                            <input type="text" class="input-field" name="name" value="{{$datas->name}}">
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
                            <input type="tel" class="input-field " name="cellphone"  value="{{$datas->cellphone}}">
                        </td>
                    </tr>
                    <tr>
                        <th>*주소</th>
                        <td>
                            <div class="address">
                                <input type="text" class="input-field required" data-title="우편번호" name="zip_code" id="zip_code" placeholder="우편번호" readonly value="{{$datas->zip_code}}">
                                <button type="button" class="btn-black btn-adress" id="address_btn">검색</button>
                            </div>
                            <div class="address">
                                <input type="text" class="input-field required" data-title="주소" name="address" id="address" placeholder="주소" readonly value="{{$datas->address}}">
                            </div>
                            <input type="text" class="input-field" name="address_detail" placeholder="상세주소" value="{{$datas->address_detail}}">
                        </td>
                    </tr>
                    <tr>
                        <th>*성별</th>
                        <td>
                            <div class="gender">
                                <label class="checkbox-wrap">
                                    <input type="radio" name="gender" value="0" {{$datas->gender == 0 ? 'checked':''}}>
                                    <p>남자</p>
                                </label>
                                <label class="checkbox-wrap">
                                    <input type="radio" name="gender" value="1" {{$datas->gender == 1 ? 'checked':''}}>
                                    <p>여자</p>
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>*비밀번호</th>
                        <td><input type="password" name="password"></td>
                    </tr>
                    </tbody>
                </table>

                <!-- //text editor -->
                <div class="row mt-20 text-right">
                    <button type="submit" class="btn-black btn-m w-100px">수정</button>
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
