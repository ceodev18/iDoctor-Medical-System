<?php

function sendemail($docname,$docemail,$patientname,$patientnumber,$problem)
{
$ToEmail = $docemail; 
$EmailSubject = 'Medical Emergency'; 
$mailheader = "From: contact@idoctormedical.in\r\n"; 
$mailheader .= "Reply-To: contact@idoctormedical.in\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
$MESSAGE_BODY = "Emergency <br/>";
$MESSAGE_BODY .= "Dear Dr.".$docname." <br/><br/>";
$MESSAGE_BODY .= "Your Patient ,".$patientname." is under medical emergency. <br/>"; 
$MESSAGE_BODY .= "He is suffering from ".$problem.". <br/>"; 
$MESSAGE_BODY .= "Please contact him/her as soon as possible on - ".$patientnumber." <br/>"; 
$MESSAGE_BODY .= "<br/><br/> Thank You.";
mail($ToEmail, $EmailSubject, $MESSAGE_BODY,$mailheader) or die("Failure");

return "<h3> Doctor Alerted via Email </h3>";
}

?>