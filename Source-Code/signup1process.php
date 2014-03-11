<?php
session_start();
$con=mysql_connect("localhost","viraj","viraj");
$docname=$_GET["docname"];
$docemail=$_GET["docemail"];
$docphone=$_GET["docphone"];
$internal=sha1($_GET["internal"]);
$cancer=sha1($_GET["cancer"]);
$allergy=sha1($_GET["allergy"]);
$external=sha1($_GET["external"]);
$bad=sha1($_GET["bad"]);
$mental=sha1($_GET["mental"]);
$email=$_SESSION['email'];
if(!$con)
{
	die('Failed to Connect: ' .mysql_error());
}
mysql_select_db("registered_users",$con);
$sql="UPDATE registered_users_details SET doctorname='".$docname."',doctoremail='".$docemail."',doctorphone='".$docphone."',internal='".$internal."',cancer='".$cancer."',allergy='".$allergy."',external='".$external."',bad='".$bad."',mental='".$mental."' WHERE email='".$email."'";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }

$ToEmail = $email; 
$EmailSubject = 'iDoctor Medical System'; 
$mailheader = "From: contact@idoctormedical.in\r\n"; 
$mailheader .= "Reply-To: contact@idoctormedical.in\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
$MESSAGE_BODY = "Welcome to iDoctor Medical System <br/>"; 
$MESSAGE_BODY .= "Username: ".$_SESSION['email']."<br/>"; 
$MESSAGE_BODY .= "Password: ".$_SESSION['password']."<br/>"; 
$MESSAGE_BODY .= "<br/> Please Keep this email incase you forget your login details";
$MESSAGE_BODY .= "<br/><br/> Thank You once again for Joining the iDoctor Medical Family";
mail($ToEmail, $EmailSubject, $MESSAGE_BODY,$mailheader) or die("Failure");
  
	print "<script>";
	print " self.location='index.php';"; // Comment this line if you don't want to redirect
	print "</script>";
?>
