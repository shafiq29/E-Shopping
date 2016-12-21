$(setInterval(function(){
	return de();
},1000));

function de(){
	$('.showon').load('onlinenow.php');
	$('.showon').scrollTop($('#tr')[0].scrollHeight);
}



