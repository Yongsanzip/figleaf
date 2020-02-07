document.addEventListener('DOMContentLoaded',function () {

    /**** tab style *****/
    var tab = document.getElementsByClassName('tab-list')[0].getElementsByTagName('li');
    var contentsBox = document.getElementsByClassName('tab-contents-box');
    for(var i=0;i<tab.length;i++){
        tab[i].setAttribute('data-index',i);
    }

    for(var i=0;i<tab.length;i++){
        //탭에 클릭 이벤트 추가
        tab[i].addEventListener('click',function(){
            //활성화 된 탭에서 클래스 제거
            document.getElementsByClassName('tab-on')[0].classList.remove('tab-on');
            //클릭한 탭에 클래스 추가
            this.classList.add('tab-on');
            //클릭한 탭에 맞는 컨텐츠 토글
            document.getElementsByClassName('edit-on')[0].classList.remove('edit-on');
            contentsBox[this.getAttribute('data-index')].classList.add('edit-on');
        });
    }

});


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

/**********************************************************
 *  name        : fnAddOption
 *  description : add option item
 *  author      : minyeong kim
 ***********************************************************/
function fnAddOption(){
    var optionList = document.getElementsByClassName('option-list')[0];
    var optionNum = document.getElementsByClassName('option-item').length+1;
    var optionItem = '<div class="option-item">' +
        '               <div class="option-num">'+optionNum+'</div>' +
        '               <label class="option-field">' +
        '                   <p>옵션명</p>' +
        '                   <input type="text" class="input-field" placeholder="30자 이내">' +
        '               </label>' +
        '               <label class="option-field price">' +
        '                   <p>가격</p>' +
        '                   <input type="text" class="input-field" placeholder="30자 이내">' +
        '               </label>' +
        '               <button type="button" class="btn-white" onclick="fnRemoveOption(this)">삭제</button>' +
        '             </div>';

    //add option item
    optionList.insertAdjacentHTML('beforeend',optionItem);
}

/**********************************************************
 *  name        : fnRemoveOption
 *  description : remove option item
 *  author      : minyeong kim
 ***********************************************************/
function fnRemoveOption(e) {

    //remove option item
    e.parentNode.remove();

    //reset option num
    var optionNum = document.getElementsByClassName('option-num');
    for(var i=0;i<optionNum.length;i++){
        optionNum[i].innerHTML = i+1;
    }
}



