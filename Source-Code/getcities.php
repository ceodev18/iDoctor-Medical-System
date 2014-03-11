<?php
$q=$_REQUEST["q"];
$con = mysql_connect('localhost', 'viraj', 'viraj');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("location", $con);

$result=mysql_query("SELECT * FROM tblcitylist WHERE state='".$q."'");
while($row = mysql_fetch_array($result))
{
  echo '<option value="'.$row['city_name'].'">'.$row['city_name'].'</option>'; 
}
?>