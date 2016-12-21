<?php
	include("validate.php");
	$uname="";
	$pass="";
	if(!empty($_POST['un'])&&!empty($_POST['pa'])){
		$uname=$_POST['un'];
		$pass=$_POST['pa'];
		$checker= new Validator;
		$checker->checkLogin($uname,$pass);
	}

?>