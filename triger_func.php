<?php
$action = $_POST['name'];
	
    switch($action) {
        case 'one' : one();
        break;
        case 'buy_prod' : showProducts();
        break;
        case 'view_cart' : showCart();
        break;
        // ...etc...
    }
	function one(){
echo "

<p>Choose a picture to upload as profile picture and hit upload (preferred image size is websmall...)</p>
			<form action = 'uploader.php' method = 'POST' enctype='multipart/form-data'>
                <input type = 'file' name ='myfile'>
				<input type = 'submit' name = 'submit' value ='Upload'>
			</form>".'<br><a href="support.php">Back to home?</a>';
	}
	function showProducts(){
		include("connection.php");
		
		$dat=mysql_query("SELECT * FROM products ORDER BY pprice");
		$info=""."<table class='nicetable' border='2'>"."<th>"."SL No."."</th>"."<th>"."Product Name"."</th>"."<th>"."Price"."</th>"."<th>"	."Quantity"."</th>"."<th>"	."Image"."</th>"."<th>"	."Details"."</th>.";
		if(mysql_num_rows($dat)>0){
		while($row=mysql_fetch_array($dat)){
		$info=$info. "<tr>";
		$info=$info."<td >"	 .$row['pid']."</td>";
		$info=$info."<td>"	 .$row['pname']."</td>";
		$info=$info."<td>"	 .$row['pprice']."</td>";
		$info=$info."<td>"	 .$row['pquan']."</td>";
		$info=$info."<td><img src='uploaded/".$row['pimg']."' height=100 width=100/></td>";
		$info=$info."<td onclick='showDetails(".$row['pid'].")' class='mytr'>"	."<a class='detail'>View Details?</a>"."</td>";
		//$info=$info."<td onclick='getUser(".$row['pid'].")' class='userit'>".$rater."</td>";
		$info=$info. "</tr>";
		}
		$info=$info."</table><br>";
		}
		echo $info;
	}
//echo "string";
	function showCart(){
		$info=""."<table class='nicetable' border='2'>"."<th>"."SL No."."</th>"."<th>"."Product Name"."</th>"."<th>"."Price"."</th>"."<th>"	."Quantity"."</th>"."<th>"	."Image"."</th>"."<th>"	."Details"."</th>.";
		session_start();
	$u=$_SESSION['user'];
		include("connection.php");
	
		$dat=mysql_query("SELECT * FROM data_stda where user='$u'");
		$cartlist=mysql_fetch_array($dat);
		$cartstring= $cartlist['cartlist'];
		$checkedout= $cartlist['checked'];
		$query=mysql_query("SELECT * FROM products");
		while ($res=mysql_fetch_array($query)) {
			
			$a1=explode(",",$cartstring);
			$b2=explode(",",$checkedout);
		

		


			if(in_array($res['pid'], $a1) && !in_array($res['pid'], $b2)){
				//$test="true";
				$info=$info. "<tr>";
				$info=$info."<td >"	 .$res['pid']."</td>";
				$info=$info."<td>"	 .$res['pname']."</td>";
				$info=$info."<td>"	 .$res['pprice']."</td>";
				$info=$info."<td>"	 .$res['pquan']."</td>";
				$info=$info."<td><img src='uploaded/".$res['pimg']."' height=100 width=100/></td>";
				$info=$info."<td onclick='checkOut(".$res['pid'].")' class='order'>"	."<a >Check Out?</a>"."</td>";
				//$info=$info."<td onclick='getUser(".$row['pid'].")' class='userit'>".$rater."</td>";
				$info=$info. "</tr>";
			}

			$test="true";
		}
		$info=$info."</table><br>";
		
		echo $info;
		
		

	}


?>
