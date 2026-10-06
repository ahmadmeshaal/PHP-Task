
<?php

$array1 = array("color" => "red", 2, 4); 
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4); 


$result = array_merge($array1, $array2);

foreach($result as $x=>$y){
echo("<span>$x:$y </br></span>");
}

print_r($result);
?>
 