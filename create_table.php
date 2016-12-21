<?php
include("connection.php");//connecting to the server
//Lets create database...
//$crdb="CREATE DATABASE std_data";
//$sel=mysql_select_db("std_data",$con);//local...
$sel=mysql_select_db("shop",$con);
/*$query=mysql_query("$crdb");
if($query){
echo "Database created succesfully...";
}
else{
	echo "<br>Database already exists. Thank you...";
}*/
//***************************Table block***********************************
$table="CREATE TABLE IF NOT EXISTS data_stda 
(
id INT NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(id),
user VARCHAR(50),
pass VARCHAR(50),
email VARCHAR(50),
adr VARCHAR(50),
phone VARCHAR(50)
)";

$query2=mysql_query($table,$con);

if($query2){
echo "Table created succesfully...";
}
else{
	echo "<br>Table already exists. Thank you...";
}
//**************************************************************
