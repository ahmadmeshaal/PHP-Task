
<?php

echo ('    <form action="7.php" method="get">
        Enter the number 1: <input type="text" name="num1">
        </br>
                Enter the number 2: <input type="text" name="num2">
                </br>
                                Enter the number 3: <input type="text" name="num2">
                </br>
        <input type="submit">
    </form>');

 $num1=(int)($_GET["num1"]??0);
  $num2=(int)($_GET["num2"]??0);
  $num3=(int)($_GET["num3"]??0);

function  twoIntegers($x,$y,$z){

 if($x>=$y && $x>=$z){
echo ("<span>The largest Number is $x</span>");
 }
 else if($y>=$x && $y>=$z){
echo ("<span>The largest Number is $y</span>");
 }else{
    echo ("<span>The largest Number is $z</span>");

 }
}
twoIntegers($num1,$num2,$num3);
 
?>
