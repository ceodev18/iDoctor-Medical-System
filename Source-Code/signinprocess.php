<?php
session_start();
$email=$_POST["signinemail"];
$passwordHash = sha1($_POST['signinpassword']);
$con=mysql_connect("localhost","viraj","viraj");
if(!$con)
{
	die('could not connect: ' .mysql_error());
}

mysql_select_db("registered_users",$con);

$result=mysql_query("SELECT * FROM registered_users_details WHERE email='".$email."' AND password='".$passwordHash."'");
if ($row = mysql_fetch_array($result))
{
if(($row['email']==$email)&&($row['password']==$passwordHash))
{
$_SESSION['email']=$email;
$_SESSION['start']=time();
$_SESSION['expire']=$_SESSION['start']+(30*60);
echo "<p class=data> <center>Successfully Logged in<br>
<br><a href='logout.php'> Log OUT </a><br>
<br><a href=index.php>Click here if your browser is not redirecting automatically or you don't want to wait.</a><br></center>";
print "<script>";
print " self.location='facilities.php';"; // Comment this line if you don't want to redirect
print "</script>";	
}
}	
else
{
session_unset();
echo "<font face='Verdana' size='2' color=red>Wrong Login. Use your correct Userid and Password and Try <br><center>
<input type='button' value='Retry' onClick='history.go(-1)'></center>";
}
?>