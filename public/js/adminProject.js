document.addEventListener('DOMContentLoaded',function () {

});



/****************************************** function ******************************************/

/******************************* 프로젝트 *******************************/
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
    if (e.value === '3') {
        document.getElementById('reason').disabled = false;
    } else {
        document.getElementById('reason').value = '';
        document.getElementById('reason').disabled = true;
    }
}

// admin_project - 검색 카테고리
function searchCategory(e) {
    if (e.value === 'category') {
        document.getElementById('keyword').style.display = 'none';
        document.getElementById('search_category').style.display = '';
    } else {
        document.getElementById('keyword').style.display = '';
        document.getElementById('search_category').style.display = 'none';
    }
}


/******************************* 1:1 문의하기 *******************************/
var addAnswer = function(data) {
    if (data === 'answer_exits') {
        // var textarea = e.parentNode.parentNode.parentNode.querySelector('.textarea');
        var textarea = document.getElementById('contents');
        var str = textarea.value;
        str = replaceAll(str,"<br/>", "\r\n");
        textarea.value = str;
    } else {

    }
    document.getElementById('answer_add').style.display = '';
    document.getElementById(data).style.display = 'none';
};

var cancelAnswer = function() {
    if (confirm('취소하시겠습니까?')) {
        document.getElementById('answer_add').style.display = 'none';
        if (document.getElementById('answer_hidden')) {
            console.log(11);
            document.getElementById('answer_hidden').style.display = '';
            document.getElementById('answer_area').value = '';
        } else {
            console.log(12);
            location.reload();
        }
    }
};

var storeAnswer = function(i) {
    var error = function () {
        alert('오류');
    };

    var success = function (data) {
        location.reload();
        alert('완료되었습니다.');
    };

    var str = document.getElementById("contents").value;
    str = str.replace(/(?:\r\n|\r|\n)/g, '<br/>');
    document.getElementById("contents").value = str;

    var data = {
        'id' : i,
        'contents' : document.getElementById("contents").value
    };

    if (confirm('작성하시겠습니까?')) {
        callAjax('POST',true,'/admin_question',"JSON",'JSON',data,error,success);
    }
};


var deleteAnswer = function (i) {
    var error = function () {
        alert('오류');
    };

    var success = function (data) {
        location.reload();
        alert('완료되었습니다.');
    };

    if (confirm('답변을 삭제하시겠습니까?')) {
        callAjax('DELETE',true,'/admin_question/'+i,"JSON",'JSON',null,error,success);
    }
};

var allCheck = function (e, name) {
    var checkBox = document.getElementsByClassName(name);
    if (e.checked === true) {
        for (var i = 0; i < checkBox.length; i++) {
            checkBox[i].checked = true;
        }
    } else {
        for (var i = 0; i < checkBox.length; i++) {
            checkBox[i].checked = false;
        }
    }
};
