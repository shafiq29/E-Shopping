function backing(){
$('html, body').animate({ scrollTop: 0 }, 'slow');
}


function moveit(tags){
$('html, body').animate({scrollTop:$(tags).position().top}, 'slow');
}



