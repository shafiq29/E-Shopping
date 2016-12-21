<?php
//admin processor...
if(isset($_POST['sav'])){
	if(!empty($_POST['prod_name']) && !empty($_POST['prod_price']) && !empty($_POST['prod_quan']) && !empty($_POST['prod_det']) ){
		$pname=$_POST['prod_name'];
		$pprice=$_POST['prod_price'];
		$pquan=$_POST['prod_quan'];
		$pdet=$_POST['prod_det'];
		$pimage=$_FILES['prod_image']['name'];
		$ext=explode(".",$_FILES['prod_image']['name']);
		$temp=$_FILES['prod_image']['tmp_name'];
		upProduct($pname,$pprice,$pquan,$pdet,$pimage,$ext,$temp);
	}

}




	function upProduct($pname,$pprice,$pquan,$pdet,$pimage,$ext,$temp){
		include("connection.php");
		$select_table=mysql_query("SELECT * from products");

		$prod_num=mysql_num_rows($select_table);
		
		$new_prod_image_name="product_image"."$prod_num.".$ext[1];
		echo "$pname,$pprice,$pquan,$pdet,$pimage  	";
		$insert=mysql_query("INSERT INTO products(pname,pprice,pquan,pdes,pimg) values('$pname','$pprice','$pquan','$pdet','$new_prod_image_name')");
		move_uploaded_file($temp , "uploaded/".$new_prod_image_name);
	}

?>