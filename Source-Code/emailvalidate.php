<?php
session_start();
$con=mysql_connect("localhost","viraj","viraj");
if(!$con)
{
	die('could not connect: ' .mysql_error());
}

mysql_select_db("registered_users",$con);

$result=mysql_query("SELECT * FROM registered_users_details");

while($row = mysql_fetch_array($result))
{
if($row['email']==$_GET['email'])
{
	echo "no";
	break;
}
}
?>