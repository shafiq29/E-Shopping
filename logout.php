<?php
	session_start();
	$u=$_SESSION['user'];
	include("connection.php");
	$query =mysql_query("UPDATE data_stda SET state=0 WHERE user='$u' ",$con);
	mysql_query("UPDATE data_stda SET cartlist='none' WHERE user='$u'",$con);
	unset($_SESSION['user']);
	header("Location: index.php");
?>