<?php
	session_start();
	$u=$_SESSION['admin'];
	include("connection.php");
	$query =mysql_query("UPDATE data_stda SET state=0 WHERE user='$u' ",$con);
	//mysql_query("UPDATE data_stda SET cartlist='none' WHERE user='$u'",$con);
	unset($_SESSION['admin']);
	header("Location: admin_login.php");
?>