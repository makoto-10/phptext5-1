<?php
//練習問題１
echo '<meta charset="utf-8">';

for($i = 1; $i <= 100; $i++){
    echo $i. '<BR>';

$a = 15;
$b = 5;
$c = 3;

if(($i % $a) == 0){
    echo 'both';
}elseif(($i % $b) == 0){
    echo 'five';
}elseif(($i % $c) == 0){
    echo 'three';
}
}

?>