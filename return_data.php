<?php
class return_data 
{
    
public function spit_ricette ($dataholder) {
    

       
    while($row = mysql_fetch_array($dataholder))
        {
        echo "<div id='titolo_ric' style='border: solid red thin;color: blue;padding:0px;margin:0px' >";
        echo  "<img src ='images/".$row['pics']."' width='96' height='80'>";
        echo  $row['titolo'];
        echo "<button class='vediric' id='".$row['id']."'>Vedi</button> <br>";
        //echo "<p style='display: none;color: fuchsia;padding:0px;margin:0px' id='dett_".$row['id']."'>dettagli qui</p>";
        echo "<br />\n";
        echo "</div>";
        
        }
}

public function spit_count ($dataholder) {
    

       
    while($row = mysql_fetch_array($dataholder))
        {
        return $row[0];
              
        }
}

}

?>
