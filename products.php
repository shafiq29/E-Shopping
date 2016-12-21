<!DOCTYPE html>
<html>
	<head>
		<title>Products</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="structure/design.css">
		<link rel="stylesheet" type="text/css" href="structure/prod.css">
		<link rel="shortcut icon" type="image/x-icon" href="resimage/shopping.png" />
		<script type="text/javascript" src="jsfile/update.js"></script>
		<script type="text/javascript" src="jsfile/rating.js"></script>
		<script type="text/javascript">
		function showDetails(dt){
			//alert(dt);
			post_data = { 'id':dt};
				$.post('detailer.php', post_data, function(data) {
					$('.shower').html(data);
				});
			 $(".mytr").mouseover(function(){
             $(this).css("background-color", "#eeff00");
             $(this).css('cursor', 'pointer');
        });
			  $(".mytr").mouseout(function(){
             $(this).css("background-color", "");
        });
			  $.post( 
             "checkrate.php",
             { idforp: dt },
             function(data) {
                $('#stage').html(data);
             }

          );
		}
		$(document).ready(function(){
			//alert('mama');
				$('#tt').focus();
    		$("#tt").keyup(function(){
        		var imessage = $("#tt").val();
        		//alert(imessage);
				post_data = { 'message':imessage};
				$.post('search.php', post_data, function(data) {
					$('.loader').html(data);
				});
    		}); 
    		$("#tt").keypress(function(){
        		var imessage = $("#tt").val();
        		//alert(imessage);
				post_data = { 'message':imessage};
				$.post('search.php', post_data, function(data) {
					$('.loader').html(data);
				});
    		}); 

		});
		</script>
	</head>
	<body>
	
	<div id="headerme"><br>
		
		<p align="center"> Products</p>
		
	</div>
	<div id="logolink">
		<a href="index.php"  class="zoom"><img src="pic/home_page.png" height="40" height="40" class="view"></a>
		</div>
	<div class="cont"><br>
		
		<div class="holding"><br>
			<p>Search for new arrived products...</p>

			<p>Registered users will also be able to rate products acording to there choices. </p>
			<p class ="call"><strong>Search By Product Name:</strong></p>
		<input type="text" id="tt" name="tt" placeholder="Type here..."/>
			</br>
		<p class ="call"> </p>
		<p class ="call"> Result...</p>
		<div class ="loader">
		

		</div>
		<div id ="stage">
		

		</div>
		<div class ="shower">
		

		</div>
		
		</div><br><br>
	</div>
	<div class="footer">
	<p>This site is protected by copyright law. Copyright &copy; Shafiqul Islam 2014</p>
</div>
	
	</body>


</html>
