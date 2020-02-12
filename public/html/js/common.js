document.addEventListener('DOMContentLoaded',function () {

});


//navigation open
function fnOpenNav(){
    document.getElementsByClassName('overlay')[0].classList.add('overlay-on');
    document.getElementById('gnb_navigation').classList.add('navi-on');
}

//navigation close
function fnCloseNav(){
    document.getElementsByClassName('overlay')[0].classList.remove('overlay-on');
    document.getElementById('gnb_navigation').classList.remove('navi-on');
}

//search open
function fnOpenSearch(){
    document.getElementsByClassName('overlay')[0].classList.add('overlay-on');
    document.getElementById('gnb_search').classList.add('search-on');
}

//search close
function fnCloseSearch(){
    document.getElementsByClassName('overlay')[0].classList.remove('overlay-on');
    document.getElementById('gnb_search').classList.remove('search-on');
}

//overlay click event
function fnCloseOverlay(e){
    e.classList.remove('overlay-on');

    //navigation close
    if(document.getElementById('gnb_navigation').classList.contains('navi-on')){
        fnCloseNav();
    }

    //search close
    if(document.getElementById('gnb_search').classList.contains('search-on')){
        fnCloseSearch();
    }
}

/**********************************************************
 *  name        : fnUploadFileInit
 *  description : upload file and change file name
 *  author      : minyeong kim
 ***********************************************************/
function fnUploadFileInit(fileInput){
    var fileName = fileInput.parentNode.getElementsByClassName('file-name')[0];
    fileName.innerHTML = fileInput.files[0].name;
}
