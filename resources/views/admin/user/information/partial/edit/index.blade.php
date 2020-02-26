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

            <!-- table type3 -->
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
                        <select class="text-field w-120px">
                            <option disabled selected>회원구분{{$datas->role_id}}</option>
                            @if($roles)
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}" {{$datas->role_id == $role->id ? 'selected' : ''}}>{{$role->role_name}}</option>
                                @endforeach
                            @endif
                        </select>
                        <label class="checkbox-group">
                            <input type="checkbox">
                            <p>프로젝트 등록 허가</p>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th>이름</th>
                    <td>
                        <input type="text" class="text-field" placeholder="이름" value="{{$datas->name}}">
                    </td>
                </tr>
                <tr>
                    <th>성별</th>
                    <td>
                        <select class="text-field w-120px" name="gender">
                            <option disabled selected>- 성별 -</option>
                            <option {{$datas->gender == 0 ? 'selected' : ''}}>남성</option>
                            <option {{$datas->gender == 1 ? 'selected' : ''}}>여성</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>이메일</th>
                    <td>
                        {{$datas->email}}
                    </td>
                </tr>
                <tr>
                    <th>전화번호</th>
                    <td>
                        <input type="text" class="text-field" placeholder="전화번호">
                    </td>
                </tr>
                <tr>
                    <th>휴대폰번호</th>
                    <td>
                        <input type="text" class="text-field" placeholder="휴대폰번호">
                    </td>
                </tr>
                <tr>
                    <th>주소</th>
                    <td>
                        <input type="text" class="text-field mr-8" placeholder="우편번호">
                        <input type="text" class="text-field w-240px mr-8" placeholder="1차 주소">
                        <input type="text" class="text-field w-300px" placeholder="2차 주소">
                        <button class="btn-s btn-black w-60px btn-wi">검색</button>
                    </td>
                </tr>
                <tr>
                    <th>가입일</th>
                    <td>2019-00-00</td>
                </tr>
                <tr>
                    <th>적립금</th>
                    <td>
                        3000원
                        <button class="btn-s btn-white">적립금 내역보기</button>
                    </td>
                </tr>
                <tr>
                    <th>포트폴리오</th>
                    <td>
                        {포트폴리오 생성여부}-{포트폴리오 노출여부}/{포트폴리오 열람여부}
                        <button class="btn-s btn-white">바로가기</button>
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="row text-right mt-20">
                <button class="btn-black btn-m">저장하기</button>
            </div>
        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
