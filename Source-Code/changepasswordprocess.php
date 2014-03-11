<?php
session_start();
$email=$_SESSION["email"];
$oldp=sha1($_GET["oldpassword"]);
$newp=sha1($_GET["newpassword"]);
$rnewp=sha1($_GET["rnewpassword"]);
$con=mysql_connect("localhost","viraj","viraj");
if(!$con)
{
	die('could not connect: ' .mysql_error());
}

mysql_select_db("registered_users",$con);

$result=mysql_query("SELECT * FROM registered_users_details WHERE email='".$email."'");
if ($row = mysql_fetch_array($result))
{
if(($row['email']==$email)&&($row['password']==$oldp))
{
	$sql="UPDATE registered_users_details SET password='".$newp."' WHERE email='".$email."'";
	if (!mysql_query($sql))
	  {
	  die('Error: ' . mysql_error());
	  }
 	echo '<p> Password Successfully Changed </p>';
 	$ToEmail = $_SESSION["email"]; 
	$EmailSubject = 'iDoctor Medical System'; 
	$mailheader = "From: virajshah.77@gmail.com\r\n"; 
	$mailheader .= "Reply-To: virajshah.77@gmail.com\r\n"; 
	$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$MESSAGE_BODY = $row['fname']." ".$row['lname']."<br/>";
	$MESSAGE_BODY .= "Your Password has been Successfully Changed.<br/> Here are the new login details"; 
	$MESSAGE_BODY .= "Username: ".$row["email"]."<br/>"; 
	$MESSAGE_BODY .= "Password: ".$_GET["newpassword"]."<br/>"; 
	$MESSAGE_BODY .= "<br/> Please Keep this email incase you forget your login details";
	mail($ToEmail, $EmailSubject, $MESSAGE_BODY,$mailheader) or die("Failure");

}
else
{
	echo '<p>Old Password Incorrect Please try again </p>';
}
}
?>