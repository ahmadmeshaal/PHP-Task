
<?php

echo ('    <form action="3.php" method="get">
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
 if($x===$y){
    $sum+=$sum*3;
echo ("<span>($y+$x)*3=$sum</span>");
 }
 else {
echo ("<span>($y+$x)=$sum</span>");
 }
}
twoIntegers($num1,$num2);
 
?>
