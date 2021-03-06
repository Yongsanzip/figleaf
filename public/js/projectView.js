document.addEventListener('DOMContentLoaded',function () {

    /**********************************************************
     *  name        : project tab
     *  description : project tab swap
     *  author      : minyeong kim
     ***********************************************************/
    var tab = document.getElementsByClassName('overview-tab')[0].getElementsByTagName('li');
    var tabContents = document.getElementsByClassName('overview-box');
    for(var i=0;i<tab.length;i++){
        tab[i].setAttribute('data-index',i);
    }
    for(var i=0;i<tab.length;i++){
        tab[i].addEventListener('click',function () {
            //tab toggle
           document.getElementsByClassName('tab-on')[0].classList.remove('tab-on');
            this.classList.add('tab-on');
            //contents toggle
            document.getElementsByClassName('overview-box-on')[0].classList.remove('overview-box-on');
            tabContents[this.getAttribute('data-index')].classList.add('overview-box-on');
        });
    }

    // 커뮤니티 작성 후 redirect
    var params = location.search.substr(location.search.indexOf("?") + 1);

    if (params === 'community') {
        $("#community_tab").trigger('click');
        document.getElementById('community_tab').scrollIntoView();
    }

});

/**********************************************************
 *  name        : fnEditCommunity
 *  description : change community comment edit mode
 *  author      : minyeong kim
 ***********************************************************/
function fnEditCm(e){
    var textarea = e.parentNode.parentNode.parentNode.querySelector('.textarea');
    var str = textarea.value;
    str = replaceAll(str,"<br/>", "\r\n");
    textarea.value = str;

    var store_btn = e.parentNode.querySelector('.storeBtn');
    e.style.display = 'none';
    store_btn.style.display = '';

    var cmItem = e.parentNode.parentNode.parentNode;
    cmItem.classList.add('edit-on');
}

/**********************************************************
 *  name        : fnCancleCommunity
 *  description : cancel edit mode
 *  author      : minyeong kim
 ***********************************************************/
function fnCancelCm(e){
    var cmItem = e.parentNode.parentNode.parentNode;
    cmItem.classList.remove('edit-on');

    var store_btn = e.parentNode.querySelector('.storeBtn');
    var update_btn = e.parentNode.querySelector('.updateBtn');
    store_btn.style.display = 'none';
    update_btn.style.display = '';
}






/**********************************************************
 *  name        : fnAddOption
 *  description : add option item when select product list
 *  author      : minyeong kim
 ***********************************************************/
function fnAddOption(e){
    var option_name = e.options[document.getElementById("select_option").selectedIndex].text;
    var option_price = $(e).find(':selected').data("value");
    var option_id = e.options[document.getElementById("select_option").selectedIndex].value;

    var option_exist = document.getElementsByClassName('optionId');
    var option_exist_amount = document.getElementsByClassName('option-amount');
    for (var i = 0; i < option_exist.length; i++) {
        if (option_exist[i].value === option_id) {
            option_exist_amount[i].value++;
            return false;
        }
    }

    var optionList = document.getElementsByClassName('option-list')[0];
    var optionItem = '<li class="option-item">' +
        '                <div class="option-value">' +
        '                    <span class="option-name">'+option_name+'</span>' +
        '                    <input class="option-amount" name="option_amount[]" min="1" type="number" value="1">' +
        '                    <input class="optionId" min="1" name="option_id[]" type="hidden" value="'+option_id+'">' +
        '                    <span class="option-price">'+option_price.toLocaleString()+'원'+'</span>' +
        '                </div>' +
        '                <button class="btn-black" type="button" onclick="fnRemoveOption(this)">삭제</button>' +
        '            </li>';
    //add option item
    optionList.insertAdjacentHTML('beforeend',optionItem);
}

/**********************************************************
 *  name        : fnAddOption
 *  description : add option item when select product list
 *  author      : minyeong kim
 ***********************************************************/
function fnRemoveOption(e) {
    e.parentNode.remove();
}




/**********************************************************
 *  name        : fnOpenModal
 *  description : open modal when click request button for designer
 *  author      : minyeong kim
 ***********************************************************/
function fnOpenModal(){
    document.getElementsByClassName('modal-overlay')[0].classList.add('on');
}

/**********************************************************
 *  name        : fnOpenModal
 *  description : open modal when click request button for designer
 *  author      : minyeong kim
 ***********************************************************/
function fnCloseModal(){
    document.getElementsByClassName('modal-overlay')[0].classList.remove('on');
}


/* 커뮤니티 작성 */
var communitySubmit = function(e){
    var validation = gn_validation(e);
    if (validation == false) {
        return false;
    }

    if (confirm('작성하시겠습니까?')) {
        var form = document.getElementById('projectCommunityForm');
        var str = document.getElementById("contents").value;
        str = str.replace(/(?:\r\n|\r|\n)/g, '<br/>');
        document.getElementById("contents").value = str;
        form.submit();
    }

};


/* 문자 replaceAll */
var replaceAll = function (str, searchStr, replaceStr) {
    return str.split(searchStr).join(replaceStr);
};


/* 커뮤니티 수정 */
var communityUpdate = function (e) {
    var validation = gn_validation(e);

    if (validation == false) {
        return false;
    } else {
        var textarea = e.parentNode.querySelector('.textarea');
        var text = e.parentNode.querySelector('.text');

        var str = textarea.value;
        str = str.replace(/(?:\r\n|\r|\n)/g, '<br/>');
        textarea.value = str;

        var community_id = e.parentNode.querySelector('.communityId').value;

        $.ajax({
            type: "PUT",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/project_community/"+community_id,
            dataType: 'JSON',
            data: {
                "contents" : textarea.value,
            },
            success: function () {
                var cmItem = e.parentNode;
                cmItem.classList.remove('edit-on');

                var update_btn = e.parentNode.querySelector('.updateBtn');
                var store_btn = e.parentNode.querySelector('.storeBtn');

                store_btn.style.display = 'none';
                update_btn.style.display = '';

                text.innerHTML = textarea.value;
            }, error: function () {
                alert('오류');
            }
        });
    }
};


/* 커뮤니티 삭제 */
var communityDelete = function (e) {
    if (confirm('삭제하시겠습니까?')) {
        var community_id = e.parentNode.parentNode.parentNode.querySelector('.communityId').value;
        var project_id = document.getElementById('project_id').value;

        var error = function () {
            alert('오류');
        };

        var success = function (data) {
            alert('삭제되었습니다.');
            location.href = '/project/'+data+'?community';
        };

        callAjax('DELETE',true,'/project_community/'+community_id,"JSON",'JSON',null,error,success);
    }
};


/* 후원하기 */
var supportSubmit = function (e) {
    var option_list = document.getElementsByClassName('option-item');
    var login_check = document.getElementById('login_check').value;
    if(login_check){
        if(option_list.length == 0){
            alert('한개이상의 옵션을 선택해주시기 바랍니다.')
            document.getElementById('select_option').focus();
            return false;
        } else {
            document.getElementById('supportSubmitForm').submit();
        }
    } else {
        alert('로그인후 이용해주시기 바랍니다.');
        window.location.href = '/login?returnUrl='+encodeURIComponent(window.location.pathname);
    }

    // callAjax('GET',true,'/project_support',"JSON",'JSON',data,error,success);
};
