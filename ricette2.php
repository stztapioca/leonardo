 <?php
$con = mysql_connect("localhost","root","st3f4n0");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("leo_ric", $con);

$result = mysql_query("SELECT * FROM ricette");

while($row = mysql_fetch_array($result))
  {
  echo $row['id'] . " " . $row['titolo'];
  echo "<br />";
  }

mysql_close($con);
?> 