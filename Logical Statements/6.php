
<?php

echo ('    <form action="6.php" method="get">
        Enter the number 1: <input type="text" name="num1">
        </br>
        <input type="submit">
    </form>');

 $num1=(int)($_GET["num1"]??0);

function  twoIntegers($x){

 if($x>=20&&$x<=50){
echo ("<span>  the given positive number is  in the range of [20-50]</span>");
 }
 else {
echo ("<span>false</span>");
 }
}
twoIntegers($num1);
 
?>
