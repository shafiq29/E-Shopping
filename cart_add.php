<?php
	session_start();
	$u=$_SESSION['user'];
	$cart=$_POST['name'];
	include("connection.php");

	$dat=mysql_query("SELECT * FROM data_stda where user='$u'");
	$row=mysql_fetch_array($dat);
	if($row['cartlist']=="none"){
		mysql_query("UPDATE data_stda SET cartlist='$cart' WHERE user='$u'",$con);
	}else{
		$new=$row['cartlist'].",".$cart;
		mysql_query("UPDATE data_stda SET cartlist='$new' WHERE user='$u'",$con);
	}
	mysql_close();
	echo "Added to cart. Please check your cart...Go to view cart...";

?>