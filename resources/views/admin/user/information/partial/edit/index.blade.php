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
            <form action="{{route('admin_information.update',['id'=>$datas->id])}}" method="POST" onsubmit="return fn_user_update_submit(this);">
                {!! method_field('PUT') !!}
                @csrf
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
                        {{$datas->role->role_name}}
                    </td>
                </tr>
                <tr>
                    <th>이름</th>
                    <td>
                        <input type="text" class="text-field required" data-title="이름" placeholder="이름" name="name" value="{{$datas->name}}">
                    </td>
                </tr>
                <tr>
                    <th>성별</th>
                    <td>
                        <select class="text-field w-120px required" data-title="성별" name="gender">
                            <option disabled selected>- 성별 -</option>
                            <option {{$datas->gender == 0 ? 'selected' : ''}} value="0">남성</option>
                            <option {{$datas->gender == 1 ? 'selected' : ''}} value="1">여성</option>
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
                        <input type="text" name="home_phone" class="text-field required" data-title="전화번호" placeholder="전화번호" value="{{$datas->home_phone}}">
                    </td>
                </tr>
                <tr>
                    <th>휴대폰번호</th>
                    <td>
                        <input type="text" name="cellphone" class="text-field  required" data-title="휴대폰번호" placeholder="휴대폰번호" value="{{$datas->cellphone}}">
                    </td>
                </tr>
                <tr>
                    <th>주소</th>
                    <td>
                        <input type="text" class="text-field required" data-title="우편번호" name="zip_code" id="zip_code" placeholder="우편번호" value="{{$datas->zip_code}}">
                        <input type="text" class="text-field required" data-title="주소" name="address" id="address" placeholder="주소" value="{{$datas->address}}">
                        <input type="text" class="text-field required" data-title="상세주소" name="address_detail" placeholder="상세주소" value="{{$datas->address_detail}}">
                        <button class="btn-s btn-black w-60px btn-wi" id="address_btn">검색</button>
                    </td>
                </tr>
                <tr>
                    <th>가입일</th>
                    <td>{{$datas->created_at->format('Y-m-d')}}</td>
                </tr>
                <?php
//                    <tr>
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
                            <a type="button" href="/admin_portfolio/{{$datas->portfolio->id}}" class="btn-s btn-white"  data-title="">바로가기</a>
                        @else
                            <p>등록된 포폴리오가 없습니다.</p>
                        @endif
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="row text-right mt-20">
                <button type="submit" class="btn-black btn-m">저장하기</button>
            </div>
            </form>
        </div>
        <!-- //contesnts-inner -->
    </div>
    <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script type="text/javascript">
        var fn_user_update_submit = function(f){
            gn_validation(f);
        }

        document.getElementById('address_btn').addEventListener('click', function () {
            var zipcode = document.getElementById('zip_code');
            var address = document.getElementById('address');
            new daum.Postcode({
                oncomplete: function(data) {
                    // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분입니다.
                    // 예제를 참고하여 다양한 활용법을 확인해 보세요.
                    zipcode.value = data.zonecode;
                    if (data.userSelectedType === 'R') {
                        // 사용자가 도로명 주소를 선택했을 경우
                        address.value =  data.roadAddress;
                    } else {
                        // 사용자가 지번 주소를 선택했을 경우(J)
                        address.value = data.jibunAddress;
                    }
                }
            }).open();
        });
    </script>
@endsection
