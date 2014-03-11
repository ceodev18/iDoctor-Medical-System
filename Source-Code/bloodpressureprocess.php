<?php
session_start();
$systolic=$_GET["systolicbp"];
$diastolic=$_GET["diastolicbp"];
$hour = date('H:i');
$email=$_SESSION['email'];
$con = mysql_connect('localhost', 'viraj', 'viraj');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("registered_users", $con);

$result=mysql_query("SELECT * FROM registered_users_details WHERE email='".$email."'");
$row = mysql_fetch_array($result);
$age=$row['age'];

echo '<h2>Analysing According to Time</h2>';

if($hour>=19&&$hour<=23&&$systolic<=135&&$diastolic<=85)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($hour>=0&&$hour<7&&$systolic<=135&&$diastolic<=85)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($hour>=7&&$hour<=19&&$systolic<=120&&$diastolic<=70)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else
{
    echo '<h3>Blood Pressure is not in normal range</h3>';
}

echo '<h2>Analysing According to Age</h2>';

if($age>0&&$age<=0.25&&$systolic>=65&&$systolic<=85&&$diastolic>=45&&$diastolic<=55)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($age>0.25&&$age<=0.5&&$systolic>=70&&$systolic<=90&&$diastolic>=50&&$diastolic<=65)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($age>0.5&&$age<=1.0&&$systolic>=80&&$systolic<=100&&$diastolic>=55&&$diastolic<=65)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($age>1.0&&$age<=3.0&&$systolic>=90&&$systolic<=105&&$diastolic>=55&&$diastolic<=70)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($age>3.0&&$age<6.0&& $systolic>=104&&$systolic<=116&&$diastolic>=63&&$diastolic<=74)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($age>=6.0&&$age<10.0&& $systolic>=108&&$systolic<=121&&$diastolic>=71&&$diastolic<=81)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($age>=10.0&&$age<13.0&& $systolic>=114&&$systolic<=127&&$diastolic>=77&&$diastolic<=83)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($age>=13.0&&$age<15.0&& $systolic>=121&&$systolic<=135&&$diastolic>=79&&$diastolic<=85)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($age>=15.0&&$age<20.0&& $systolic>=105&&$systolic<=120&&$diastolic>=73&&$diastolic<=81)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($age>=20.0&&$age<25.0&& $systolic>=108&&$systolic<=132&&$diastolic>=75&&$diastolic<=83)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($age>=25.0&&$age<30.0&& $systolic>=109&&$systolic<=133&&$diastolic>=76&&$diastolic<=84)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($age>30.0&&$age<35.0&& $systolic>=110&&$systolic<=134&&$diastolic>=77&&$diastolic<=85)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($age>=35.0&&$age<40.0&& $systolic>=111&&$systolic<=135&&$diastolic>=78&&$diastolic<=86)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($age>=40.0&&$age<45.0&& $systolic>=112&&$systolic<=137&&$diastolic>=79&&$diastolic<=87)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($age>=45.0&&$age<50.0&& $systolic>=115&&$systolic<=139&&$diastolic>=80&&$diastolic<=88)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($age>=50.0&&$age<55.0&& $systolic>=116&&$systolic<=142&&$diastolic>=81&&$diastolic<=89)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($age>=55.0&&$age<60.0&& $systolic>=118&&$systolic<=144&&$diastolic>=82&&$diastolic<=90)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($age>=60.0&&$age<65.0&& $systolic>=121&&$systolic<=147&&$diastolic>=83&&$diastolic<=91)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else if($age>=65.0&& $systolic>=90&&$systolic<=130&&$diastolic>=65&&$diastolic<=90)
{
    echo '<h3>Blood Pressure is in normal range</h3>';
}
else
{
    echo '<h3>Blood Pressure is not in normal range</h3>';
}


if($systolic>210&&$systolic<=240&&$diastolic>125&&$diastolic<=140)
{
    echo '<h3>Stage 4 High Blood Pressure</h3>';
}
else if($systolic>180&&$systolic<=210&&$diastolic>110&&$diastolic<=125)
{
    echo '<h3>Stage 3 High Blood Pressure</h3>';
}
else if($systolic>160&&$systolic<=180&&$diastolic>100&&$diastolic<=110)
{
    echo '<h3>Stage 2 High Blood Pressure</h3>';
}
else if($systolic>140&&$systolic<=160&&$diastolic>90&&$diastolic<=100)
{
    echo '<h3>Stage 1 High Blood Pressure</h3>';
}
else if($systolic>50&&$systolic<=90&&$diastolic>35&&$diastolic<=60)
{
    echo '<h3>Hypotension (Low Blood Pressure)</h3>';
}

mysql_select_db("diagnosis", $con);

if($systolic>=140&&$systolic<160&&$diastolic>=90&&$diastolic<100)
{
$result=mysql_query("SELECT * FROM bp WHERE type='h'");
$row = mysql_fetch_array($result);
echo '<h4>'.$row['description'].'</h4>';
}

else if($systolic>=160&&$diastolic>=100)
{
$result=mysql_query("SELECT * FROM bp WHERE type='vh'");
$row = mysql_fetch_array($result);
echo '<h4>'.$row['description'].'</h4>';
}

else if($systolic>=50&&$systolic<=90&&$diastolic>=35&&$diastolic<=60)
{
$result=mysql_query("SELECT * FROM bp WHERE type='l'");
$row = mysql_fetch_array($result);
echo '<h4>'.$row['description'].'</h4>';
}

else if($systolic>90&&$systolic<140&&$diastolic>60&&$diastolic<90)
{
$result=mysql_query("SELECT * FROM bp WHERE type='n'");
$row = mysql_fetch_array($result);
echo '<h4>'.$row['description'].'</h4>';
}

?>