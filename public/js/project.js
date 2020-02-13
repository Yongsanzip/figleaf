document.addEventListener('DOMContentLoaded',function () {

    /**** header hide ****/
    document.getElementsByClassName('header')[0].style.display='none';

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
    var optionItem = '<div class="option-item">' +
        '               <div class="option-num">'+optionNum+'</div>' +
        '               <label class="option-field">' +
        '                   <p>옵션명</p>' +
        '                   <input type="text" class="input-field" name="option_name[]" placeholder="30자 이내">' +
        '               </label>' +
        '               <label class="option-field price">' +
        '                   <p>가격</p>' +
        '                   <input type="text" class="input-field" name="option_price[]" placeholder="30자 이내">' +
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


/**********************************************************
 *  name        : fnAddSize
 *  description : add size item
 *  author      : minyeong kim
 ***********************************************************/
function fnAddSize(){
    var sizeList = document.getElementsByClassName('size-list')[0];
    var sizeItem = '<tr>' +
        '            <!-- 사이즈 -->' +
        '            <td><input type="text" name="size[]"></td>' +
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
function fnRemoveSize(e) {

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
    var fabricList = document.getElementsByClassName('fabric-list')[0];
    var fabricItem = '<div class="fabric-item">' +
        '                <div class="fabric-name">' +
        '                    <input type="text" class="input-field" name="fabric[]" id="material_name'+num+'" onclick="popup_material('+num+')" readonly>' +
        '                    <input type="hidden" name="material_id" id="material_id'+num+'">' +
        '                </div>' +
        '                <div class="fabric-ratio">' +
        '                    <input type="number" max="100" min="0" class="input-field" name="fabric_ratio[]">' +
        '                </div>' +
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
function fnRemoveFabric(e) {

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
