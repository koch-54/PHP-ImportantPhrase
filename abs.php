<?php
$input = trim(fgets(STDIN));

$array = explode(":",$input);
$array[0] = abs($array[0]); //ゼロ埋めのゼロを消す
$array[1] = abs($array[1]);
echo $array[0] ."\n" . $array[1];
?>