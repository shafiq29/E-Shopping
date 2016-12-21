<?php

include("connection.php");

$pdid=$_POST['idforp'];
$take=mysql_query("select * from products where pid=$pdid");

$a="";
$b="";
$c="";


while($row=mysql_fetch_array($take)){
$a=	 $row['vote'];
$b=	 $row['person'];
$c=	 $row['rate'];


}
$b=$b+1;

$up= mysql_query("UPDATE products SET person='$b' WHERE pid=$pdid");

echo $pdid;

?>