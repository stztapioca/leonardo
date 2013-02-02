<?php
require 'dbclass.php';
require 'return_data.php';
echo $_POST["start"]."<br>";
$start=$_POST["start"];
$par_query=explode('_',$_POST["ricette"]);
$par_query[0]=7;
$sql_count='select count(*) from ricette where tipo='.$par_query[0];
//echo $sql;
$conn= new dbconnect('localhost','root','st3f4n0','leo_ric') or die('errore');
$result_count=$conn->func_query($sql_count) or die('errore query count') ;
while($row = mysql_fetch_array($result_count))
  {
   $row_count=$row[0];
  }
echo "Ricette trovate:".$row_count."<br>";

 
 $sql="select * from ricette where tipo=".$par_query[0]." limit $start,5 ";
//echo $sql.'<br>';
$result=$conn->func_query($sql) or die('errore query') ;

$dati= new return_ricette;
$dati -> spit_data($result);
/*
//print_r($result) ;
while($row = mysql_fetch_array($result))
  {
  echo $row['id'] . " " . $row['titolo'];
  echo "<br />";
  }*/
 
//echo "<script language=javascript>document.getElementById('next').style.visibility='visible';</script>";
if ($start+5 <$row_count)
    {
   echo "<button id='next'>next</button> ";
  
  } 

?>
<script>
$("#next").click(function() {
var parametro = '07_1';
alert(parametro);

$.ajax({
type: "POST",
data: ({ ricette: parametro, start: <?php echo $start +5;?>}),
url: "ricette.php",
error: function() {
                $("#errors").html('Error submiting the form.');
            },
success: function(response){
$("#content").html(response);
}
});
//alert('fatto');
});


</script>
