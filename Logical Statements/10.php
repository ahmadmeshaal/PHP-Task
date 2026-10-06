
<?php

echo ('    <form action="10.php" method="get">
        Enter your age: <input type="text" name="num1">
        </br>
        <input type="submit">
    </form>');

 $num1=(int)($_GET["num1"]??0);

function  twoIntegers($x){

 if($x<=17){
echo ("<span> is no eligible to vote</span>");
 }
 else {
echo ("<span>you can vote</span>");
 }
}
twoIntegers($num1);
 
?>
 