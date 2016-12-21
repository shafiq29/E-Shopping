<?php
	//Local database...
	$con= mysql_connect("localhost","root","root");
	$jabe=mysql_select_db("shop",$con);

	//Online Server database...
	/*$con= mysql_connect("sql301.0fees.net","fees0_14175364","phpkaj29");
	$sel=mysql_select_db("fees0_14175364_user",$con);*/

?>