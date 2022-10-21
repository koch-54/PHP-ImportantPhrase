<?php
$input = trim(fgets(STDIN));

//標準入力の文字列をすべて連想配列にする
while($input){
    $key_value = explode("," , $input);
    $key = $key_value[0];
    $value = $key_value[1];
    
    $item[$key] = $value;
    
    $input = trim(fgets(STDIN));
}

//連想配列をvalueで逆順で並びかえる
arsort($item);
print_r($item);

?>
