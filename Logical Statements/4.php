
<?php

echo ('    <form action="4.php" method="get">
        Enter the number 1: <input type="text" name="num1">
        </br>
                Enter the number 2: <input type="text" name="num2">
                </br>
        <input type="submit">
    </form>');

 $num1=(int)($_GET["num1"]??0);
  $num2=(int)($_GET["num2"]??0);

function  twoIntegers($x,$y){

$sum=$x+$y;
 if($sum===30){
echo ("<span>True ($y+$x)=$sum</span>");
 }
 else {
echo ("<span>false</span>");
 }
}
twoIntegers($num1,$num2);
 
?>
