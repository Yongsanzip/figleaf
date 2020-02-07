/***************************************************
 *  function Name : portfolio slide
 *  description   : click button and move slide
 ***************************************************/
document.addEventListener("DOMContentLoaded", function () {
	var slide = document.getElementsByClassName('slide-wrap');
	var slideBtnLeft = document.getElementsByClassName('btn-slide-left');
	var slideBtnRight = document.getElementsByClassName('btn-slide-right')

	for(var i=0;i<slide.length;i++){
		slide[i].style.right = '0%';
		slideBtnLeft[i].setAttribute('data-index',i);
		slideBtnRight[i].setAttribute('data-index',i);
	}
	
	for(var i=0;i<slide.length;i++){
		var right;
		slideBtnLeft[i].addEventListener('click',function(){
			var x = this.getAttribute('data-index');
			right = parseInt(slide[x].style.right.replace(/[^0-9]/g, ""));
			if(right <= 0){
				slide[x].style.right = "0%";
			}else{
				slide[x].style.right = right-100+"%";
			}
		});
		slideBtnRight[i].addEventListener('click',function(){
			var x = this.getAttribute('data-index');
			var maxRight = parseInt((slide[x].getElementsByClassName('slide-item').length - 1) / 4) * 100;
			right = parseInt(slide[x].style.right.replace(/[^0-9]/g, ""));
			if(right >= maxRight){
				slide[x].style.right = maxRight+"%";
			}else{
				slide[x].style.right = right + 100 + "%";
			}
		});
		
	}

	// hide slide button when slide item less than 4 
	for(var i=0;i<slide.length;i++){
		if(slide[i].getElementsByClassName('slide-item').length<=4){
			slideBtnLeft[i].style.display="none";
			slideBtnRight[i].style.display="none";
		}

	}
});
