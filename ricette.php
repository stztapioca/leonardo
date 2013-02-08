<?php
require 'dbclass.php';
require 'return_data.php';
echo $_POST["start"]."<br>";
$start=$_POST["start"];
$par_query=explode('_',$_POST["ricette"]);
//echo $par_query[0];
//$start=0;
//$par_query[0]=7;
?>

<script>
$("#next").click(function() {
var parametro = '<?php echo $par_query[0];?>';
//alert(parametro);
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

$(".vediric").click(function() {
var parametro = $(this).attr("id");
alert(parametro);
//$("p").toggle("slow");
//alert('fatto');
});
</script>
<?php
//echo $sql;
$conn= new dbconnect('localhost','root','st3f4n0','leo_ric') or die('errore');
$dati= new return_data;
$sql_count='select count(*) from ricette where tipo='.$par_query[0];
$result_count=$conn->func_query($sql_count) or die('errore query count') ;
$row_count= $dati -> spit_count($result_count);
echo "Ricette trovate:".$row_count."<br>";

 $sql="select * from ricette where tipo=".$par_query[0]." limit $start,5 ";
//echo $sql.'<br>';
$result=$conn->func_query($sql) or die('errore query') ;


$dati -> spit_ricette($result);

if ($start+5 <$row_count)
    {
   echo "<button id='next'>next</button> ";
  
  } 

?>
