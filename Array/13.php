<?php

$random=[];

for($i =0; $i <= 10; $i++){
$num=rand(11,20);
$random[$i]=$num;
    
}
$i=0;
for($i=0;$i<count($random);$i++)
    echo ("$random[$i]/");

?>