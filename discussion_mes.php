<?php
	session_start();
	$n=$_SESSION['user'];
	include("connection.php");
	$qu=mysql_query("SELECT message FROM users",$con);
	//con....end
	$lol="";
	if(!empty($_POST['message'])&&isset($_SESSION['user'])){
		$temp=$_POST['message'];
		echo $temp;
		$fin=$temp;
		date_default_timezone_set('Asia/Dhaka');
		$dt=date('[H : i : s]');
		$me="<strong>".$dt." ".$n." : </strong>".$fin."</br>";
		$lo=stripslashes($me);
		//$query =mysql_query("UPDATE users SET mes='$lol' WHERE id='1' ",$con);
		$query=mysql_query("INSERT INTO message (mes) VALUES ('$me')");
		echo "$me";
	}
?>
