<?php
class return_ricette 
{
    
public function spit_data ($dataholder) {
    

       
    while($row = mysql_fetch_array($dataholder))
        {
        
        echo  "<img src ='images/".$row['pics']."' width='96' height='80'>";
        echo  $row['titolo'];
        echo "<br />";
        
        }
}
}

?>
