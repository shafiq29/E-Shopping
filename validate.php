<?php
  class  Validator{
    function checkLogin($u,$p){
      include("connection.php");
      //echo $u." ".$p;
      $enc=md5($p);
  
      $check_exist="select user from data_stda where user='$u' && pass='$enc'";
      if(mysql_num_rows(mysql_query($check_exist,$con))>0){
        session_start();
        $_SESSION['user']=$u;
        $_SESSION['id']=$enc;
        header("Location: support.php");
      }
      else{
       	echo "Incorrect username or password...";
        //echo $enc;
       }
    mysql_close();

    }
  }
?>