document.addEventListener('DOMContentLoaded',function () {

});



/********************* function *********************/
function conditionUpdate() {
    // var option_name = e.options[document.getElementById("selete_option").selectedIndex].text;
    var select = document.getElementById('select_status');
    var selectedOption = select.options[document.getElementById('select_status').selectedIndex].value;
    if (selectedOption == 3) {
        var reason = document.getElementById('reason').value;
        if (!reason) {
            alert('반려 사유를 입력해주세요');
            return false;
        }
    }

    var form = new FormData($('#adminProjectForm')[0]);

    formAjax('POST', false, '/admin_project', form, function(e) {
        alert('error');
        location.reload();
    }, function() {
        alert('완료되었습니다.');
        location.reload();
    });

}

// 팝업
function popup(url, name) {
    var option = "width = 700, height = 500, top = 100, left = 200, location = no";
    var windObj = window.open(url, name, option);
    // windObj.document.getElementById('num').value = 123;
}

// 비고 작성
function note(e) {
    var validation = gn_validation(e);
    if (validation == false) {
        return false;
    } else {
        document.getElementById('adminNoteForm').submit();
        opener.parent.location.reload();
        window.close();
    }
}


// select - readonly
function selectStatus(e) {
    console.log(e.value);
    if (e.value === '3') {
        document.getElementById('reason').disabled = false;
    } else {
        document.getElementById('reason').value = '';
        document.getElementById('reason').disabled = true;
    }
}
