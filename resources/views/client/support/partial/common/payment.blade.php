<input type="hidden" id="version"      name="version"       >
<input type="hidden" id="mid"          name="mid"           >
<input type="hidden" id="goodname"     name="goodname"      >
<input type="hidden" id="oid"          name="oid"           >
<input type="hidden" id="price"        name="price"         value="{{$option_total_cost}}">
<input type="hidden" id="currency"     name="currency"      >
<input type="hidden" id="buyername"    name="buyername"     >
<input type="hidden" id="buyertel"     name="buyertel"      >
<input type="hidden" id="buyeremail"   name="buyeremail"    >
<input type="hidden" id="timestamp"    name="timestamp"     >
<input type="hidden" id="signature"    name="signature"     >
<input type="hidden" id="returnUrl"    name="returnUrl"     >
<input type="hidden" id="mKey"         name="mKey"          >
<input type="hidden" id="gopaymethod"  name="gopaymethod"   >
<input type="hidden" id="acceptmethod" name="acceptmethod"  >
<input type="hidden" id="billPrint_msg"name="billPrint_msg" >
<input type="hidden" id="languageView" name="languageView"  >
<input type="hidden" id="charset"      name="charset"       >
<input type="hidden" id="payViewType"  name="payViewType"   >
<input type="hidden" id="closeUrl"     name="closeUrl"      >
<input type="hidden" id="merchantData" name="merchantData"  >

<script language="javascript" type="text/javascript" src="https://stdpay.inicis.com/stdjs/INIStdPay.js" charset="UTF-8"></script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded',function(){
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    })

    function paybtn(e) {

        if(gn_validation(document.getElementById('supportForm'))){
            if(!document.getElementById('agree').checked){
                alert("동의란을 체크해 주세요!");
                document.getElementById('agree').focus();
                return false;
            } else {
                var data = {
                    'support_code': document.getElementById('support_code').value,
                    'price': document.getElementById('price').value,
                    'receiver':document.getElementById('receiver_name').value,
                    'receiver_phone':document.getElementById('receiver_cellphone').value,
                    'zipcode':document.getElementById('receiver_zip_code').value,
                    'address':document.getElementById('receiver_address').value,
                    'address_detail':document.getElementById('receiver_address_detail').value,
                    'requirement':document.getElementById('requirement').value,
                    'bank_id':document.getElementById('bank_id').value,
                    'bank_account_holder':document.getElementById('bank_account_holder').value,
                    'bank_account_number':document.getElementById('bank_account_number').value,
                };
                callAjax('POST',true,'/project_support/order_create',"JSON",'JSON',data,fn_support_ajax_error,fn_support_ajax_success);
            }
        }
    }
    var fn_support_ajax_success = function(e){
        console.log(e);
        var data = JSON.parse(e.returnData);
        document.getElementById('version').value=data.version;
        document.getElementById('mid').value=data.mid;
        document.getElementById('goodname').value=data.goodname;
        document.getElementById('oid').value=data.oid;
        document.getElementById('price').value=data.price;
        document.getElementById('currency').value=data.currency;
        document.getElementById('buyername').value=data.buyername;
        document.getElementById('buyertel').value=data.buyertel;
        document.getElementById('buyeremail').value=data.buyeremail;
        document.getElementById('timestamp').value=data.timestamp;
        document.getElementById('signature').value=data.signature;
        document.getElementById('returnUrl').value=data.returnUrl;
        document.getElementById('mKey').value=data.mKey;
        document.getElementById('gopaymethod').value=data.gopaymethod;
        document.getElementById('acceptmethod').value=data.acceptmethod;
        document.getElementById('billPrint_msg').value=data.billPrint_ms;
        document.getElementById('languageView').value=data.languageView;
        document.getElementById('charset').value=data.charset;
        document.getElementById('payViewType').value=data.payViewType;
        document.getElementById('closeUrl').value=data.closeUrl;
        document.getElementById('merchantData').value=data.merchantData;
        INIStdPay.pay("supportForm");
    }
    var fn_support_ajax_error = function(e){
        alert(e.msg);
    }
    function cardShow(){
        document.getElementById("acceptmethod").value = "BILLAUTH(card):FULLVERIFY";
    }

    function hppShow(){
        document.getElementById("acceptmethod").value = "BILLAUTH(HPP):HPP(1)";
    }
</script>
