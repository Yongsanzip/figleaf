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
};


/**********************************************************
 *  name        : fnAddProfile
 *  description : choose language and show profile textarea
 *  author      : minyeong kim
 ***********************************************************/
function fnProfileLang(e){
    var textarea = document.getElementsByClassName('profile-text-list')[0].getElementsByTagName('textarea');

    for(var i=0; i<textarea.length;i++){
        if(e.lang == textarea[i].lang){
            textarea = textarea[i]
        }
    }

    textarea.classList.toggle('hide');
};



/**********************************************************
 *  name        : fnAddHistoryYear
 *  description : add history year item
 *  author      : minyeong kim
 ***********************************************************/
function fnAddHistoryYear(){
    var historyList = document.getElementsByClassName('history-list')[0];
    var historyYearItem = '<div class="year-item">' +
        '               <div class="year-row">' +
        '                   <input type="text" data-key="year" class="input-field" placeholder="ex)2019/연도를 입력하세요.">' +
        '                   <button class="btn-white" type="button" onclick="fnRemoveHistoryYear(this)">삭제</button>' +
        '               </div>' +
        '              <div class="history-active-list">'+
        '               <div class="active-item">' +
        '                   <ul class="active-list">' +
        '                       <li><input type="text" data-key="history_ko" lang="ko" class="input-field history-active-item" placeholder="활동(한국어)"></li>';

    //english check
    if(fnCheckHistoryLang('en')){
        historyYearItem += '<li><input type="text" data-key="history_en" lang="en" class="input-field history-active-item" placeholder="Activities(English)"></li>'
    }else{
        historyYearItem += '<li><input type="text" data-key="history_en" lang="en" class="input-field history-active-item hide" placeholder="Activities(English)"></li>'
    }

    //chinese check
    if(fnCheckHistoryLang('ch')){
        historyYearItem += '<li><input type="text" lang="ch" data-key="history_cn" class="input-field history-active-item" placeholder="活动(汉语)"></li>'
    }else{
        historyYearItem += '<li><input type="text" lang="ch" data-key="history_cn" class="input-field history-active-item hide" placeholder="活动(汉语)"></li>'
    }


    historyYearItem +='                   </ul>' +
        '                   <div class="btn-box">' +
        '                            <button class="btn-black" type="button" onclick="fnAddHistoryActive(this)">추가</button>' +
        '                   </div>' +
        '               </div>' +
        '           </div>'+
        '        </div>';

    //add year item
    historyList.insertAdjacentHTML('beforeend',historyYearItem);
};



/**********************************************************
 *  name        : fnRemoveHistoryYear
 *  description : remove history year item
 *  author      : minyeong kim
 ***********************************************************/
function fnRemoveHistoryYear(e){
    e.parentNode.parentNode.remove();
};


/**********************************************************
 *  name        : fnAddHistoryActive
 *  description : add history active item
 *  author      : minyeong kim
 ***********************************************************/
function fnAddHistoryActive(e){
    var historyActiveList = e.parentNode.parentNode.parentNode;
    var historyActiveItem =
        '                       <div class="active-item">' +
        '                         <ul class="active-list">' +
        '                            <li><input type="text" lang="ko" data-key="history_ko" class="input-field history-active-item" placeholder="활동(한국어)"></li>';

    //english check
    if(fnCheckHistoryLang('en')){
        historyActiveItem += '<li><input type="text" lang="en" data-key="history_en" class="input-field history-active-item" placeholder="Activities(English)"></li>'
    }else{
        historyActiveItem += '<li><input type="text" lang="en" data-key="history_en" class="input-field history-active-item hide" placeholder="Activities(English)"></li>'
    }

    //chinese check
    if(fnCheckHistoryLang('ch')){
        historyActiveItem += '<li><input type="text" lang="ch" data-key="history_cn" class="input-field history-active-item" placeholder="活动(汉语)"></li>'
    }else{
        historyActiveItem += '<li><input type="text" lang="ch" data-key="history_cn" class="input-field history-active-item hide" placeholder="活动(汉语)"></li>'
    }

    historyActiveItem+=    '                        </ul>' +
        '                        <div class="btn-box">' +
        '                            <button class="btn-white" type="button" onclick="fnRemoveHistoryActive(this)">삭제</button>' +
        '                            <button class="btn-black" type="button" onclick="fnAddHistoryActive(this)">추가</button>' +
        '                        </div>' +
        '                       </div>';


    //add year item
    historyActiveList.insertAdjacentHTML('beforeend',historyActiveItem);
};

/**********************************************************
 *  name        : fnRemoveHistoryActive
 *  description : remove history active item
 *  author      : minyeong kim
 ***********************************************************/
function fnRemoveHistoryActive(e){
    e.parentNode.parentNode.remove();
};


/**********************************************************
 *  name        : fnHistoryLang
 *  description : choose language and show history item
 *  author      : minyeong kim
 ***********************************************************/
function fnHistoryLang(e){

    var historyActiveItem = document.getElementsByClassName('history-active-item');

    for(var i=0;i<historyActiveItem.length;i++){
        if(e.lang == historyActiveItem[i].lang){
            historyActiveItem[i].classList.toggle('hide');
        }
    }

};

/**********************************************************
 *  name        : fnCheckHistoryLang
 *  description : check language when add history item
 *  author      : minyeong kim
 ***********************************************************/
function fnCheckHistoryLang(lang){
    var langCheck = document.getElementsByClassName('history-lang')[0].getElementsByTagName('input');
    var haveLang = false;
    for(var i=0;i<langCheck.length;i++){
        if(langCheck[i].lang == lang && langCheck[i].checked){
            haveLang = true;
        }
    }
    return haveLang;
};





/**********************************************************
 *  name        : fnAddAwardYear
 *  description : add award year item
 *  author      : minyeong kim
 ***********************************************************/
function fnAddAwardYear(){
    var awardList = document.getElementsByClassName('award-list')[0];
    var awardYearItem = '<div class="year-item">' +
        '                   <div class="year-row">' +
        '                       <input type="text" data-key="year" class="input-field" placeholder="ex)2019/연도를 입력하세요.">' +
        '                       <button class="btn-white" type="button" onclick="fnRemoveAwardYear(this)">삭제</button>' +
        '                   </div>' +
        '                   <div class="award-active-list">' +
        '                       <div class="active-item">' +
        '                           <ul class="active-list">' +
        '                               <li><input type="text" lang="ko" data-key="history_ko" class="input-field award-active-item requried" data-title="수상내역(한국어)" placeholder="수상내역(한국어)"></li>';

    //english check
    if(fnCheckAwardLang('en')){
        awardYearItem += '<li><input type="text" lang="en" data-key="history_en" class="input-field award-active-item" placeholder="Awards(English)"></li>'
    }else{
        awardYearItem += '<li><input type="text" lang="en" data-key="history_en" class="input-field award-active-item hide" placeholder="Awards(English)"></li>'
    }

    //chinese check
    if(fnCheckAwardLang('ch')){
        awardYearItem += '<li><input type="text" lang="ch" data-key="history_cn" class="input-field award-active-item" placeholder="获奖经历(汉语)"></li>'
    }else{
        awardYearItem += '<li><input type="text" lang="ch" data-key="history_cn" class="input-field award-active-item hide" placeholder="获奖经历(汉语)"></li>'
    }


    awardYearItem +='                   </ul>' +
        '                   <div class="btn-box">' +
        '                            <button class="btn-black" type="button" onclick="fnAddAwardActive(this)">추가</button>' +
        '                   </div>' +
        '               </div>' +
        '           </div>'+
        '        </div>';

    //add year item
    awardList.insertAdjacentHTML('beforeend',awardYearItem);
};


/**********************************************************
 *  name        : fnRemoveAwardYear
 *  description : remove award year item
 *  author      : minyeong kim
 ***********************************************************/
function fnRemoveAwardYear(e){
    e.parentNode.parentNode.remove();
};

/**********************************************************
 *  name        : fnAddAwardActive
 *  description : add award active item
 *  author      : minyeong kim
 ***********************************************************/
function fnAddAwardActive(e){
    var awardActiveList = e.parentNode.parentNode.parentNode;
    var awardActiveItem ='   <div class="active-item">' +
        '                       <ul class="active-list">' +
        '                           <li><input type="text" lang="ko" data-key="history_ko" class="input-field award-active-item required" data-title="수상내역(한국어)" placeholder="수상내역(한국어)"></li>';

    //english check
    if(fnCheckAwardLang('en')){
        awardActiveItem += '<li><input type="text" lang="en" data-key="history_en" class="input-field award-active-item" placeholder="Awards(English)"></li>';
    }else{
        awardActiveItem += '<li><input type="text" lang="en" data-key="history_en" class="input-field award-active-item hide" placeholder="Awards(English)"></li>';
    }

    //chinese check
    if(fnCheckAwardLang('ch')){
        awardActiveItem += '<li><input type="text" lang="ch" data-key="history_cn" class="input-field award-active-item" placeholder="获奖经历(汉语)"></li>';
    }else{
        awardActiveItem += '<li><input type="text" lang="ch" data-key="history_cn" class="input-field award-active-item hide" placeholder="获奖经历(汉语)"></li>';
    }

    awardActiveItem+=    '                        </ul>' +
        '                        <div class="btn-box">' +
        '                            <button class="btn-white" type="button" onclick="fnRemoveAwardActive(this)">삭제</button>' +
        '                            <button class="btn-black" type="button" onclick="fnAddAwardActive(this)">추가</button>' +
        '                        </div>' +
        '                       </div>';


    //add year item
    awardActiveList.insertAdjacentHTML('beforeend',awardActiveItem);
};


/**********************************************************
 *  name        : fnRemoveAwardActive
 *  description : remove award active item
 *  author      : minyeong kim
 ***********************************************************/
function fnRemoveAwardActive(e){
    e.parentNode.parentNode.remove();
};

/**********************************************************
 *  name        : fnAwardLang
 *  description : choose language and show award item
 *  author      : minyeong kim
 ***********************************************************/
function fnAwardLang(e){

    var awardActiveItem = document.getElementsByClassName('award-active-item');

    for(var i=0;i<awardActiveItem.length;i++){
        if(e.lang == awardActiveItem[i].lang){
            awardActiveItem[i].classList.toggle('hide');
        }
    }
};


/**********************************************************
 *  name        : fnCheckAwardLang
 *  description : check language when add award item
 *  author      : minyeong kim
 ***********************************************************/
function fnCheckAwardLang(lang){
    var langCheck = document.getElementsByClassName('award-lang')[0].getElementsByTagName('input');
    var haveLang = false;
    for(var i=0;i<langCheck.length;i++){
        if(langCheck[i].lang == lang && langCheck[i].checked){
            haveLang = true;
        }
    }
    return haveLang;
};


/**********************************************************
 *  name        : fnAddSociety
 *  description : add society item
 *  author      : minyeong kim
 ***********************************************************/
function fnAddSociety(){
    var societyList = document.getElementsByClassName('society-list')[0];
    var societyItem =' <div class="year-item">' +
        '                 <div class="year-row">' +
        '                     <input type="text" class="input-field" data-key="start_year" placeholder="가입연도">' +
        '                     <span class="waves">~</span>' +
        '                     <input type="text" class="input-field" data-key="end_year" placeholder="가입연도">' +
        '                 </div>' +
        '                 <div class="active-item">' +
        '                     <ul class="active-list">' +
        '                         <li><input type="text" lang="ko" data-key="association_ko" class="input-field society-active-item required" data-title="협회명(한국어)" placeholder="협회명(한국어)"></li>';

    //english check
    if(fnCheckSocietyLang('en')){
        societyItem += '<li><input type="text" lang="en" data-key="association_en" class="input-field society-active-item" placeholder="Name of Association(English)"></li>'
    }else{
        societyItem += '<li><input type="text" lang="en" data-key="association_en" class="input-field society-active-item hide" placeholder="Name of Association(English)"></li>'
    }

    //chinese check
    if(fnCheckSocietyLang('ch')){
        societyItem += '<li><input type="text" lang="ch" data-key="association_cn" class="input-field society-active-item" placeholder="请输入协会(汉语)"></li>'
    }else{
        societyItem += '<li><input type="text" lang="ch" data-key="association_cn" class="input-field society-active-item hide" placeholder="请输入协会(汉语)"></li>'
    }


    societyItem +='</ul>' +
        '            <div class="btn-box">' +
        '                <button class="btn-white" type="button" onclick="fnRemoveSociety(this)">삭제</button>' +
        '            </div>' +
        '        </div>' +
        '    </div>';

    //add year item
    societyList.insertAdjacentHTML('beforeend',societyItem);
};


/**********************************************************
 *  name        : fnRemoveSociety
 *  description : remove society item
 *  author      : minyeong kim
 ***********************************************************/
function fnRemoveSociety(e){
    e.parentNode.parentNode.parentNode.remove();
};

/**********************************************************
 *  name        : fnSocietyLang
 *  description : choose language and show society item
 *  author      : minyeong kim
 ***********************************************************/
function fnSocietyLang(e){

    var societyItem = document.getElementsByClassName('society-active-item');

    for(var i=0;i<societyItem.length;i++){
        if(e.lang == societyItem[i].lang){
            societyItem[i].classList.toggle('hide');
        }
    }
};


/**********************************************************
 *  name        : fnCheckAwardLang
 *  description : check language when add award item
 *  author      : minyeong kim
 ***********************************************************/
function fnCheckSocietyLang(lang){
    var langCheck = document.getElementsByClassName('society-lang')[0].getElementsByTagName('input');
    var haveLang = false;
    for(var i=0;i<langCheck.length;i++){
        if(langCheck[i].lang == lang && langCheck[i].checked){
            haveLang = true;
        }
    }
    return haveLang;
};


/**********************************************************
 *  name        : fnBrandNameLang
 *  description : choose language and show brand name text input
 *  author      : minyeong kim
 ***********************************************************/
function fnBrandNameLang(e){
    var brandName = document.getElementsByClassName('brand-name-list')[0].getElementsByClassName('input-field');

    for(var i=0; i< brandName.length;i++){
        if(e.lang == brandName[i].lang){
            brandName = brandName[i]
        }
    }

    brandName.classList.toggle('hide');
};

/**********************************************************
 *  name        : fnBrandTextLang
 *  description : choose language and show profile textarea
 *  author      : minyeong kim
 ***********************************************************/
function fnBrandTextLang(e){
    var brandText = document.getElementsByClassName('brand-text-list')[0].getElementsByTagName('textarea');

    for(var i=0; i< brandText.length;i++){
        if(e.lang == brandText[i].lang){
            brandText = brandText[i]
        }
    }
    brandText.classList.toggle('hide');
};


/**********************************************************
 *  name        : fnAddLookbookItemInit
 *  description : add lookbook image item
 *  author      : minyeong kim
 ***********************************************************/
function fnAddLookbookItemInit(e){

    // 업로드 된 이미지 파일
    var file = e.files[0];

    // 업로드 한 파일을 읽기 위한 fileReader 객체 생성
    var reader = new FileReader();

    // fnAddLookbookItem 메서드에 파일과 파일리더를 매개변수에 담아 호출
    fnAddLookbookItem(reader,file, e);
};

/**********************************************************
 *  name        : fnAddLookbookItem
 *  description : add lookbook image item
 *  author      : minyeong kim
 ***********************************************************/
function fnAddLookbookItem(reader, file, e){

    // 이미지를 추가할 위치
    var lookbookList = e.parentNode.parentNode.getElementsByClassName('lookbook-contents')[0];
    var lookbookItem = document.createElement('div');

    // 파일이 존재하면 스트링 데이터를 reader.result 속성에 담음
    if(file){
        reader.readAsDataURL(file);
    }


    // fileReader가 로드된 후
    reader.onload = function () {

        lookbookItem.classList.add('lookbook-image');
        // lookbookItem.setAttribute('onClick','test(this)');

        var image = document.createElement('img');
        image.src = reader.result;

        var input = document.createElement('input');
        input.setAttribute('type','file');
        input.setAttribute('name',"images["+e.title+"][]");
        input.files = e.files; //problem
        input.classList.add('hide');

        var btnRemove = document.createElement('button');
        btnRemove.setAttribute('type','button');
        btnRemove.classList.add('btn-remove');
        btnRemove.setAttribute('onClick','fnRemoveLookbookItem(this)');

        // make
        lookbookItem.appendChild(image);
        lookbookItem.appendChild(input);
        lookbookItem.appendChild(btnRemove);

        //add lookbook item
        lookbookList.appendChild(lookbookItem);
    };
};

/**********************************************************
 *  name        : fnRemoveLookbookItem
 *  description : add lookbook image item
 *  author      : minyeong kim
 ***********************************************************/
function fnRemoveLookbookItem(e){
    e.parentNode.remove();
};

/**********************************************************
 *  name        : fnAddLookbook
 *  description : add lookbook
 *  author      : minyeong kim
 ***********************************************************/
function fnAddLookbook(){
    var lookbookList = document.getElementsByClassName('lookbook-list')[0];
    var item = document.getElementsByClassName('lookbook-item');
    var lookbookItem = '<div class="lookbook-item">' +
        '                  <div class="lookbook-name">' +
        '                      <input type="text"  placeholder="시즌명(EX/2019)" name="season'+item.length+'" class="input-field lookbook-season yearpicker" readonly>' +
        '                      <select class="select"  name="season_type'+item.length+'">' +
        '                          <option selected disabled>전체</option>' +
        '                          <option value="S/S">SS</option>' +
        '                          <option value="F/W">FW</option>' +
        '                      </select>' +
        '                      <button class="btn-white" type="button" onclick="fnRemoveLookbook(this)">삭제</button>' +
        '                  </div>' +
        '                  <div class="lookbook-contents-wrap">' +
        '                      <div class="lookbook-contents">' +
        '                      </div>' +
        '                      <label class="upload-image">' +
        '                          <input type="file" title="'+item.length+'" accept="image/jpeg, image/jpg, image/png" onchange="fnAddLookbookItemInit(this)">' +
        '                          <span class="shape">클릭하여 사진을 추가하세요</span>' +
        '                      </label>' +
        '                  </div>' +
        '              </div>';

    //add lookbook item
    lookbookList.insertAdjacentHTML('beforeend',lookbookItem);
    $( ".yearpicker" ).yearpicker("refresh");
};


/**********************************************************
 *  name        : fnRemoveLookbook
 *  description : remove lookbook
 *  author      : minyeong kim
 ***********************************************************/
function fnRemoveLookbook(e){
    e.parentNode.parentNode.remove();
};



/**********************************************************
 *  name        : fnAddNews
 *  description : add news
 *  author      : minyeong kim
 ***********************************************************/
function fnAddNews(){
    var NewsList = document.getElementsByClassName('news-list')[0];
    var newsItem = '<div class="card">' +
        '              <div class="card-image">' +
        '                  <img src="../images/dummy/img-dummy-01.png" alt="">' +
        '              </div>' +
        '              <div class="card-contents">' +
        '                  <p class="card-title">' +
        '                      천고에 이상의 듣기만 이성은 밝은 그들의 따뜻한 피다. 주며, 살았으며, 얼마나 얼마나 얼마나 거선의 위하여서 이성은 밝은 그들의 따뜻한.' +
        '                  </p>' +
        '              </div>' +
        '              <div class="card-footer">' +
        '                  <p class="card-name">프레시안</p>' +
        '                  <p class="card-date">2019.08.22</p>' +
        '              </div>' +
        '              <button class="btn-remove" type="button" onclick="fnRemoveNews(this)"></button>' +
        '          </div>';

    //add lookbook item
    NewsList.insertAdjacentHTML('beforeend',newsItem);
};

/**********************************************************
 *  name        : fnRemoveNews
 *  description : remove News
 *  author      : minyeong kim
 ***********************************************************/
function fnRemoveNews(e){
    e.parentNode.remove();
};

/***********************************************************
 *  name        : fnRemoveNews
 *  description : before portfolio submit
 ***********************************************************/
var fn_only_number = function(e){
    if(gn_getNumberOnly(e.value) ==''){
        e.value = gn_getNumberOnly(e.value);
        e.focus();
    }
};

/***********************************************************
 *  name        : fnRemoveNews
 *  description : before portfolio submit
 ***********************************************************/

var fn_portfolio_submit = function(f){
    // 히스토리
    gn_make_input_json('history_list' ,'input' , 'history_array');
    // 수상내역
    gn_make_input_json('award_list' ,'input' , 'awards_array');
    // 협회
    gn_make_input_json('society_list' ,'input' , 'society_array');
    // 시즌 카운트
    document.getElementById('season_count').value =  document.getElementsByClassName('lookbook-season').length;

    return gn_validation(f);

};
