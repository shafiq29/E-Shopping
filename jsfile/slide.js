var step=1;
function slideIt(){
	document.images.swap.src=eval("image"+step+".src");
	if(step<11){
		step++;
	}
	else{
		step=1;
	}
	setTimeout(slideIt,5000);
	setTimeout(slideIt2,5000);
	setTimeout(slideIt3,5000);
	setTimeout(slideIt4,5000);
}
	
function slideIt2(){
	
	document.images.gap.src=eval("image"+step+".src");
	if(step<11){
		step++;
	}
	else{
		step=1;
	}
	
	
}
function slideIt3(){
	
	document.images.tap.src=eval("image"+step+".src");
	if(step<11){
		step++;
	}
	else{
		step=1;
	}
	
}
function slideIt4(){
	
	document.images.lap.src=eval("image"+step+".src");
	if(step<11){
		step++;
	}
	else{
		step=1;
	}
	
	
}