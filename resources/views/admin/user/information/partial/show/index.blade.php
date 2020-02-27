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
                        @if( in_array($datas->role_id,array(1,2),true) )
                        <div class="badge badge-green">유저</div>
                        @endif
                        <label class="checkbox-group">
                            <input type="checkbox">
                            <p>프로젝트 등록 허가</p>
                        </label>
                        @if( in_array($datas->role_id,array(3,4),true) )
                        <div class="badge badge-red">관리자</div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>이름</th>
                    <td>
                        {{$datas->name}}
                        <a href="/admin_question?user={{$datas->user_code}}" class="btn-s btn-white">1:1 문의 바로가기</a>
                    </td>
                </tr>
                <tr>
                    <th>성별</th>
                    <td>{{$datas->gender == 0 ? '남자' :'여자'}}</td>
                </tr>
                <tr>
                    <th>이메일</th>
                    <td>
                        {{$datas->email}}
                        <label class="checkbox-group">
                            <input type="checkbox" {{$datas->email_yn == 1 ? 'checked' : ''}} value="{{$datas->email_yn == 1 ? $datas->email_yn : ''}}">
                            <p>이메일 수신여부</p>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th>전화번호</th>
                    <td>{{$datas->home_phone}}</td>
                </tr>
                <tr>
                    <th>휴대폰번호</th>
                    <td>
                        {{$datas->cellphone}}
                        <label class="checkbox-group">
                            <input type="checkbox" {{$datas->sms_yn == 1 ? 'checked' : ''}} value="{{$datas->sms_yn == 1 ? $datas->sms_yn : ''}}">
                            <p>SMS 수신여부</p>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th>주소</th>
                    <td>({{$datas->zip_code}}){{$datas->address}} {{$datas->address_detail}}</td>
                </tr>
                <tr>
                    <th>가입일</th>
                    <td>{{$datas->created_at->format('Y-m-d')}}</td>
                </tr>
                <?php
//                <tr>
//                    <th>적립금</th>
//                    <td>
//                        3000원
//                        <button class="btn-s btn-white">적립금 내역보기</button>
//                    </td>
//                </tr>
                ?>
                <tr>
                    <th>포트폴리오</th>
                    <td>
                        @if($datas->portfolio)
                            {{$datas->portfolio->onpen_yn == 0 ? '미열람' : '열람'}} / {{$datas->portfolio->hidden_yn == 0 ? '오픈' : '숨김'}}
                            <a type="button" href="/admin_portfolio/{{$datas->portfolio->id}}"  class="btn-s btn-white">바로가기</a>
                            @else
                            <p>등록된 포폴리오가 없습니다.</p>
                        @endif
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="row text-right mt-20">
                <a type="button" class="btn-black btn-m" href='/admin_information/{{$datas->user_code}}/edit'>수정하기</a>
            </div>
        </div>
        <!-- //contesnts-inner -->
    </div>
    <script type="text/javascript">
        var fn_link = function(type,e){
            var value = e.getAttribute('data-title');
            if(type == 'inquiry'){
                window.location.herf='/admin_question?user='+ value;
            } else if(type =='portfolio'){
                window.location.herf='/admin_portfolio/'+ value;
            } else if(type =='edit'){
                window.location.href=''+ value +'/edit';
            }
            return false;
        }
    </script>
@endsection
