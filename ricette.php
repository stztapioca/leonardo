<?php
require 'dbclass.php';
$par_query=explode('_',$_POST["ricette"]);
$sql='select * from ricette where tipo='.$par_query[0];
//echo $sql;
$conn= new dbconnect('mysql.stz.dreamhosters.com','ziolupo','chefame','ziolupo') or die('errore');

//echo $sql;
$result=$conn->func_query($sql) or die('errore query') ;
//print_r($result) ;
while($row = mysql_fetch_array($result))
  {
  echo $row['id'] . " " . $row['titolo'];
  echo "<br />";
  }
//echo 'test';
?>
