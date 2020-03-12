<!-- 필수 -->
{{--***** 필 수 *****--}}
<input type="hidden" name="version" value="1.0" >
<input type="hidden" name="mid" value="{{$mid}}" >
<input type="hidden" name="goodname" value="{{ $data->title }}" >
<input type="hidden" name="oid" value="{{$orderNumber}}" >
<input type="hidden"  name="price" value="{{$price}}" >
<input type="hidden"  name="currency" value="WON" >
<input type="hidden"  name="buyername" value="{{auth()->user()->name}}" >
<input type="hidden"  name="buyertel" value="{{auth()->user()->cellphone}}" >
<input type="hidden"  name="buyeremail" value="{{auth()->user()->email}}" >
<input type="hidden"  style="width:100%;" name="timestamp" value="{{$timestamp}}" >
<input type="hidden" style="width:100%;" name="signature" value="{{$sign}}" >
<input type="hidden"  name="returnUrl" value="{{$siteDomain}}/complete" >
<input type="hidden"  name="mKey" value="{{$mKey}}" >
<input type="hidden" style="width:100%;" name="gopaymethod" value="" >
<input type="hidden" name="acceptmethod" value="HPP(1):no_receipt:va_receipt:vbanknoreg(0):below1000" >
{{--결제일 알림 메세지 : 결제일 알림 메세지--}}
<input type="hidden"  id="billPrint_msg" name="billPrint_msg" value="고객님의 매월 결제일은 24일 입니다." >
{{--***** 표시 옵션 *****--}}
<input type="hidden"  name="languageView" value="ko" >
<input type="hidden"  name="charset" value="UTF-8" >
<input type="hidden"  name="payViewType" value="overlay" >
<input type="hidden"  name="closeUrl" value="{{$siteDomain}}/close" >
<input type="hidden"  name="merchantData" value="" >

<script language="javascript" type="text/javascript" src="https://stdpay.inicis.com/stdjs/INIStdPay.js" charset="UTF-8"></script>
<script type="text/javascript">
    function paybtn(e) {

        if(gn_validation(document.getElementById('supportForm'))){
            if(!document.getElementById('agree').checked){
                alert("동의란을 체크해 주세요!");
                document.getElementById('agree').focus();
                return false;
            } else {
                INIStdPay.pay("supportForm");
            }
        }
    }

    function cardShow(){
        document.getElementById("acceptmethod").value = "BILLAUTH(card):FULLVERIFY";
    }

    function hppShow(){
        document.getElementById("acceptmethod").value = "BILLAUTH(HPP):HPP(1)";
    }
</script>
