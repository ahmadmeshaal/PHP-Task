
<?php

echo ('    <form action="5.php" method="get">
        Enter the number 1: <input type="text" name="num1">
        </br>
        <input type="submit">
    </form>');

 $num1=(int)($_GET["num1"]??0);

function  twoIntegers($x){

 if($x%3===0){
echo ("<span>  the given positive number is a multiple of 3</span>");
 }
 else {
echo ("<span>false</span>");
 }
}
twoIntegers($num1);
 
?>
