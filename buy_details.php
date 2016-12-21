<?php
	$dat="";
	$nn=$_POST['id'];
	include("connection.php");

	$dat=mysql_query("SELECT * FROM products WHERE pid LIKE '%$nn%'");

	$rater="<img src='resimage/like.png' class='one' hight='20' width='20'></img>
			<img src='resimage/like.png' class='two' hight='20' width='20'></img>
			<img src='resimage/like.png' class='thr' hight='20' width='20'></img>
			<img src='resimage/like.png' class='fou' hight='20' width='20'></img>
			<img src='resimage/like.png' class='fiv' hight='20' width='20'></img>";
	$cart="<img src='resimage/cart_add.png' class='add_cart' hight='30' width='30'></img>";
	$info="<div class='inform'>";
	if(mysql_num_rows($dat)>0){
		while($row=mysql_fetch_array($dat)){
			$info=$info ."<table class='noline'> <tr><td><strong>Showing details for: </strong></td><td>".$row['pname']."</td></tr>";
			$info=$info ."<tr><td><strong>Price: </strong></td><td>".$row['pprice']." BDT"."</td></tr>";
			$info=$info ."<tr><td><strong>Quantity: </strong></td><td>".$row['pquan']."</td></tr></table>";
			$info=$info .$row['pdes']."<div id='stage'></div><br>Rate?<button onclick='getUser(".$nn.")'>".$rater."</button></div>";
			$info=$info ."<br><button onclick='setToCart(".$nn.")' class='add_cart'>".$cart." <strong> Add to cart?</strong></button></div>"; 
		}
	 
	}
	echo $info;


?>
<!DOCTYPE html>
<html>
	<head>
		<title>Products</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="structure/prod.css">
		<script type="text/javascript" src="jsfile/update.js"></script>
	</head>	
	<body>
	</body>
</html>
