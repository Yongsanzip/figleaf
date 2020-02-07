<?php
// url : /admin_message/1
?>
@extends('admin.layouts.app')
@section('content')

    <div class="contents-wrap">
        <!-- contesnts-inner -->
        <div class="contents-inner">

            <!-- headline -->
            <div class="headline">
                <h2>메세지</h2>
            </div>
            <!-- //headline -->

            <!-- table 20 row-->
            <table class="table-data table-normal">
                <colgroup>
                    <col width="240px">
                    <col width="160px">
                    <col width="160px">
                    <col>
                </colgroup>
                <thead>
                <tr>
                    <th>최근 메시지 전송일</th>
                    <th>회원명</th>
                    <th>디자이너명</th>
                    <th>프로젝트명</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2019-00-00 00:00</td>
                    <td>송칠득</td>
                    <td>김보송</td>
                    <td class="text-left">가을의 속삭임 자켓</td>
                </tr>
                </tbody>
            </table>
            <!-- //table-->

            <!-- message -->

            <div class="form-message mt-20">
                <p class="message-date">2019.09.18</p>
                <div class="row">
                    <div class="message message-white">
                        <p class="message-text">
                            안녕하세요, 김해우 고객님<br>
                            무엇을 도와드릴까요?
                        </p>
                        <p class="message-time">13:00</p>
                    </div>
                </div>
                <div class="row text-right">
                    <div class="message message-black">
                        <p class="message-text">
                            안녕하세요
                        </p>
                        <p class="message-time">13:00</p>
                    </div>
                </div>
                <div class="row text-right">
                    <div class="message message-black">
                        <p class="message-text">
                            아침에 배송 관련해서 문의 드렸었는데요
                        </p>
                        <p class="message-time">13:00</p>
                    </div>
                </div>
                <div class="row text-right">
                    <div class="message message-black">
                        <p class="message-text">
                            샘플외의 본품이 배송되지 않았어요
                        </p>
                        <p class="message-time">13:00</p>
                    </div>
                </div>
                <div class="row">
                    <div class="message message-white">
                        <p class="message-text">
                            만족스러운 배송으로 찾아뵙지 못해 너무나 죄송합니다. 저라도 많이 불편했을 것 같습니다. <br>
                            저 또한 확인해보니, 전 상담사가 재출고 접수한 것으로 확인됩니다.
                        </p>
                        <p class="message-time">13:01</p>
                    </div>
                </div>
            </div>
            <!-- //message -->

            <!-- row -->
            <div class="row text-right mt-20">
                <button class="btn-m btn-white w-100px">목록</button>
            </div>
        </div>
        <!-- //contesnts-inner -->
    </div>

@endsection
