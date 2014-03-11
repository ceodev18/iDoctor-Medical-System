<?php
session_start();
$con=mysql_connect("localhost","viraj","viraj");
if(!$con)
{
	die('Failed to Connect: ' .mysql_error());
}

mysql_select_db("registered_users",$con);

$sql="UPDATE registered_users_details SET fname='".$_POST[fname]."',mname='".$_POST[mname]."',lname='".$_POST[lname]."',dob='".$_POST[dob]."',age='".$_POST[age]."',gender='".$_POST[gender]."',addressline1='".$_POST[addressline1]."',addressline2='".$_POST[addressline2]."',state='".$_POST[states]."',city='".$_POST[cities]."',pincode='".$_POST[pincode]."',mobno='".$_POST[mobno]."',landlineno='".$_POST[landlineno]."',emergencyno='".$_POST[emergencyno]."' WHERE email='".$_SESSION[email]."'";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
 header("Location: index.php");
  

?>