
<?php

echo ('    <form action="9.php" method="get">
        Enter the number 1: <input type="text" name="num1">
        </br>
                Enter the number 2: <input type="text" name="num2">
                </br>
                                Enter the number 3: <input type="text" name="num3">
                </br>
                
<input type="submit" name="cal"  value="Addition" >
<input type="submit" name="cal" value="Subtraction">
<input type="submit" name="cal" value="Multiplication">
<input type="submit" name="cal" value="Division" >

    </form>');

 $num1=(int)($_GET["num1"]??0);
  $num2=(int)($_GET["num2"]??0);
  $num3=(int)($_GET["num3"]??0);

  $cal = $_GET["cal"] ?? "";

function  Addition($x,$y,$z){
    $sum=$x+$y+$z;
echo ("<span> $sum</span>");

}
function  Subtraction ($x,$y,$z){
    $sum=$x-$y-$z;
echo ("<span> $sum</span>");

}
function  Multiplication ($x,$y,$z){
    $sum=$x*$y*$z;
echo ("<span> $sum</span>");

}function  Division ($x,$y,$z){
    $sum=$x/$y/$z;
echo ("<span> $sum</span>");

}

if ($cal==="Addition"){
Addition($num1,$num2,$num3);
}else 
if($cal==="Subtraction"){
Subtraction($num1,$num2,$num3);
}
if($cal==="Multiplication"){
Multiplication($num1,$num2,$num3);
}
if($cal==="Division"){
Division($num1,$num2,$num3);
}
?>
