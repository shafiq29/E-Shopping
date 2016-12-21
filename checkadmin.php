<?php
	$u="";
	$p="";
	if(isset($_POST['log'])){
		if(!empty($_POST['user']) && !empty($_POST['pass']) ){
			$u=$_POST['user'];
			$p=$_POST['pass'];
		}
	}
	
    include("connection.php");
      //echo $u." ".$p;
      $enc=md5($p);
  
      $check_exist="select user from data_stda where user='$u' && pass='$enc'";
      if(mysql_num_rows(mysql_query($check_exist,$con))>0){
        session_start();
        $_SESSION['admin']=$u;
        $_SESSION['id']=$enc;
        header("Location: admin_access.php");
      }
      else{
       	echo "Incorrect username or password...";
        //echo $enc;
       }
    mysql_close();

    
  
?>