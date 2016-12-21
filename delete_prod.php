<?php
	//This helps admin to delete specific product from table...
	include("connection.php");
	//Receives the id from javascript...
	$pdid=$_POST['idforp'];
	//Query to delete the row with pdid...
	$take=mysql_query("DELETE FROM products where pid=$pdid");
	mysql_close();
	echo "Product info with id $pdid deleted...";
?>