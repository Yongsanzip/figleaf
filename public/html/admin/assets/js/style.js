/***************************************************
 *  function Name : LNB Animation
 *  description   : LNB show or hide
 ***************************************************/
document.addEventListener("DOMContentLoaded", function () {

	var lnb = document.getElementById('lnb');
	for(var i=0;i<lnb.children.length;i++){
		lnb.children[i].addEventListener('click',function(){
			//펼쳐진 자식 LNB가 있는지 확인
			var checkList = document.getElementsByClassName('show');
			//펼쳐진 자식LNB를 닫음
			if(checkList != undefined){
				for(var i=0;i<checkList.length;i++){
					checkList[i].classList.remove('show');
				}
			}
			// 클릭한 메뉴의 자식LNB 펼침
			this.getElementsByTagName('ul')[0].classList.add('show');
		});
	}
});

/***************************************************
 *  function Name : dropdown data
 *  description   : dropdown data show or hide
 ***************************************************/
document.addEventListener("DOMContentLoaded", function () {
	var dropdown = document.getElementsByClassName('dropdown-group');

	if(dropdown != undefined){
		var dropHeader = document.getElementsByClassName('dropdown-header');
		var dropContents = document.getElementsByClassName('dropdown-contents');

		for(var i=0;i<dropHeader.length;i++){
			//드롭다운 메뉴에 index 값 부여
			dropHeader[i].setAttribute('data-index',i);
			//드롭다운 메뉴를 클릭했을 경우
			dropHeader[i].addEventListener('click',function(){
				//변수에 메뉴의 index 값 저장
				var target = this.getAttribute('data-index');
				//드롭다운 메뉴가 펼쳐져 있으면
				if(dropContents[target].classList.contains('show-contents')){
					//드롭다운 메뉴 닫음
					dropContents[target].classList.remove('show-contents');
				}else{
					//펼쳐져 있지 않을 경우 드롭다운 오픈 
					dropContents[target].classList.add('show-contents');
				}
			});
		}
	}
});






/***************************************************
 *  function Name : 
 *  description   : 
 ***************************************************/
document.addEventListener("DOMContentLoaded", function () {

});