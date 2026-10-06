
<?php

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");  


asort($fruits);
echo ('  <ul>');
ul($fruits);
echo ('  </ul>');



function ul($x){
foreach($x as $k=>$y){
    echo ('<li>  '.$k.' = '.$y.'</li>');
}
}
?>
 