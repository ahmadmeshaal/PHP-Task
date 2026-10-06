
<?php

$temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73 );



avg($temp);

lowest($temp);

bigest($temp);




function lowest($x){
   echo(" List of seven lowest temperatures:");
   sort($x);

for($i=0; $i<7;$i++){
    echo (" $x[$i], ");
}
   echo("</br>");
}
function bigest($x){
       echo(" List of seven largest temperatures:");

 sort($x);
for($i = count($x) - 7; $i < count($x); $i++){
    echo "$x[$i], ";
}
   echo("</br>");


}

function avg($x){
    $avg=0;
for($i=0; $i<count($x);$i++){
    $avg+=(int)$x[$i];
}
$avg=$avg/count($x);
    echo ("Average Temperature is: $avg ");
       echo("</br>");
   

}

?>
 