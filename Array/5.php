<?php

echo ('    <form action="5.php" method="get">
        Enter the item: <input type="text" name="num1">
        </br>
                Enter the index: <input type="text" name="num2">
                </br>
        <input type="submit">
    </form>');

 $item=($_GET["num1"]??0);
  $index=(int)($_GET["num2"]??0);

$array=[1,2,"3",4,5];

$array[$index]=$item;
function  twoIntegers($x){

for($i=0; $i<count($x);$i++){
    echo (" $x[$i]/ ");
}
}
twoIntegers($array);
 
?>
