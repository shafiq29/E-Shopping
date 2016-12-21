<?php
	session_start();
	$n=$_SESSION['user'];
	include("connection.php");
	$qu=mysql_query("SELECT * FROM data_stda WHERE state='1'",$con);

	//con....end
	$onl="";
	if(!isset($_POST['tt'])){
		while($res=mysql_fetch_array($qu)){
		   $im="<img src=uploaded/".$res['image']." height=30 width=30> ";
			//$im="";
		   $un= $res['user'];
			if($res['user']!=$n){
				$onl=$onl.$im.$un."</br>";
			}
		}
	}
	echo $onl;
?>