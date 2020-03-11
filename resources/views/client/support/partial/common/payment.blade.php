<!-- 필수 -->
{{--***** 필 수 *****--}}
<input type="hidden" name="version" value="1.0" >
{{--mid :--}}
<input type="hidden" name="mid" value="{{$mid}}" >
{{--goodname :--}}
<input type="hidden" name="goodname" value="{{ $data->title }}" >
{{--oid :--}}
<input type="hidden" name="oid" value="{{$orderNumber}}" >
{{--price :--}}
<input type="hidden"  name="price" value="{{$price}}" >
<!--currency:[WON|USD]-->
<input type="hidden"  name="currency" value="WON" >
{{--buyername :--}}
<input type="hidden"  name="buyername" value="홍길동" >
{{--buyertel :--}}
<input type="hidden"  name="buyertel" value="010-1234-5678" >
{{--buyeremail :--}}
<input type="hidden"  name="buyeremail" value="test@inicis.com" >
<!--timestamp : -->
<input type="hidden"  style="width:100%;" name="timestamp" value="{{$timestamp}}" >
<!-- signature : -->
<input type="hidden" style="width:100%;" name="signature" value="{{$sign}}" >
{{--returnUrl :--}}
<input type="hidden"  name="returnUrl" value="{{$siteDomain}}/complete" >

<input type="hidden"  name="mKey" value="{{$mKey}}" >

<input type="hidden" style="width:100%;" name="gopaymethod" value="" >

{{--acceptmethod : ex)  billauth(card) , billauth(hpp)--}}
<input type="hidden"  id="acceptmethod" name="acceptmethod" value="billauth(card)" >
{{--결제일 알림 메세지 : 결제일 알림 메세지--}}
<input type="hidden"  id="billPrint_msg" name="billPrint_msg" value="고객님의 매월 결제일은 24일 입니다." >
{{--***** 표시 옵션 *****--}}
{{--languageView : 초기 표시 언어 : [ko|en] (default:ko)--}}
<input type="hidden"  name="languageView" value="ko" >
{{--charset : 리턴 인코딩 [UTF-8|EUC-KR] (default:UTF-8)--}}
<input type="hidden"  name="charset" value="" >
{{--payViewType : 결제창 표시방법 [overlay] (default:overlay)--}}
<input type="hidden"  name="payViewType" value="overlay" >
{{--closeUrl : payViewType='overlay','popup'시 취소버튼 클릭시 창닥기 처리 URL(가맹점에 맞게 설정)
close.jsp 샘플사용(생략가능, 미설정시 사용자에 의해 취소 버튼 클릭시 인증결과 페이지로 취소 결과를 보냅니다.)--}}
<input type="hidden"  name="closeUrl" value="{{$siteDomain}}/project_support?{{$close}}" >
<?php
/*popupUrl : payViewType='popup'시 팝업을 띄울수 있도록 처리해주는 URL(가맹점에 맞게 설정)
popup.jsp 샘플사용(생략가능,payViewType='popup'으로 사용시에는 반드시 설정)
<input  type="hidden" name="popupUrl" value="{{$siteDomain}}/popup.php" >*/
?>

{{--***** 추가 옵션 *****--}}
{{--merchantData : 가맹점 관리데이터(2000byte) 인증결과 리턴시 함께 전달됨--}}
<input  type="hidden"  name="merchantData" value="" >

<script language="javascript" type="text/javascript" src="https://stgstdpay.inicis.com/stdjs/INIStdPay.js" charset="UTF-8"></script>
<script type="text/javascript">
    function paybtn(e) {
        INIStdPay.pay("supportForm");
    }

    function cardShow(){
        document.getElementById("acceptmethod").value = "BILLAUTH(card):FULLVERIFY";
    }

    function hppShow(){
        document.getElementById("acceptmethod").value = "BILLAUTH(HPP):HPP(1)";
    }
</script>
