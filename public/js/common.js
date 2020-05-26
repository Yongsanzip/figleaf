document.addEventListener('DOMContentLoaded',function () {
    if(document.getElementById('address_btn')){
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
    }
});


//navigation open
function fnOpenNav(){
    document.getElementsByClassName('overlay')[0].classList.add('overlay-on');
    document.getElementById('gnb_navigation').classList.add('navi-on');
}

//navigation close
function fnCloseNav(){
    document.getElementsByClassName('overlay')[0].classList.remove('overlay-on');
    document.getElementById('gnb_navigation').classList.remove('navi-on');
}

//search open
function fnOpenSearch(){
    document.getElementsByClassName('overlay')[0].classList.add('overlay-on');
    document.getElementById('gnb_search').classList.add('search-on');
}

//search close
function fnCloseSearch(){
    document.getElementsByClassName('overlay')[0].classList.remove('overlay-on');
    document.getElementById('gnb_search').classList.remove('search-on');
}

//overlay click event
function fnCloseOverlay(e){
    e.classList.remove('overlay-on');

    //navigation close
    if(document.getElementById('gnb_navigation').classList.contains('navi-on')){
        fnCloseNav();
    }

    //search close
    if(document.getElementById('gnb_search').classList.contains('search-on')){
        fnCloseSearch();
    }
}

// null check
var gn_nullCheck = function(v){
    return !(v === '' || v === 'undefined' || v == null);
};

function checkSpace(str) { if(str.search(/\s/) != -1) { return true; } else { return false; } }
// 특수 문자가 있나 없나 체크
function checkSpecial(str) {
    var special_pattern = /[`~!@#$%^&*|\\\'\";:\/?]/gi; if(special_pattern.test(str) == true) { return true; } else { return false; }
}
// 비밀번호 패턴 체크 (8자 이상, 문자, 숫자, 특수문자 포함여부 체크)
function checkPasswordPattern(str) {
    var pattern1 = /[0-9]/; // 숫자
    var pattern2 = /[a-zA-Z]/; // 문자
    var pattern3 = /[~!@#$%^&*()_+|<>?:{}]/; // 특수문자
    if(!pattern1.test(str) || !pattern2.test(str) || !pattern3.test(str) || str.length < 8) { return false; } else { return true; }
}

/***********************************************************************
 * function Name : formAjax
 * description : 폼데이터 Ajax
 *
 ***********************************************************************/
var formAjax = function(methodType,asyncType,urlPath,formData,errorFunc,successFunc){
    try{
        $.ajax({
            type : methodType,
            url : urlPath,
            async : asyncType,
            cache : false,
            contentType :false,
            processData: false,
            data : formData,
            error : errorFunc,
            success : successFunc
        });
    }catch(e){
        alert("에러코드 : " + e.code + "\r\n 에러내용 : " + e.message);
    }
};

/***********************************************************************
 * function Name : callAjax
 * description : 공통 Ajax
 *
 ***********************************************************************/
var callAjax = function(methodType,asyncType,urlPath,dataReceiveType,sendContentType,sendData,errorFunc,successFunc){
    try{
        $.ajax({
            type : methodType,
            url : urlPath,
            async : asyncType,
            timeout : "5000", // 150000
            cache : false,
            contentType : "application/x-www-form-urlencoded; charset=utf-8",
            dataType : dataReceiveType,
            data : (sendData != "") ? ((sendContentType == "json" || sendContentType == "application/json") ? JSON.parse(sendData) : sendData) : "",
            error : errorFunc,
            success : successFunc
        });
    }catch(e){
        alert("에러코드 : " + e.code + "\r\n 에러내용 : " + e.message);
    }
};
var gn_ajax_success = function(e){
    console.log(e);
}
var gn_ajax_error  = function(e){
    console.log(e);
}
/***********************************************************************
 * function Name : gn_make_input_json
 * description : input 데이터 JSON 으로 만들기
 *
 ***********************************************************************/
var gn_make_input_json = function(div_id ,type , json_input){
    var send_array = new Array();
    var divElement = document.getElementById(div_id);
    for(var i =0; i < divElement.children.length; i++){
        var obj = new Object();
        var flag =0;
        for(var j = 0; j< divElement.children[i].getElementsByTagName('input').length; j++){
            if(!gn_nullCheck(divElement.children[i].getElementsByTagName('input')[j].value)){
                flag++;
            }
            obj[divElement.children[i].getElementsByTagName('input')[j].getAttribute('data-key')] = divElement.children[i].getElementsByTagName('input')[j].value;
        }
        if(!(flag == divElement.children[i].getElementsByTagName('input').length)) {
            send_array.push(obj);
        }
    }
    document.getElementById(json_input).value = JSON.stringify(send_array);
};

/***********************************************************************
 * function Name : gn_validation
 * description : class 명으로 value 요소 체크
 ***********************************************************************/
var gn_validation = function(e){
    var check_list = e.querySelectorAll('.required');
    var flag = true;
    for(var i=0; i<check_list.length; i++){
        if(!gn_nullCheck(check_list[i].value)){
            alert(check_list[i].getAttribute('data-title') +"(은)는 입력 필수사항입니다.");
            check_list[i].focus();
            flag = false;
            return false;
        }
    }
    return flag;
};


/***********************************************************************
 * function Name : gn_make_input_json
 * description : input 데이터 JSON 으로 만들기
 *
 ***********************************************************************/
var gn_getNumberOnly = function(obj){
    var val = new String(obj);
    var regex = /[^0-9]/g;
    return val.replace(regex,'');
};


/***********************************************************************
 * function Name : getParam
 * description :  URL 파라미터 추출
 *
 ***********************************************************************/
var getParam = function (sname) {
    var params = location.search.substr(location.search.indexOf("?") + 1);
    var sval = "";
    params = params.split("&");
    for (var i = 0; i < params.length; i++) {
        temp = params[i].split("=");
        if ([temp[0]] == sname) { sval = temp[1]; }
    }
    return sval;
};


/***********************************************************************
 * function Name : replaceAll
 * description : 해당 문자 모두 변환
 *
 ***********************************************************************/
var replaceAll = function (str, searchStr, replaceStr) {
    return str.split(searchStr).join(replaceStr);
};


function isEmail(asValue) {

    var regExp = /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i;

    return regExp.test(asValue); // 형식에 맞는 경우 true 리턴

}



var fn_send_message =function(f,func){
    if(document.getElementById('message_content').value != null){
        if(confirm(document.getElementById('designer_name').innerText+" 디자이너님 에게 메세지를 전송하시겠습니까?")){
            var params = {project:f,contents:document.getElementById('message_content').value};
            callAjax('POST',true,'/mypage_message','JSON','JSON',params,gn_ajax_error,func);
        }
    } else {
        alert("문의내용을 입력해주세요!");
        return false;
    }
}

var gn_detail_send_message = function(f){
    if(gn_nullCheck(document.getElementById('message_content').value)){
        if(confirm("해당내용을 전송하시겠습니까?")){
            var last_id = document.getElementById('last_id').value;
            var params = {contents:document.getElementById('message_content').value,last_id:last_id};
            callAjax('PUT',true,'/mypage_message/'+f,'JSON','JSON',params,gn_ajax_error,gn_send_message_success);
        }
    } else {
        alert('내용을 입력해주세요');
        document.getElementById('message_content').focus();
    }

}

var gn_send_message_success = function(e){

    if(e.code == 1){
        $('#message_list').append(e.html);
        document.getElementById('last_id').value = e.last_id;
        document.getElementById('message_content').value='';
    } else if(e.code == 998){
        alert(e.msg);
        document.getElementById('message_content').value='';
    } else if(e.code ==999){
        alert(e.msg);
        window.location.href='/login';
    }
};


var gn_get_message_list = function(e,last_id){
    var params = {message:e,last_id:last_id};
    callAjax('POST',true,'/get_message','JSON','JSON',params,gn_ajax_error,gn_send_message_success);
};
