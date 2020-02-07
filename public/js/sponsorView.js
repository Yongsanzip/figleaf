document.addEventListener('DOMContentLoaded',function () {

    /**********************************************************
     *  name        : open sponsor modal
     *  description : open sponsor modal when click table row
     *  author      : minyeong kim
     ***********************************************************/
    var row = document.getElementsByClassName('sponsor-item');
    for(var i=0;i<row.length;i++){
        row[i].addEventListener('click',fnOpenModal)
    }

});


/**********************************************************
 *  name        : fnOpenModal
 *  description : open modal when click request button for designer
 *  author      : minyeong kim
 ***********************************************************/
function fnOpenModal(){
    document.getElementsByClassName('modal-overlay')[0].classList.add('on');
    document.getElementsByClassName('sponsor-modal')[0].style.display = 'block';
    document.getElementsByClassName('message-modal')[0].style.display = 'none';

}

/**********************************************************
 *  name        : fnOpenModal
 *  description : open modal when click request button for designer
 *  author      : minyeong kim
 ***********************************************************/
function fnCloseModal(){
    document.getElementsByClassName('modal-overlay')[0].classList.remove('on');
}

/**********************************************************
 *  name        : fnOpenMessage
 *  description : open message modal when click send button
 *  author      : minyeong kim
 ***********************************************************/
function fnOpenMessage(){
    document.getElementsByClassName('sponsor-modal')[0].style.display = 'none';
    document.getElementsByClassName('message-modal')[0].style.display = 'block'

}