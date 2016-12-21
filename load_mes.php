<?php
	include("connection.php");
	$qu=mysql_query("SELECT mes FROM message",$con);
	//con....end
	$see="";
	if(!isset($_POST['shout_message'])){
		while($res=mysql_fetch_row($qu)){
			$la = array(">:D", ":-D", ":D");
			$cry = array(":;(");
			$vex = array(":P");
			$surp = array(":o",":O");
			$sad = array(":(");
			$ang = array(">_<");
			$kiss = array(":*");
			$dev = array("3:)");
			$wink = array(";)");
			$cool = array("B)");
			$ns = array(":)");

			$las = "<img src='smiley/d.png' height=20 width=20>";
			$crys = "<img src='smiley/c.png' height=20 width=20>";
			$vexs = "<img src='smiley/p.png' height=20 width=20>";
			$surps = "<img src='smiley/o.png' height=20 width=20>";
			$sads = "<img src='smiley/s.png' height=20 width=20>";
			$angs = "<img src='smiley/ang.png' height=20 width=20>";
			$kisss = "<img src='smiley/k.png' height=20 width=20>";
			$devs = "<img src='smiley/dev.png' height=20 width=20>";
			$winks = "<img src='smiley/wink.png' height=20 width=20>";
			$cools = "<img src='smiley/cool.png' height=20 width=20>";
			$nss = "<img src='smiley/ns.png' height=20 width=20>";
			$sh=$res[0];
			$sh = str_replace($la,$las,$sh);
			$sh = str_replace($cry,$crys,$sh);
			$sh = str_replace($vex,$vexs,$sh);
			$sh = str_replace($surp,$surps,$sh);
			$sh = str_replace($sad,$sads,$sh);
			$sh = str_replace($ang,$angs,$sh);
			$sh = str_replace($wink,$winks,$sh);
			$sh = str_replace($kiss,$kisss,$sh);
			$sh = str_replace($dev,$devs,$sh);
			$sh = str_replace($cool,$cools,$sh);
			$sh = str_replace($ns,$nss,$sh);
			$see= $see."<div class='shout_msg'>".$sh."</div></br>";
		}
	}
	echo $see;
?>