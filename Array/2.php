
<?php


$color=["red","green","white"];


echo ('  <ul>');
ul($color);
echo ('  </ul>');

function ul($x){
for($i=0;$i<count($x);$i++)
    echo ('<li>'.$x[$i].'</li>');
}
?>
 