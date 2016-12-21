<?php
session_start();
if(!isset($_SESSION['user'])){
header("Location: info.php#pp");

}



	$u=$_SESSION['user'];
	$p=$_SESSION['id'];
	include("connection.php");
	$query =mysql_query("UPDATE data_stda SET state=1 WHERE user='$u' ",$con);
	$im=mysql_query("SELECT * FROM data_stda WHERE(user='$u' AND pass = '$p')",$con);
	$show=mysql_fetch_array($im);
	

	//mysql_close($con);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Customer Support</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="structure/design.css">
		<link rel="stylesheet" type="text/css" href="structure/uninter.css">
		<link rel="stylesheet" type="text/css" href="structure/customer_sup.css">

		<link rel="shortcut icon" type="image/x-icon" href="resimage/shopping.png" />
		<script type="text/javascript" src="jsfile/update.js"></script>
		<script type="text/javascript" src="jsfile/fetch_message.js"></script>
		<script type="text/javascript" src="jsfile/online_who.js"></script>
		<script type="text/javascript" src="jsfile/rating.js"></script>
		<script type="text/javascript">
		function showDetails(dt){
			//alert(dt);
			post_data = { 'id':dt};
				$.post('buy_details.php', post_data, function(data) {
					$('#provide').html(data);
				});
			 	$(".mytr").click(function(){
             		$(this).css("background-color", "#eeff00");
             		$(this).css('cursor', 'pointer');
        		});
			  	$(".mytr").click(function(){
            		$(this).css("background-color", "");
        		});
			  	$.post("checkrate.php",{ idforp: dt },function(data) {
               		$('#stage').html(data);
             	});
		}
		function seToCart(ct){
			mes = { 'name':ct};
			$.post('cart_add.php', mes, function(data) {
					//$('#provide').html(data);
				});
		}
		$(document).ready(function() {
			
			$("#shout_message").keypress(function(evt) {
				if(evt.which == 13) {
				var imessage = $('#shout_message').val();
				post_data = { 'message':imessage};
			 	//send data to "mes.php" using jQuery $.post()
				$.post('discussion_mes.php', post_data, function(data) {
					var scrolling=0;
					$(".message_box").mouseover(function(){
						scrolling=1;
					});
					$(".message_box").mouseout(function(){
						scrolling=0;
					});
						
	
					//keep scrolled to bottom of chat!
					if(scrolling==0){
					var scrolltoh = $('.message_box')[0].scrollHeight;
					$('.message_box').scrollTop(scrolltoh);
					}
					
					//reset value of message box
					$('#shout_message').val('');
					
				}).fail(function(err) { 
				
				//alert HTTP server error
				alert(err.statusText); 
				});
			}
		});
					
					

			$('.toggle_chat').slideToggle();
			$(".shut div").attr('class', 'open_btn');
	
	//toggle hide/show shout box
	$(".shut").click(function (e) {
		//get CSS display state of .toggle_chat element
		var toggleState = $('.toggle_chat').css('display');
		
		//toggle show/hide chat box
		$('.toggle_chat').slideToggle();
		
		//use toggleState var to change close/open icon image
		if(toggleState == 'block')
		{
			$(".shut div").attr('class', 'open_btn');
		}else{
			$(".shut div").attr('class', 'close_btn');
		}
		
		 
	});
	 $('.user_pro').click(function(e){

value='one';
mes={'name':value};

	 	$.post('triger_func.php', mes, function(data) {
	 		$('#provide').html(data);

	 	});
		 	
		 });
	 $('.buy_prod').click(function(e){

		value='buy_prod';
		mes={'name':value};

	 	$.post('triger_func.php', mes, function(data) {
	 		$('#provide').html(data);

	 	});
		 	
		 });
	 $('.view_cart').click(function(e){

		value='view_cart';
		mes={'name':value};

	 	$.post('triger_func.php', mes, function(data) {
	 		$('#provide').html(data);

	 	});
		 	
		 });
	
});
</script>
	</head>
	<body>
	
	<div id="headerme"><br>
		
		<p align="center"> How Can We Help ?</p>
		
	</div>
	<div id="logolink">
		<a href="index.php"  class="zoom"><img src="pic/home_page.png" height="40" height="40" class="view" title="Homepage"></a>
		<a href="#"  class="zoom" ><img src="resimage/profile_user.png" class='user_pro' height="40" height="40" class="view" title="Profile"></a>
		<a href="#"  ><img src="resimage/buy.png" height="40" height="40" class="buy_prod" title="Buy Product"></a>
		<a href="#"  ><img src="resimage/cart_view.png" height="40" height="40" class="view_cart" title="View Cart"></a>
		<a href="logout.php"  ><img src="resimage/out.png" height="40" height="40" class="view" title="Sign out"></a>

		
		</div>
	<div id="holder"><br>
		
		<div id="provide"><br>

			<img src="uploaded/<?php echo $show['image'];?>" height=200 width=250/><br>
			<b>Welcome, <?php echo $_SESSION['user'];?> !<b>

		</div>
	</div>
	

<div class="shout_box">
	
						<div class="shut">Discussion... <div class="close_btn">&nbsp;</div></div>

							<div class="toggle_chat">



								<div class="message_box">
								</div>
								<div class="user_info">
									<input name="shout_message" id="shout_message" type="text" placeholder="Type Message Hit Enter" maxlength="100" /> 
								</div>
							</div>
					</div>
					
					
					<div class="onl">
							<div class="but">Online </div>
									<div class="toggle_chat">
											<div class="showon">
												</div>
											
									</div>
							</div>

						</div>	
					
					
				</div>



	</body>


</html>
