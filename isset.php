<?php
$line = trim(fgets(STDIN));
$array = [];
for($i=0; $i<$line; $i++){
    [$s, $n] = explode(" ", trim(fgets(STDIN)));
    if(isset($array[$s])){ //issetはkeyで指定した場所に要素があるとtrueを返す
        $array[$s] += $n;
    }else{
        $array[$s] = $n;
    }
}
arsort($array);
foreach($array as $k => $v){
    echo $k." ".$v."\n";
}
?>