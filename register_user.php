<?php
if(isset($_POST['reg'])){
	if(!empty($_POST['un']) && !empty($_POST['pa']) ){
		$uname=$_POST['un'];
		$pass=md5($_POST['pa']);
		$email=$_POST['em'];
		$adr=($_POST['ad']);
		$phone=$_POST['po'];
		
		include("connection.php");
		
		$ins=mysql_query("insert into data_stda (user,pass,email,adr,phone,image) values('$uname','$pass','$email','$adr','$phone','blank.jpg')");
		if($ins){
			echo "User registered";
			header("Location: info.php#pp");
		}
		mysql_close();

	}
}



?>
