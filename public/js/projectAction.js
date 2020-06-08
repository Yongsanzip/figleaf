document.addEventListener('DOMContentLoaded',function () {
    try{
        document.getElementById('popup_guide').addEventListener('click', function () {
            popup("/story_telling", "가이드");
        });

        document.getElementById('popup_fee').addEventListener('click', function () {
            popup("/popup_fees", "수수료 정책");
        });

        document.getElementById('company_radio').addEventListener('click', function () {
            document.getElementById('company_number_display').style.display = "";
            document.getElementById('company_file_display').style.display = "";
        });

        document.getElementById('personal_radio').addEventListener('click', function () {
            document.getElementById('company_number_display').style.display = "none";
            document.getElementById('company_file_display').style.display = "none";
        });

        // 개요 - 프토젝트 카테고리
        document.getElementById('first_category').addEventListener('change', function (e) {
            category(this);
        });

        var first_category = document.getElementById('first_category');
        if (first_category.value) {
            category(first_category);
        }
    } catch (e){

    }
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
        url: '/project/'+id+'/edit',
        dataType: 'json',
        type: 'GET',
        success: function (result) {
            var second_category = document.getElementById('second_category');
            var project_category2_id = document.getElementById('project_category2_id').value;
            second_category.options.length = 1;
            for (var i = 0; i < result.length; i++){
                var addOption = document.createElement('option');
                addOption.textContent = result[i].category_name;
                addOption.value = result[i].id;
                second_category.appendChild(addOption);
                if (second_category.options[i].value === project_category2_id) {
                    second_category.options[i].selected = true;
                }
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

