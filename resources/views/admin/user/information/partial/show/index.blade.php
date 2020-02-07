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
                        <div class="badge badge-green">유저</div>
                        <label class="checkbox-group">
                            <input type="checkbox">
                            <p>프로젝트 등록 허가</p>
                        </label>
                        <div class="badge badge-red">관리자</div>
                    </td>
                </tr>
                <tr>
                    <th>이름</th>
                    <td>
                        김칠득
                        <button class="btn-s btn-white">1:1 문의 바로가기</button>
                    </td>
                </tr>
                <tr>
                    <th>아이디</th>
                    <td>
                        doulove
                    </td>
                </tr>
                <tr>
                    <th>성별</th>
                    <td>남성</td>
                </tr>
                <tr>
                    <th>이메일</th>
                    <td>
                        doulove@gmail.com
                        <label class="checkbox-group">
                            <input type="checkbox">
                            <p>이메일 수신여부</p>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th>전화번호</th>
                    <td>010-0000-0000</td>
                </tr>
                <tr>
                    <th>휴대폰번호</th>
                    <td>
                        010-0000-0000
                        <label class="checkbox-group">
                            <input type="checkbox">
                            <p>SMS 수신여부</p>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th>주소</th>
                    <td>(12345)서울특별시 용산구 문배동 3-3 용산이안프리미어 105호</td>
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
                <button class="btn-black btn-m">수정하기</button>
            </div>
        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
