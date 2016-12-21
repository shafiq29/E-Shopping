var step=1;
function slideIt(){
	document.images.swap.src=eval("image"+step+".src");
	
	if(step<5){
		step++;
	}
	else{
		step=1;
	}
	setTimeout(slideIt,5000);
	
	
	
}

