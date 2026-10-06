
<?php

echo ('    <form action="2.php" method="get">
        Enter the Temperature: <input type="text" name="temp">
        <input type="submit">
    </form>');

 $temp=(int)($_GET["temp"]??0);

 if($temp<50&&$temp>20){
echo ("<span>‘It is summer time!</span>");
 }
 else {
    echo ("<span>‘It is winter time!</span>");
 }
 
?>
