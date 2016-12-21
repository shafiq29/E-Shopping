<?php
session_start();
if(!isset($_SESSION['admin'])){
header("Location: admin_login.php");

}

	$u=$_SESSION['admin'];
	$p=$_SESSION['id'];
	include("connection.php");
	$query =mysql_query("UPDATE data_stda SET state=1 WHERE user='$u' ",$con);
	$im=mysql_query("SELECT * FROM data_stda WHERE(user='$u' AND pass = '$p')",$con);
	$show=mysql_fetch_array($im);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Logged in as Admin</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="structure/design.css">
		<link rel="stylesheet" type="text/css" href="structure/admin.css">
		<link rel="stylesheet" type="text/css" href="structure/prod.css">
		<link rel="shortcut icon" type="image/x-icon" href="resimage/shopping.png" />
		<script type="text/javascript" src="jsfile/update.js"></script>
		<script type="text/javascript" src="jsfile/rating.js"></script>
		<script type="text/javascript" src="jsfile/admin_handle.js"></script>
		<script type="text/javascript">

			$(document).ready(function() {
				$('.update_product').click(function(e){
					value='up_prod';
					mes={'name':value};
					$.post('admin_function.php', mes, function(data) {
	 					$('#task').html(data);
	 				});
				});
				$('.reset_product_tab').click(function(e){
					var r=confirm("Are you sure? This will clear all products!");
					if (r==true){
						//alert('Reconfirm you want to reset products...!');
  						value='reset_tab';
					mes={'name':value};
					$.post('admin_function.php', mes, function(data) {
	 					$('#task').html(data);
	 				});
  					}else{
  							//x="";
  					}
					
				});
				$('.del_part').click(function(e){
					value='del_part';
					mes={'name':value};
					$.post('admin_function.php', mes, function(data) {
	 					$('#task').html(data);
	 				});
				});
				$('.who_ordered').click(function(e){
					value='who_ordered';
					mes={'name':value};
					$.post('admin_function.php', mes, function(data) {
	 					$('#task').html(data);
	 				});
				});
				$('.del_discuss').click(function(e){
					value='del_discuss';
					mes={'name':value};
					$.post('admin_function.php', mes, function(data) {
	 					$('#task').html(data);
	 				});
				});
			});
		
		</script>
	</head>
	<body>
	
	<div id="headerme"><br>
		
		<p align="center"> Logged in as Admin</p>
		
	</div>
	<div id="logolink">
		<a href="index.php"  class="zoom"><img src="pic/home_page.png" height="40" height="40" class="view"></a>
		<a href="signout_admin.php"  ><img src="resimage/out.png" height="40" height="40" class="view" title="Sign out"></a>
	</div>
	<div class="adminback" style="background-size:100%;"><br>
		
		<div class="holding"><br>
			<ul>
				<li>
					<a class="update_product" href="#task">Add new products</a>
					
				</li>
				
				<li>
					
					<a class="del_part" href="#task">View specific product</a>
				</li>
				<li>
					
					<a class="who_ordered" href="#task">View order list</a>
				</li>
				<li>
					
					<a class="del_discuss" href="#task">Delete users discussions</a>
				</li>
			</ul>
			<div id="task"><br>
			
		
			</div>
		
		</div>
		<br>
		<br>
		<br>
	</div>
	
	</body>


</html>
