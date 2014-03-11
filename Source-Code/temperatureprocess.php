<?php
session_start();
$temp=$_GET["temperature"];
$preg=$_GET["pregnant"];
$hour = date('H:i');
$email=$_SESSION['email'];
$problem="Body Temperature of ".$temp;
$con = mysql_connect('localhost', 'viraj', 'viraj');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("registered_users", $con);

$result=mysql_query("SELECT * FROM registered_users_details WHERE email='".$email."'");
$row = mysql_fetch_array($result);
$age=$row['age'];
$pname=$row['fname']." ".$row['mname']." ".$row['lname'];
$docname=$row['doctorname'];
$docemail=$row['doctoremail'];
if($preg==1)
{
		if($temp>=96.4 && $temp<=98.1)
		{
		echo '<h3>Temperature is in normal range</h3>';
		}
		else
		{
		echo '<h3>Temperature is not in normal range</h3>';	
		}
		if($temp>=100.4)
		{
		echo '<h3>Please contact your doctor immediately</h3>';
		}
}

else
{
echo '<h2>Analysing According to Time</h2>';

if($hour>=0&&$hour<=1 && $temp>=98.1&&$temp<=98.6)
{
echo '<h3>Temperature is in normal range</h3>';
}
else if($hour>1 && $hour<=5 && $temp>=97.3&&$temp<=98.1)
{
echo '<h3>Temperature is in normal range</h3>';                        
}
else if($hour>5&&$hour<=9 && $temp>=97.4&&$temp<=98.0)
{
echo '<h3>Temperature is in normal range</h3>';
}
else if($hour>9&&$hour<=13 && $temp>=98.0&&$temp<=99.5)
{
echo '<h3>Temperature is in normal range</h3>';
}
else if($hour>13&&$hour<=17 && $temp>=99.4&&$temp<=99.6)
{
echo '<h3>Temperature is in normal range</h3>';
}
else if($hour>17&&$hour<=21 && $temp>=99.2&&$temp<=99.6)
{
echo '<h3>Temperature is in normal range</h3>';
}
else if($hour>21&&$hour<23 && $temp>=98.7&&$temp<=99.2)
{
echo '<h3>Temperature is in normal range</h3>';
}
else if($hour==23 && $temp>=98.6&&$temp<=98.7)
{
echo '<h3>Temperature is in normal range</h3>';
}
else
{
echo '<h3>Temperature is not in normal range</h3>';
}

echo '<h2>Analysing According to Age</h2>';

if($age>=0 && $age<=2 && $temp>=97.5 && $temp<=100.4)
{
echo '<h3>Temperature is in normal range</h3>';
}
else if($age>2 && $age<=10 && $temp>=97 && $temp<=100)
{
echo '<h3>Temperature is in normal range</h3>';
}
else if($age>10 && $age<=65 && $temp>=96.6 && $temp<=99.7)
{
echo '<h3>Temperature is in normal range</h3>';
}
else if($age>65 && $temp>=96.4 && $temp<=99.5)
{
echo '<h3>Temperature is in normal range</h3>';
}
else
{
echo '<h3>Temperature is not in normal range</h3>';
include 'alertemailprocess.php';
echo sendemail($docname,$docemail,$pname,$row['mobno'],$problem);
}
}
mysql_select_db("diagnosis", $con);

if($temp>97 && $temp<=100.0)
{
$result=mysql_query("SELECT * FROM temp WHERE type='mh'");
$row = mysql_fetch_array($result);
echo '<h4>'.$row['description'].'</h4>';
}

else if($temp>100.0 && $temp<=102.0)
{
$result=mysql_query("SELECT * FROM temp WHERE type='h'");
$row = mysql_fetch_array($result);
echo '<h4>'.$row['description'].'</h4>';
}	

else if($temp>102.0 && $temp<=104.0)
{
$result=mysql_query("SELECT * FROM temp WHERE type='vh'");
$row = mysql_fetch_array($result);
echo '<h4>'.$row['description'].'</h4>';
}

else if($temp>104.0 && $temp<=106.0)
{
$result=mysql_query("SELECT * FROM temp WHERE type='wh'");
$row = mysql_fetch_array($result);
echo '<h4>'.$row['description'].'</h4>';
}

else if($temp>106.0)
{
$result=mysql_query("SELECT * FROM temp WHERE type='uh'");
$row = mysql_fetch_array($result);
echo '<h4>'.$row['description'].'</h4>';	
}

else if($temp>95.0 && $temp<=97.0)
{
$result=mysql_query("SELECT * FROM temp WHERE type='ml'");
$row = mysql_fetch_array($result);
echo '<h4>'.$row['description'].'</h4>';	
}

else if($temp>93.0 && $temp<=95.0)
{
$result=mysql_query("SELECT * FROM temp WHERE type='l'");
$row = mysql_fetch_array($result);
echo '<h4>'.$row['description'].'</h4>';
}

else if($temp>91.0 && $temp<=93.0)
{
$result=mysql_query("SELECT * FROM temp WHERE type='vl'");
$row = mysql_fetch_array($result);
echo '<h4>'.$row['description'].'</h4>';	
}

else if($temp>89.0 && $temp<=91.0)
{
$result=mysql_query("SELECT * FROM temp WHERE type='wl'");
$row = mysql_fetch_array($result);
echo '<h4>'.$row['description'].'</h4>';
}

else if($temp>87.0 && $temp<=89.0)
{
$result=mysql_query("SELECT * FROM temp WHERE type='ul'");
$row = mysql_fetch_array($result);
echo '<h4>'.$row['description'].'</h4>';
}

else if($temp<=87.0)
{
$result=mysql_query("SELECT * FROM temp WHERE type='vul'");
$row = mysql_fetch_array($result);
echo '<h4>'.$row['description'].'</h4>';
}

?>