
<?php

$words =  array("abcd","abc","de","hjjj","g","wer") ;


function larg($x){
$c="";
  for($i = 0; $i < count($x); $i++){
    if(strlen($x[$i])>=strlen($c)){
        $c=$x[$i];
    }
    }
return strlen($c);
}

function short($x){
$c="";
  for($i = 0; $i < count($x); $i++){
    if(strlen($x[$i])<=strlen($c)|| $i===0){
        $c=$x[$i];
    }
    }
return strlen($c);
}
$shortw=short($words);
$largw=larg($words);

echo ('The shortest array length is'.$shortw.' s. The longest array length is '.$largw.'ss');

?>
 