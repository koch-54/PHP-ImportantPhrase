<?php
$reserch = trim(fgets(STDIN));
$string = trim(fgets(STDIN));

echo substr_count($string, $reserch); //文字列の中にいくつ検索した文字列が入っているか数値を返す。
?>