$(document).ready(function(){
	var scrolling=0;
	$(setInterval(function(){
		return ref();
	},500));

	function ref(){
		if(scrolling ==0){
			$('.message_box').load('load_mes.php');
			$('.message_box').scrollTop($('.message_box')[0].scrollHeight);
		}
		else{
			return;
		}
	}

	$(".message_box").mouseover(function(){
		scrolling=1;
	});
	$(".message_box").mouseout(function(){
		scrolling=0;
	});
});