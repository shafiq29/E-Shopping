<?php
	session_start();
	$u=$_SESSION['user'];
	//echo $u;
	$checked=$_POST['name'];
	include("connection.php");


	$dat=mysql_query("SELECT * FROM data_stda where user='$u'");
	$row=mysql_fetch_array($dat);
	$sat=mysql_query("SELECT * FROM products where pid='$checked'");
	$row2=mysql_fetch_array($sat);
	//echo $row['checked'];
	if($row['checked']=="no"){
		$test=mysql_query("UPDATE data_stda SET checked='$checked' WHERE user='$u'",$con);
		if($test){
			//echo "new";
			mysql_query("UPDATE products SET waitlist='$u' WHERE pid='$checked'");
		}
	}else{
		$new=$row['checked'].",".$checked;
		$newwait=$row2['waitlist'].",".$u;
		$test2=mysql_query("UPDATE data_stda SET checked='$new' WHERE user='$u'",$con);
		if($test2){
			mysql_query("UPDATE products SET waitlist='$newwait' WHERE pid='$checked'");
			//echo "updated";
		}
	
	}
	echo "Product number ".$checked." has been ordered";
	mysql_close();

?>