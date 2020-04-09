<?php
// url : /mypage_information
// 마이페이지 - 회원정보
$tab='info';
?>

@extends('client.layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">

    <main class="container">

        <div class="inner">
            <div class="con-mypage">
                <h2 class="title">my page</h2>

                <!-- menu list -->
                    @include('client.mypage.partial.navi')
                <!--// menu list -->

                <!-- mypage contents -->
                <div class="mypage-contents">
                    <form method="POST" action="{{route('mypage_information.update',['id'=>'action'])}}" onsubmit="return fn_mypage_info_submit(this);">
                        {{method_field('PUT')}}
                        @csrf
                        <table class="user-table">
                            <tbody>
                            <tr>
                                <th>이름</th>
                                <td>
                                    <input type="text" class="input-field" placeholder="이름" value="{{$datas->name}}">
                                </td>
                            </tr>
                            <tr>
                                <th>기존 비밀번호</th>
                                <td class="exist-password">
                                    <input type="password" id="old_password" name="old_password" class="input-field" placeholder="비밀번호">
                                    <input type="checkbox" id="password_change_check" style="display: none;">
                                    <button type="button" class="btn-white btn-m" id="password_check">비밀번호확인</button>
                                </td>
                            </tr>
                            <tr>
                                <th>신규 비밀번호</th>
                                <td class="new-password">
                                    <input type="password" name="new_password" id="new_password" class="input-field" placeholder="신규 비밀번호" disabled>
                                    <input type="password" name="new_password_check" id="new_password_check" class="input-field" placeholder="신규 비밀번호 재입력" disabled>
                                </td>
                            </tr>
                            <tr>
                                <th>성별</th>
                                <td class="gender">
                                    <label class="checkbox-wrap">
                                        <input type="radio" name="gender" {{$datas->gender == 0 ? 'checked' : ''}} value="0">
                                        <p>남자</p>
                                    </label>
                                    <label class="checkbox-wrap">
                                        <input type="radio" name="gender" {{$datas->gender == 1 ? 'checked' : ''}} value="1">
                                        <p>여자</p>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <th>이메일</th>
                                <td class="email">
                                    <div>
                                        <p class="text">{{$datas->email}}</p>
                                        <label class="checkbox-wrap">
                                            <input type="checkbox" name="email_yn" {{$datas->email_yn == 1 ? 'checked' : ''}}>
                                            <p>정보메일을 수신하겠습니다.</p>
                                        </label>
                                    </div>
                                    <p class="caption">
                                        이메일 수신에 동의하시면 여러가지 할인혜택과 각종 이벤트 정보를 받아보실 수 있습니다.<br>
                                        회원가입관련, 주문배송관련 등의 메일은 수신동의와 상관없이 모든 회원에게 발송됩니다.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <th>전화번호</th>
                                <td class="phone">
                                    <div>
                                        <input type="tel" class="input-field" name="home_phone" value="{{$datas->home_phone}}" placeholder="전화번호">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>휴대폰번호</th>
                                <td class="phone">
                                    <div>
                                        <input type="tel" class="input-field" name="cellphone" value="{{$datas->cellphone}}" placeholder="휴대폰번호">
                                        <label class="checkbox-wrap">
                                            <input type="checkbox" name="sms_yn" {{$datas->sms_yn == 1 ? 'checked' : ''}}>
                                            <p>SMS를 수신하겠습니다.</p>
                                        </label>
                                    </div>
                                    <p class="caption">
                                        SMS 수신에 동의하시면 여러가지 할인혜택과 각종 이벤트 정보를 받아보실 수 있습니다.<br>
                                        회원가입관련, 주문배송관련 등의 SMS는 수신동의와 상관없이 구매 회원에게 발송됩니다.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <th>주소</th>
                                <td class="address">
                                    <div class="postal">
                                        <label>
                                            <input type="text" class="input-field" name="zip_code" id="zip_code" placeholder="우편번호" value="{{$datas->zip_code}}" readonly>
                                            <button type="button" class="btn-white" id="address_btn">주소찾기</button>
                                        </label>
                                    </div>
                                    <div class="detail">
                                        <input type="text" class="input-field" name="address" id="address" placeholder="주소" value="{{$datas->address}}" readonly>
                                        <input type="text" class="input-field" name="address_detail" placeholder="상세주소" value="{{$datas->address_detail}}">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>환불은행계좌</th>
                                <td class="phone">
                                    <div class="postal">
                                            <select class="select" name="bank_id" id="">
                                                <option value="" disabled {{$datas->bank_id ? '': 'selected'}}>은행을선택해주세요</option>
                                                @foreach($banks as $bank)
                                                    <option value="{{$bank->id}}" {{$bank->id == $datas->bank_id ? 'selected' :''}}>{{$bank->bank_name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                    <div>
                                        <input type="tel" class="input-field" name="bank_account_holder" value="{{$datas->bank_account_holder}}" placeholder="예금주">
                                        <input type="tel" class="input-field" name="bank_account_number" value="{{$datas->bank_account_number}}" placeholder="계좌번호">
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="btn-wrap">
                            <button class="btn-black">수정하기</button>
                        </div>
                    </form>
                </div>
                <!--// mypage contents -->


            </div>
        </div>
    </main>
    <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script type="text/javascript">
        document.getElementById('address_btn').addEventListener('click', function () {
            var zip_code = document.getElementById('zip_code');
            var address = document.getElementById('address');
            new daum.Postcode({
                oncomplete: function(data) {
                    // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분입니다.
                    // 예제를 참고하여 다양한 활용법을 확인해 보세요.
                    zip_code.value = data.zonecode;
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
        document.getElementById('password_check').addEventListener('click',function () {
            if(!gn_nullCheck(document.getElementById('old_password').value)){
                alert('비밀번호를 입력해주세요');
                document.getElementById('old_password').focus();
                return false;
            }
            var params = {password:document.getElementById('old_password').value};
            callAjax('POST',true,'/check_password',"JSON",'JSON',params,fn_check_password_ajax_error,fn_check_password_ajax_success);
        });
        var fn_check_password_ajax_success = function(e){
            alert(e.msg);
            document.getElementById('password_check').setAttribute('disabled',true);
            document.getElementById('old_password').setAttribute('disabled',true);
            document.getElementById('new_password').removeAttribute('disabled');
            document.getElementById('new_password_check').removeAttribute('disabled');
            document.getElementById('password_change_check').checked = true;
        }
        var fn_check_password_ajax_error = function(e){
            alert(e.responseJSON.msg);
        }

        var fn_mypage_info_submit = function(f){
            if(confirm("입력하신 정보 수정하시겠습니까?")){

                if(document.getElementById('password_change_check').checked){
                    if(!gn_nullCheck(f.new_password.value)){
                        alert('신규 비밀번호를 입력해주세요');
                        f.new_password.focus();
                        return false;
                    }
                    if(!gn_nullCheck(f.new_password_check.value)){
                        alert('신규 비밀번호를 한번더 입력해주세요');
                        f.new_password_check.focus();
                        return false;
                    }

                    if(f.new_password.value != f.new_password_check.value){
                        f.new_password.focus();
                        alert('신규 비밀번호와 신규 비밀번호 확인이 일치하지 않습니다.');
                        return false;
                    }

                    if(!checkPasswordPattern(f.new_password_check.value) || !checkPasswordPattern(f.new_password.value)){
                        f.new_password.focus();
                        alert("비밀번호는 8자리 이상 문자, 숫자, 특수문자로 구성하여야 합니다.");
                        return false;
                    }
                }

                if(!gn_nullCheck(f.home_phone.value)){
                    f.home_phone.focus();
                    alert("전화번호를 입력해주세요!");
                    return false;
                }

                if(!gn_nullCheck(f.cellphone.value)){
                    f.home_phone.focus();
                    alert("휴대폰번호를 입력해주세요!");
                    return false;
                }

                if(!gn_nullCheck(f.zip_code.value)){
                    f.zip_code.focus();
                    alert("우편번호를 입력해주세요!");
                    return false;
                }

                if(!gn_nullCheck(f.address.value)){
                    f.address.focus();
                    alert("주소를 입력해주세요!");
                    return false;
                }

                if(!gn_nullCheck(f.bank_id.value)){
                    f.address.focus();
                    alert("은행명을 선택해주세요!");
                    return false;
                }

                if(!gn_nullCheck(f.bank_account_holder.value)){
                    f.address.focus();
                    alert("예금주를 입력해주세요!");
                    return false;
                }

                if(!gn_nullCheck(f.bank_account_number.value)){
                    f.address.focus();
                    alert("계좌번호 입력해주세요!");
                    return false;
                }

                return true;

            } else {
                return false;
            }
            return false;
        }
    </script>
@endsection
