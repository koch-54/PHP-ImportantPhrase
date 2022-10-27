<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_line = fgets(STDIN);
    for($i=0; $i<$input_line; $i++){
        $input = trim(fgets(STDIN));
        $array[] = $input;
    }
    $number = trim(fgets(STDIN));
    for($j=0; $j<$number; $j++){
        $str = trim(fgets(STDIN));
        foreach($array as $word){
            if(stripos($str, $word) === false){ //striposは文字列の中に含まれている文字列の大文字小文字を区別しない
                echo "NO\n";
            } else {
                echo "YES\n";
            }
        }
    }
?>