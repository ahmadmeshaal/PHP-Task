
<?php

echo ('    <form action="11.php" method="get">
        Enter the number: <input type="text" name="num1">
        </br>
        <input type="submit">
    </form>');

 $num1=(int)($_GET["num1"]??0);

function  twoIntegers($x){

 if($x<=0){
echo ("<span> Negative</span>");
 }
 else {
echo ("<span>Positive</span>");
 }
}
twoIntegers($num1);
 
?>
 