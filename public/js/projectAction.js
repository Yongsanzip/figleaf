document.addEventListener('DOMContentLoaded',function () {
    document.getElementById('popup_guide').addEventListener('click', function () {
        popup("/story_telling", "가이드");
    });

    document.getElementById('popup_fee').addEventListener('click', function () {
        popup("/popup_fees", "수수료 정책");
    });

    document.getElementById('store_btn').addEventListener('click', function () {
        document.getElementById('project_form').submit();
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
    console.log(e.value);
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
            console.log(data);
            $("#material_category").empty();
            $("#material_category").append(data.html);
        }
    })
}

// 팝업 - 원단/재질
function popup_material(e) {
    console.log(e);
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
