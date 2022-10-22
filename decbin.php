<?php
$input = trim(fgets(STDIN));

$n_x = explode(" ", $input);

//入力値の２進数にしたいをdecbinで２進数にする
$nisin = decbin($n_x[1]);
$nisin_array = str_split($nisin); //二進数を分割して配列にする

//二進数の桁が入力されるので入力値を受け取る
$anoInput = trim(fgets(STDIN));
while($anoInput){
        $key_num = count($nisin_array) - $anoInput; //キー ＝ 要素数 -　桁の数で出てくる
        echo $nisin_array[$key_num] . "\n";
        $anoInput = trim(fgets(STDIN));
    }