<?php
session_start();
$passwordHash = sha1($_POST['password']);
$con=mysql_connect("localhost","viraj","viraj");
if(!$con)
{
	die('Failed to Connect: ' .mysql_error());
}
mysql_select_db("registered_users",$con);
$sql="INSERT INTO registered_users_details (email, password, fname, mname, lname, dob, age, gender, addressline1, addressline2, state, city, pincode, mobno, landlineno, emergencyno)
VALUES ('$_POST[email]','$passwordHash','$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[dob]','$_POST[age]','$_POST[gender]','$_POST[addressline1]','$_POST[addressline2]','$_POST[states]','$_POST[cities]','$_POST[pincode]','$_POST[mobno]','$_POST[landlineno]','$_POST[emergencyno]')";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password'];
$_SESSION['start']=time();
$_SESSION['expire']=$_SESSION['start']+(30*60);
header("Location: signup1.php");

?>