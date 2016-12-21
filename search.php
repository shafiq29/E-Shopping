<?php
$dat="";
$nn=$_POST['message'];
include("connection.php");


$dat=mysql_query("SELECT * FROM products WHERE pname LIKE '%$nn%'");

$info=""."<table class='nicetable' border='2'>"."<th>"."SL No."."</th>"."<th>"."Product Name"."</th>"."<th>"."Price"."</th>"."<th>"	."Quantity"."</th>"."<th>"	."Image"."</th>"."<th>"	."Details"."</th>.";


if(mysql_num_rows($dat)>0){
	while($row=mysql_fetch_array($dat)){
		$info=$info. "<tr>";
		$info=$info."<td >"	 .$row['pid']."</td>";
		$info=$info."<td>"	 .$row['pname']."</td>";
		$info=$info."<td>"	 .$row['pprice']."</td>";
		$info=$info."<td>"	 .$row['pquan']."</td>";
		$info=$info."<td><img src='uploaded/".$row['pimg']."' height=100 width=100/></td>";
		$info=$info."<td onmouseover='showDetails(".$row['pid'].")' class='mytr'>"	."<a >View Details?</a>"."</td>";
		//$info=$info."<td onclick='getUser(".$row['pid'].")' class='userit'>".$rater."</td>";
		$info=$info. "</tr>";
	}
	$info=$info."</table><br>";
}
else{
	$info="No matches found !";
}
//Response part...
if(!empty($_POST['message'])){
	echo $info;
}
else{
	echo "";
}


//echo "<div class ='loader'>".$nn."</div>"



?>
<!DOCTYPE html>
<html>
	<head>
		<title>Products</title>
		<meta charset="UTF-8">
		
		<link rel="stylesheet" type="text/css" href="structure/prod.css">
		<script type="text/javascript" src="jsfile/update.js"></script>
	
	
	</body>


</html>
