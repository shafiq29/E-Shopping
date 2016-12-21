 <?php
	session_start();
	$u=$_SESSION['user'];
	$id=$_SESSION['id'];
	include("connection.php");
	$name= $_FILES['myfile']['name'];
	$type= $_FILES['myfile']['type'];
	$size= $_FILES['myfile']['size'];
	$temp= $_FILES['myfile']['tmp_name'];
	$error= $_FILES['myfile']['error'];

	if($error > 0){
		die("Error ocurred!");
	}else{
		move_uploaded_file($temp , "uploaded/" . $name);
		echo "File uploaded successfully...";
	}
	mysql_query("UPDATE data_stda SET image='$name' WHERE user='$u' AND pass = '$id'",$con);
	mysql_close($con);
	header('location:support.php');


?>