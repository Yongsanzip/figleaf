<input type="hidden" id="version"      name="version"       >
<input type="hidden" id="mid"          name="mid"           >
<input type="hidden" id="goodname"     name="goodname"      >
<input type="hidden" id="oid"          name="oid"           >
<input type="hidden" id="price"        name="price"         >
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
    function paybtn(e) {

        if(gn_validation(document.getElementById('supportForm'))){
            if(!document.getElementById('agree').checked){
                alert("동의란을 체크해 주세요!");
                document.getElementById('agree').focus();
                return false;
            } else {
                var data = {
                    '1':document.getElementById('receiver_name').value,
                    '2':document.getElementById('receiver_cellphone').value,
                    '3':document.getElementById('receiver_zip_code').value,
                    '4':document.getElementById('receiver_address').value,
                    '5':document.getElementById('receiver_address_detail').value,
                };
                callAjax('POST',true,'/project_support/order_create',"JSON",'JSON',data,gn_ajax_error,gn_ajax_success);
                //INIStdPay.pay("supportForm");
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
