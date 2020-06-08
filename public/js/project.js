document.addEventListener('DOMContentLoaded',function () {
    // 텍스트에디터
    var oEditors = [];
    nhn.husky.EZCreator.createInIFrame({
        oAppRef: oEditors,
        elPlaceHolder: "ir1",
        sSkinURI: "../se2/SmartEditor2Skin.html",
        fCreator: "createSEditor2",
        fOnAppLoad: function () {
            // document.getElementById("editor").setAttribute('style','display:none;')
            $("iframe").css("width", "100%").css("height", "100%");
        }

    });

    var error_msg = "오류입니다. 다시 입력해주세요.";

    // 개요
    document.getElementById('summary').addEventListener('click', function () {
        var tab_list = document.getElementsByClassName('tab-list');
        for (var i = 0; i < tab_list.length; i++) {
            var tab_on = tab_list[i].querySelector('.tab-on').id;
        }
        console.log(tab_on)
        var form_name = formName(tab_on);                                                           // 이전의 선택된 폼 id

        var validation = projectValidation(form_name);
        if (validation === false) {
            valueCheck = false;
            return false;
        }

        if (form_name == '#projectForm3') {
            oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);
        }
        var form = new FormData($(form_name)[0]);
        var summary_tab = document.getElementById(tab_on);
        formAjax('POST', false, '/project', form, function(e) {
            alert(error_msg);
            location.href = '/project/create';}, function(data) {
            var project_id = document.getElementsByClassName('projectId');
            for (var i = 0; i < project_id.length; i++) {
                project_id[i].value = data;
            }
            summary_tab.classList.add('fill');
        });
        valueCheck = true;
    });

    // 상품정보
    document.getElementById('product_information').addEventListener('click', function () {
        var tab_list = document.getElementsByClassName('tab-list');
        for (var i = 0; i < tab_list.length; i++) {
            var tab_on = tab_list[i].querySelector('.tab-on').id;
        }
        var form_name = formName(tab_on);                                                           // 이전의 선택된 폼 id

        var validation = projectValidation(form_name);
        if (validation === false) {
            valueCheck = false;
            return false;
        }

        if (form_name == '#projectForm3') {
            oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);
        }
        var form = new FormData($(form_name)[0]);
        var product_information = document.getElementById(tab_on);
        formAjax('POST', false, '/project', form, function(e) {
            alert(error_msg);
            location.href = '/project/create';}, function(data) {
            var project_id = document.getElementsByClassName('projectId');
            for (var i = 0; i < project_id.length; i++) {
                project_id[i].value = data;
            }
            product_information.classList.add('fill');
        });
        valueCheck = true;
    });


    // 스토리텔링
    document.getElementById('story_telling').addEventListener('click', function () {
        var tab_list = document.getElementsByClassName('tab-list');
        for (var i = 0; i < tab_list.length; i++) {
            var tab_on = tab_list[i].querySelector('.tab-on').id;
        }
        var form_name = formName(tab_on);                                                           // 이전의 선택된 폼 id
        var validation = projectValidation(form_name);

        if (validation === false) {
            valueCheck = false;
            return false;
        }

        var form = new FormData($(form_name)[0]);
        var story_telling = document.getElementById(tab_on);
        formAjax('POST', false, '/project', form, function(e) {
            alert(error_msg);
            location.href = '/project/create';
        }, function(data) {
            story_telling.classList.add('fill');
        });
        valueCheck = true;

    });

    // 프로젝트 일정
    document.getElementById('project_date').addEventListener('click', function () {
        var tab_list = document.getElementsByClassName('tab-list');
        for (var i = 0; i < tab_list.length; i++) {
            var tab_on = tab_list[i].querySelector('.tab-on').id;
        }
        var form_name = formName(tab_on);                                                           // 이전의 선택된 폼 id
        var validation = projectValidation(form_name);

        if (validation === false) {
            valueCheck = false;
            return false;
        }

        var project_date = document.getElementById(tab_on);
        if (form_name == '#projectForm3') {
            oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);
        }
        var form = new FormData($(form_name)[0]);
        formAjax('POST', false, '/project', form, function (e) {
            alert('오류입니다. 처음부터 다시 시작해주세요.');
            location.href = '/project/create';
        }, function (data) {
            if (data === 'fail') {
                alert('이전 단계를 진행해주세요.')
            } else {
                project_date.classList.add('fill');
                valueCheck = true;
            }
        });
    });

    // 디자이너/브랜드 소개
    document.getElementById('introduction').addEventListener('click', function () {
        var tab_list = document.getElementsByClassName('tab-list');
        for (var i = 0; i < tab_list.length; i++) {
            var tab_on = tab_list[i].querySelector('.tab-on').id;
        }
        var form_name = formName(tab_on);                                                           // 이전의 선택된 폼 id
        var validation = projectValidation(form_name);

        if (validation === false) {
            valueCheck = false;
            return false;
        }

        // projectForm4
        if (form_name == '#projectForm3') {
            oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);
        }
        var introduction = document.getElementById(tab_on);
        var form = new FormData($(form_name)[0]);
        formAjax('POST', false, '/project', form, function(e) {
            alert(error_msg);
            location.href = '/project/create';}, function(data) {
            introduction.classList.add('fill');
            valueCheck = true;
        });

    });

    // 정산정보
    document.getElementById('account').addEventListener('click', function () {
        var tab_list = document.getElementsByClassName('tab-list');
        for (var i = 0; i < tab_list.length; i++) {
            var tab_on = tab_list[i].querySelector('.tab-on').id;
        }
        var form_name = formName(tab_on);                                                           // 이전의 선택된 폼 id
        var validation = projectValidation(form_name);

        if (validation === false) {
            valueCheck = false;
            return false;
        }

        if (form_name == '#projectForm3') {
            oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);
        }
        var account = document.getElementById(tab_on);
        var form = new FormData($(form_name)[0]);
        formAjax('POST', false, '/project', form, function(e) {
            alert(error_msg);
            location.href = '/project/create';}, function(data) {
            account.classList.add('fill');
            valueCheck = true;
        });

    });

    // 검토요청하기
    document.getElementById('store_btn').addEventListener('click', function () {
        var tab_list = document.getElementsByClassName('tab-list');
        for (var i = 0; i < tab_list.length; i++) {
            var tab_on = tab_list[i].querySelector('.tab-on').id;
        }
        var form_name = formName(tab_on);                                                           // 이전의 선택된 폼 id
        var validation = projectValidation(form_name);

        if (validation === false) {
            valueCheck = false;
            return false;
        }

        if (confirm('관리자에게 검토를 요청하시겠습니까?')) {
            if (form_name == '#projectForm3') {
                oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);
            }
            var store = document.getElementById(tab_on);
            var form = new FormData($(form_name)[0]);
            var project_id = document.getElementsByClassName('projectId')[0].value;
            formAjax('POST', false, '/project', form, function(e) {
                alert(error_msg);
                location.href = '/project/create';}, function(data) {
                store.setAttribute("class", "fill");
                alert('완료되었습니다.');
                location.href = '/mypage_project';
                valueCheck = true;
            });
        }

    });


    /**** header hide ****/
    document.getElementsByClassName('header')[0].style.display='none';

    /**** tab style *****/
    var tab = document.getElementsByClassName('tab-list')[0].getElementsByTagName('li');
    var contentsBox = document.getElementsByClassName('tab-contents-box');
    var valueCheck = false;
    for(var i=0;i<tab.length;i++){
        tab[i].setAttribute('data-index',i);
    }

    for(var i=0;i<tab.length;i++){
        //탭에 클릭 이벤트 추가
        tab[i].addEventListener('click',function(){

            if(valueCheck){
                tabToggle(this);
            }

        });
    }

    function tabToggle(el){
        //활성화 된 탭에서 클래스 제거
        document.getElementsByClassName('tab-on')[0].classList.remove('tab-on');
        //클릭한 탭에 클래스 추가
        el.classList.add('tab-on');
        //클릭한 탭에 맞는 컨텐츠 토글
        document.getElementsByClassName('edit-on')[0].classList.remove('edit-on');
        contentsBox[el.getAttribute('data-index')].classList.add('edit-on');

        setTimeout(function () {
            window.frames[0].document.getElementsByClassName('se2_to_html')[0].click();
            window.frames[0].document.getElementsByClassName('se2_to_editor')[0].click();
        }, 10);
    }


    /***** drop box *****/
    var dropBox = document.getElementsByClassName('drop-header');
    for(var i=0;i<dropBox.length;i++){
        dropBox[i].addEventListener('click',function () {
           this.classList.toggle('drop-on');
        });
    }

    /***** handling tab *****/
    var handlingTab = document.getElementsByClassName('handling-tab')[0].getElementsByTagName('li');
    var handlingContentsBox = document.getElementsByClassName('handling-contents');
    for(var i=0;i<handlingTab.length;i++){
        handlingTab[i].setAttribute('data-index',i);
    }
    for(var i=0;i<handlingTab.length;i++){
        handlingTab[i].addEventListener('click',function () {
            //활성화 된 탭에서 클래스 제거
            document.getElementsByClassName('handling-on')[0].classList.remove('handling-on');
            //클릭한 탭에 클래스 추가
            this.classList.add('handling-on');
            //클릭한 탭에 맞는 컨텐츠 토글
            document.getElementsByClassName('handling-con-on')[0].classList.remove('handling-con-on');
            handlingContentsBox[this.getAttribute('data-index')].classList.add('handling-con-on');
        })
    }


});



/**********************************************************
 *  name        : fnAddOption
 *  description : add option item
 *  author      : minyeong kim
 ***********************************************************/
function fnAddOption(){
    var optionList = document.getElementsByClassName('option-list')[0];
    var optionNum = document.getElementsByClassName('option-item').length+1;

    if (optionNum > 10) {
        alert('최대 개수를 초과하였습니다.');
        return false;
    }

    var optionItem = '<div class="option-item">' +
        '               <div class="option-num">'+optionNum+'</div>' +
        '               <label class="option-field">' +
        '                   <p>옵션명</p>' +
        '                   <input type="text" class="input-field option_name" name="option_name[]" value="" placeholder="30자 이내">' +
        '               </label>' +
        '               <label class="option-field price">' +
        '                   <p>가격</p>' +
        '                   <input type="text" class="input-field option_price" name="option_price[]" placeholder="30자 이내">' +
        '               </label>' +
        '               <button type="button" class="btn-white" onclick="fnRemoveOption(this)">삭제</button>' +
        '             </div>' +
        '               <input type="hidden" name="option_id[]" value="">';

    //add option item
    optionList.insertAdjacentHTML('beforeend',optionItem);
}

/**********************************************************
 *  name        : fnRemoveOption
 *  description : remove option item
 *  author      : minyeong kim
 ***********************************************************/
var option_arr = [];
function fnRemoveOption(e) {
    // 삭제 된 id 담기
    option_arr.push(e.value);
    document.getElementById('delete_option_id').value = option_arr;

    //remove option item
    e.parentNode.remove();

    //reset option num
    var optionNum = document.getElementsByClassName('option-num');
    for(var i=0;i<optionNum.length;i++){
        optionNum[i].innerHTML = i+1;
    }
}


/**********************************************************
 *  name        : fnAddSize
 *  description : add size item
 *  author      : minyeong kim
 ***********************************************************/
function fnAddSize(){
    var sizeList = document.getElementsByClassName('size-list')[0];
    var sizeCount = document.getElementsByClassName('sizeCount').length+1;

    if (sizeCount > 10) {
        alert('최대 개수를 초과하였습니다.');
        return false;
    }

    var sizeItem = '<input type="hidden" name="size_id[]" value="">' +
        '        <tr>' +
        '            <!-- 사이즈 -->' +
        '            <td><input type="text" class="sizeCount" name="size[]"></td>' +
        '            <!-- 총기장 -->' +
        '            <td><input type="text" name="total_length[]"></td>' +
        '            <!-- 어깨 -->' +
        '            <td><input type="text" name="shoulder[]"></td>' +
        '            <!-- 가슴 -->' +
        '            <td><input type="text" name="chest[]"></td>' +
        '            <!-- 팔길이 -->' +
        '            <td><input type="text" name="arms_length[]"></td>' +
        '            <!-- 소매단면 -->' +
        '            <td><input type="text" name="sleeve[]"></td> ' +
        '            <!-- 암홀 -->' +
        '            <td><input type="text" name="armhole[]"></td>' +
        '            <!-- 허리 -->' +
        '            <td><input type="text" name="waist[]"></td>' +
        '            <!-- 밑단 -->' +
        '            <td><input type="text" name="hem[]"></td>' +
        '            <!-- 밑위 -->' +
        '            <td><input type="text" name="crotch[]"></td>' +
        '            <!-- 엉덩이단면 -->' +
        '            <td><input type="text" name="hip[]"></td>' +
        '            <!-- 허벅지단면 -->' +
        '            <td><input type="text" name="thigh[]"></td>' +
        '            <!-- 끈길이 -->' +
        '            <td><input type="text" name="string_length[]"></td>' +
        '            <!-- 가로 -->' +
        '            <td><input type="text" name="horizontal[]"></td>' +
        '            <!-- 세로 -->' +
        '            <td><input type="text" name="vertical[]"></td>' +
        '            <!-- 앞굽 -->' +
        '            <td><input type="text" name="forefoot[]"></td>' +
        '            <!-- 뒷굽 -->' +
        '            <td><input type="text" name="heels[]"></td>' +
        '            <!-- 버튼 -->' +
        '            <td class="row-btn">' +
        '                <button type="button" class="btn-black" onclick="fnRemoveSize(this)"></button>' +
        '            </td>' +
        '       </tr>';

    //add size item
    sizeList.insertAdjacentHTML('beforeend',sizeItem);
}



/**********************************************************
 *  name        : fnRemoveSize
 *  description : remove size item
 *  author      : minyeong kim
 ***********************************************************/
var size_arr = [];
function fnRemoveSize(e) {
    // 사이즈 삭제 id 담기
    size_arr.push(e.value);
    document.getElementById('delete_size_id').value = size_arr;

    //remove option item
    e.parentNode.parentNode.remove();

}



/**********************************************************
 *  name        : fnAddFabric
 *  description : add fabric item
 *  author      : minyeong kim
 ***********************************************************/
var num = 0;
function fnAddFabric(){
    num++;
    var fabricCount = document.getElementsByClassName('fabric-list');
    var i = fabricCount.length-1;
    var fabricLimit = document.getElementsByClassName('fabric-name');

    if (fabricLimit.length > 6) {
        alert('최대 개수를 초과하였습니다.');
        return false;
    }

    var fabricList = document.getElementsByClassName('fabric-list')[i];

    var fabricItem = '<div class="fabric-item">' +
        '                <div class="fabric-name">' +
        '                    <input type="text" class="input-field fabric" name="fabric[]" id="material_name'+num+'" onclick="popup_material('+num+')" readonly>' +
        '                    <input type="hidden" name="material_id[]" id="material_id'+num+'">' +
        '                </div>' +
        '                <div class="fabric-ratio">' +
        '                    <input type="number" max="100" min="0" class="input-field fabric_ratio" name="fabric_ratio[]">' +
        '                </div>' +
        '                <input type="hidden" name="fabric_id[]" value="">' +
        '                <button class="btn-white" type="button" onclick="fnRemoveFabric(this)">삭제</button>' +
        '            </div>';

    //add size item
    fabricList.insertAdjacentHTML('beforeend',fabricItem);
}

/**********************************************************
 *  name        : fnRemoveFabric
 *  description : remove fabric item
 *  author      : minyeong kim
 ***********************************************************/
var fabric_arr = [];
function fnRemoveFabric(e) {
    // 원단 삭제 id 담기
    fabric_arr.push(e.value);
    document.getElementById('delete_fabric_id').value = fabric_arr;

    //remove option item
    e.parentNode.remove();

}




/**********************************************************
 *  name        : fnUploadFile
 *  description : upload file
 *  author      : minyeong kim
 ***********************************************************/
function fnUploadFile(fileInput){
    var fileName = fileInput.parentNode.getElementsByClassName('file-name')[0];
   fileName.innerHTML = fileInput.files[0].name;
   var fileSize = fileInput.files[0].size/1024;
   console.log(fileSize);
}



/* form 찾기 */
var formName = function (tab_on) {
    var form;
    switch (tab_on) {
        case 'summary':
            form = '#projectForm1';
            break;
        case 'product_information':
            form = '#projectForm2';
            break;
        case 'story_telling':
            form = '#projectForm3';
            break;
        case 'project_date':
            form = '#projectForm4';
            break;
        case 'introduction':
            form = '#projectForm5';
            break;
        case 'account':
            form = '#projectForm6';
            break;
        default :
            form = '#projectForm1';
            break;
    }

    return form;
};


/* 상품정보 validation */
var projectValidation = function (form_name) {
    if (form_name === '#projectForm1') {
        var title = document.getElementById('project_title').value;                 // 프로젝트 제목
        var first_category = document.getElementById('first_category').value;       // 프로젝트 1차카테고리
        var second_category = document.getElementById('second_category').value;     // 프로젝트 2차 카테고리
        var summary = document.getElementById('project_summary').value;             // 프로젝트 개요
        var main_file = document.getElementById('main_file').value;                 // 프로젝트 대표이미지
        var success_count = document.getElementById('success_count').value;         // 프로젝트 성공개수
        var file_check = document.getElementById('file_check').value;

        if (title.length > 30) {
            alert('프로젝트 제목이 30자가 초과되었습니다');
            return false;
        } else if (first_category === '0') {
            alert('1차 카테고리를 선택해주세요.');
            return false;
        } else if (second_category === '0') {
            alert('2차 카테고리를 선택해주세요.');
            return false;
        } else if (!main_file && !file_check) {
            alert('대표이미지(썸네일)은 필수입니다.');
            return false;
        } else if (summary.length < 10) {
            alert('프로젝트 개요는 최소 10자 이상입니다.');
            return false;
        } else if (summary.length > 50) {
            alert('프로젝트 개요가 50자가 초과되었습니다');
            return false;
        } else if (success_count < 10) {
            alert('프로젝트 성공 개수는 최소 10개 이상입니다.');
            return false;
        }
        else if (success_count > 30) {
            alert('프로젝트 성공 개수는 최대 30개 까지만 설정 가능합니다');
            return false;
        }
        return true;
    } else if (form_name === '#projectForm2') {
        var option_name = document.getElementsByClassName('option_name');                          // 옵션명
        var option_price = document.getElementsByClassName('option_price');                        // 옵션가격
        var size_category = document.getElementById('size_category').value;                         // 사이즈 카테고리
        var information_water = document.getElementsByClassName('information_water');              // 물세탁
        var information_bleach = document.getElementsByClassName('information_bleach');            // 표백
        var information_iron = document.getElementsByClassName('information_iron');                // 다림질
        var information_drycleaning = document.getElementsByClassName('information_drycleaning');  // 드라이클리닝
        var information_dry = document.getElementsByClassName('information_dry');                  // 건조
        var size = document.getElementById('size').value;                                           // 사이즈
        var fabric = document.getElementsByClassName('fabric');                                    // 원단/재질
        var fabric_ratio = document.getElementsByClassName('fabric_ratio');                        // 원단/재질 비율


        // 1. 재질명은 있는데 비율이 없을 때
        // 2. 비율은 있는데 재질명이 없을 때

        for (var i = 0; i <fabric.length; i++) {
            if (!fabric[i].value || !fabric_ratio[i].value) {
                alert('재질명 또는 비율을 입력해주세요.');
                // valueCheck = false;
                return false;
            }
        }

        for (var i = 0; i <fabric_ratio.length; i++) {
            if (!fabric[i].value || !fabric_ratio[i].value) {
                alert('재질명 또는 비율을 입력해주세요.');
                // valueCheck = false;
                return false;
            }
        }

        var num = 0;
        for (var i = 0; i < information_water.length; i++) {
            if (information_water[i].checked) {
                num++;
            }
        }

        for (var i = 0; i < information_bleach.length; i++) {
            if (information_bleach[i].checked) {
                num++;
            }
        }

        for (var i = 0; i < information_iron.length; i++) {
            if (information_iron[i].checked) {
                num++;
            }
        }

        for (var i = 0; i < information_drycleaning.length; i++) {
            if (information_drycleaning[i].checked) {
                num++;
            }
        }
        for (var i = 0; i < information_dry.length; i++) {
            if (information_dry[i].checked) {
                num++;
            }
        }

        if (num != 5) {
            num = 0;
            alert('취급정보는 필수 선택입니다.');
            // valueCheck = false;
            return false;
        }

        for (var i = 0; i < option_name.length; i++) {
            if (option_name[i].value.length > 30) {
                alert('옵션명: 30자가 초과 되었습니다.');
                // valueCheck = false;
                return false;
            }
            if (option_name[i].value.length > 0 && !option_price[i].value){
                alert('옵션명 또는 가격을 입력해주세요.');
                // valueCheck = false;
                return false;
            }
        }

        for (var j = 0; j < option_price.length; j++){
            if (option_price[j].value.length > 30) {
                alert('옵션가격: 30자가 초과 되었습니다.');
                // valueCheck = false;
                return false;
            }
            if (option_price[j].value > 0 && !option_name[j].value) {
                alert('옵션명 또는 가격을 입력해주세요.');
                // valueCheck = false;
                return false;
            }
        }


        if (size_category === '0') {
            alert('사이즈 카테고리를 선택해주세요.');
            // valueCheck = false;
            return false;
        } else if (!size) {
            alert('사이즈는 필수 입력입니다.');
            // valueCheck = false;
            return false;
        } else if (!information_water || !information_bleach || !information_iron || !information_drycleaning || !information_dry) {
            alert('취급정보를 선택해주세요.');
            // valueCheck = false;
            return false;
        }

        return true;
    } else if (form_name === '#projectForm3') {
        return true;
    } else if (form_name === '#projectForm4') {
        var agree = document.getElementById('agree');
        var deadline = document.getElementById('deadline').value;
        var account_date = document.getElementById('account_date').value;
        var delivery_date = document.getElementById('delivery_date').value;

        if (!deadline || !account_date || !delivery_date) {
            alert('프로젝트 일정은 필수 입력입니다.');
            return false;
        } else if (agree.checked == false) {
            alert('약관을 동의해주세요.');
            return false;
        }
        return true;
    } else if (form_name === '#projectForm5') {
        var designer_name = document.getElementById('designer_name').value;
        var brand_name = document.getElementById('brand_name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var homepage = document.getElementById('homepage').value;
        var facebook = document.getElementById('facebook').value;
        var instagram = document.getElementById('instagram').value;
        var twitter = document.getElementById('twitter').value;

        if (!designer_name || !brand_name  || !email || !phone || !homepage || !facebook || !instagram || !twitter) {
            alert('디자이너/브랜드 파트 입력은 필수 입력입니다.');
            valueCheck = false;
            return false;
        } else {
            return true;
        }

    } else if (form_name === '#projectForm6') {
        var company_radio = document.getElementById('company_radio');
        var company_number = document.getElementById('company_number').value;
        var company_file = document.getElementById('company_file').value;
        var bank_file = document.getElementById('bank_file').value;
        var account_email = document.getElementById('account_email').value;
        var account_phone = document.getElementById('account_phone').value;
        var company_file_check = document.getElementById('company_file_check').value;
        var bank_file_check = document.getElementById('bank_file_check').value;

        if (company_radio.checked === true) {
            if (!company_number) {
                alert('사업자등록번호를 입력해주세요.');
                return false;
            } else if (!company_file && !company_file_check) {
                alert('사업자등록증을 등록해주세요.');
                return false;
            }
        }

        if (!bank_file && !bank_file_check) {
            alert('통장사본을 등록해주세요.');
            return false;
        } else if (!account_email || !account_phone) {
            alert('이메일과 전화번호는 필수 입력입니다.')
            return false;
        }
        return true;
    }
};
