document.addEventListener('DOMContentLoaded',function () {

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
    for(var i=0; i<check_list.length; i++){
        if(!gn_nullCheck(check_list[i].value)){
            alert(check_list[i].getAttribute('data-title') +"는 입력 필수사항입니다.");
            check_list[i].focus();
            return false;
        }

    }
};


/***********************************************************************
 * function Name : gn_make_input_json
 * description : input 데이터 JSON 으로 만들기
 *
 ***********************************************************************/
var gn_getNumberOnly = function(obj){
    var val = new String(obj);
    var regex = /[^0-9]/g;
    console.log(val.replace(regex,''));
    return val.replace(regex,'');
};
