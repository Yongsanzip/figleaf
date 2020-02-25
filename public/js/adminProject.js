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
