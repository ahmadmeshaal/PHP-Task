
<?php

$colors = array("red","blue", "white","yellow"); 


function upper($x){
  for($i = 0; $i < count($x); $i++){
        $x[$i] = strtoupper($x[$i]);
        echo(" $x[$i] </br>");
    }
}

upper($colors);

?>
 