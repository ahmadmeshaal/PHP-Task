
<?php

$colors = array("RED","BLUE", "WHITE","YELLOW"); 


function lower($x){
  for($i = 0; $i < count($x); $i++){
        $x[$i] = strtolower($x[$i]);
        echo(" $x[$i] </br>");
    }
}

lower($colors);

?>
 