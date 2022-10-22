<?php
// 2次元配列で地図を表示する１
$mapRow = array_fill(0,20, "森"); //一次元配列  key >= 0, key < 20 のリストを森で満たす
$landMap = array_fill(0,10, $mapRow); //ここで二次元配列

//作った配列に変更を加える
$landMap[0][0] = "城";
$landMap[0][19] = "町";
$landMap[9][19] = "町";

foreach($landMap as $row){
    foreach($row as $column){
        echo $column;
    }
    echo "\n";
}
?>
