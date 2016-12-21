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
$res=(double)("0");
$see="";
$sho="<img src='resimage/like.png'  hight='20' width='20'></img>";
$sht="<img src='resimage/super.png'  hight='20' width='20'></img>";
if(!$a==0 && !$b==0){
$res=($a/$b);
}
 
$fres=number_format($res,2);
$nres=$fres;
$rem=4-$nres;
if(($nres>=1&&$nres<1.5)||($nres>=2&&$nres<2.5)||($nres>=3&&$nres<3.5)||($nres>=4&&$nres<4.5)){
	$nres=floor($fres);
$rem=5-$nres;
}
for($i=0;$i<$nres;$i++){
	$see=$see.$sht;

}
for($i=0;$i<$rem;$i++){
	$see=$see.$sho;

}
if($res!=0){
echo "Current rating: ".$fres." ".$see;
}





?>