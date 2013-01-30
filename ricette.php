<?php
require 'dbclass.php';


$conn= new dbconnect('localhost','root','st3f4n0','leo_ric') or die('errore');
$sql='select * from ricette';
//echo $sql;
$result=$conn->func_query($sql) or die('errore') ;
//print_r($result) ;
while($row = mysql_fetch_array($result))
  {
  echo $row['id'] . " " . $row['titolo'];
  echo "<br />";
  }
echo 'test';
?>
