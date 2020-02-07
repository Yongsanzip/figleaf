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

});

/**********************************************************
 *  name        : fnEditCommunity
 *  description : change community comment edit mode
 *  author      : minyeong kim
 ***********************************************************/
function fnEditCm(e){
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
}






/**********************************************************
 *  name        : fnAddOption
 *  description : add option item when select product list
 *  author      : minyeong kim
 ***********************************************************/
function fnAddOption(){
    var optionList = document.getElementsByClassName('option-list')[0];
    var optionItem = '<li class="option-item">' +
        '                <div class="option-value">' +
        '                    <span class="option-name">활동하기에 정말 좋은 면슬립 (Color : Blue / Size : M)</span>' +
        '                    <input class="option-amount" min="1" type="number" value="1">' +
        '                    <span class="option-price">5,552,500원</span>' +
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