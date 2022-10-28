<?php
$input_line = trim(fgets(STDIN));
for($i=0; $i<$input_line; $i++){
    [$a , $b] = explode(" ", trim(fgets(STDIN)));
    $ab[] = [$a , $b];
}
rsort($ab);  //配列の配列をソートするとき各配列の一番目をソートした後に一番目の要素が同じとき各二番目をソートする、二番目の要素が同じとき各三番目をソートするのように順番に行われる
for($i = 0; $i < $input_line; $i++){
    echo $ab[$i][0] . " " . $ab[$i][1] . "\n";
}
?>