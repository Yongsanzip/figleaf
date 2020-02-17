document.addEventListener('DOMContentLoaded',function () {
    document.getElementById('popup_guide').addEventListener('click', function () {
        popup("/story_telling", "가이드");
    });

    document.getElementById('popup_fee').addEventListener('click', function () {
        popup("/popup_fees", "수수료 정책");
    });

    document.getElementById('store_btn').addEventListener('click', function () {
        document.getElementById('project_form').submit();
    });

    // var company_radio = document.getElementById('company_radio');
    // var personal_radio = document.getElementById('personal_radio');

    document.getElementById('company_radio').addEventListener('click', function () {
        document.getElementById('company_number').style.display = "";
        document.getElementById('company_file').style.display = "";
    });

    document.getElementById('personal_radio').addEventListener('click', function () {
        document.getElementById('company_number').style.display = "none";
        document.getElementById('company_file').style.display = "none";
    });





    // 상품정보 -> 스토리텔링
    document.getElementById('story_telling').addEventListener('click', function () {
        var option_name = document.getElementsByClassName('option_name');                          // 옵션명
        var option_price = document.getElementsByClassName('option_price');                        // 옵션가격
        var size_category = document.getElementById('size_category').value;                         // 사이즈 카테고리
        var information_water = document.getElementsByClassName('information_water');              // 물세탁
        var information_bleach = document.getElementsByClassName('information_bleach');            // 표백
        var information_iron = document.getElementsByClassName('information_iron');                // 다림질
        var information_drycleacing = document.getElementsByClassName('information_drycleacing');  // 드라이클리닝
        var information_dry = document.getElementsByClassName('information_dry');                  // 건조
        var size = document.getElementById('size').value;                                           // 사이즈
        var fabric = document.getElementsByClassName('fabric');                                    // 원단/재질

        // 1. 재질명은 있는데 비율이 없을 때
        // 2. 비율은 있는데 재질명이 없을 때

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

        for (var i = 0; i < information_drycleacing.length; i++) {
            if (information_drycleacing[i].checked) {
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
            return false;
        }

        for (var i = 0; i < option_name.length; i++) {
            if (option_name[i].value.length > 30) {
                alert('옵션명: 30자가 초과 되었습니다.');
                return false;
            }
            if (!option_price[i].value){
                alert('옵션명 또는 가격을 입력해주세요.');
                return false;
            }
        }

        for (var j = 0; j < option_price.length; j++){
            if (option_price[j].value.length > 30) {
                alert('옵션가격: 30자가 초과 되었습니다.');
                return false;
            }
            if (!option_name[j].value) {
                alert('옵션명 또는 가격을 입력해주세요.');
            }
        }


        if (size_category === '0') {
            alert('사이즈 카테고리를 선택해주세요.')
        } else if (!size) {
            alert('사이즈는 필수 입력입니다.')
        } else if (!information_water || !information_bleach || !information_iron || !information_drycleacing || !information_dry) {
            alert('취급정보를 선택해주세요.');
        }

    });

    // 프로젝트 일정 -> 디자이너/브랜드 소개
    document.getElementById('introduction').addEventListener('click', function () {
        var agree = document.getElementById('agree');
        if (agree.checked == false) {
            alert('동의해주세요.');
        }
    });

    // 디자이너/브랜드 소래 -> 정산정보
    document.getElementById('account').addEventListener('click', function () {
        var designer_name = document.getElementById('designer_name').value;
        var brand_name = document.getElementById('brand_name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var homepage = document.getElementById('homepage').value;
        var facebook = document.getElementById('facebook').value;
        var instagram = document.getElementById('instagram').value;
        var twitter = document.getElementById('twitter').value;

        if (!designer_name || !brand_name  || !email || !phone || !homepage || !facebook || !instagram || !twitter) {
            alert('디자이너/브랜드 소개는 필수 입력입니다.');
        }
    })
});


// 팝업
function popup(url, name) {

    var option = "width = 500, height = 500, top = 100, left = 200, location = no";
    var windObj = window.open(url, name, option);
    // windObj.document.getElementById('num').value = 123;
}

// 카테고리
function category(e){
    var id = e.value;
    $.ajax({
        url: '/project/'+id,
        dataType: 'json',
        type: 'GET',
        success: function (result) {
            var second_category = document.getElementById('second_category');
            second_category.options.length = 1;
            for (var i = 0; i < result.length; i++){
                var addOption = document.createElement('option');
                addOption.textContent = result[i].category_name;
                addOption.value = result[i].id;
                second_category.appendChild(addOption);
            }
        }
    });
}


// 원단 - 재질
function material(e) {
    $.ajax({
        // url: '{{ route('project.index') }}',
        url: '/project',
        dataType: 'json',
        data: {
            groups: 'groups',
            material_id: e.value,
        },
        type: 'GET',
        success: function (data) {
            $("#material_category").empty();
            $("#material_category").append(data.html);
        }
    })
}

// 팝업 - 원단/재질
function popup_material(e) {
    popup("/popup_material?num="+e, "원단/재질");
}

// 팝업(원단/재질) 닫기
function popup_material_close() {
    var num = getParam("num");
    var material = document.getElementById('material');
    opener.document.getElementById('material_name'+num).value = material.options[material.selectedIndex].text;
    opener.document.getElementById('material_id'+num).value = material.value;
    window.close();
}

// URL 파라미터 추출
function getParam(sname) {
    var params = location.search.substr(location.search.indexOf("?") + 1);
    var sval = "";
    params = params.split("&");
    for (var i = 0; i < params.length; i++) {
        temp = params[i].split("=");
        if ([temp[0]] == sname) { sval = temp[1]; }
    }
    return sval;
}
