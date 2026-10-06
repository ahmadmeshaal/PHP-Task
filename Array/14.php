<?php
 $array1 = array( 2, 0, 10, 12,1, 6)  ;

$s=$array1[0];
for($i = 0; $i <count($array1); $i++){
    if( $array1[$i]<=$s && $array1[$i]!==0 ){
$s=$array1[$i];
}

}
echo($s);

?>