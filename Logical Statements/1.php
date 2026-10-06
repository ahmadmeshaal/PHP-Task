
<?php
echo (' <form action="1.php" method="get">
        Enter the Year: <input type="text" name="year">
        <input type="submit">
    </form>');

 $year=(int)($_GET["year"]??0);

 if($year %400==0 || ($year %4==0 && $year %100!=0)){
     echo ("the year $year is  leap year ");
 }
 else{
     echo ("the year $year is not a leap year ");
 }
 
?>
