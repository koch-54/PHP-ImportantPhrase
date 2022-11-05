<?php
$input = trim(fgets(STDIN));
$lists = explode(" ", trim(fgets(STDIN)));

$line = trim(fgets(STDIN));
for($i=0; $i<$line; $i++){
    $s = trim(fgets(STDIN));
    if( binary_search($lists,$s)){
        echo "Yes"."\n";
    }else{
        echo "No"."\n";
    }
}
    
function binary_search($list,$sertch){  
    //二分探索の初期値（キーの値）  
    $start = 0;
    $end = count($list)-1;
    //二分探索
    while($start <= $end){
        $middle = (int)(($start+$end)/2);
        if($list[$middle] === $sertch){
            return true;
            //echo $sertch."\n";
        }elseif($list[$middle] < $sertch){
            $start = $middle+1;
        }else{
            $end = $middle-1;
        }
    }
    return false;
}
    //echo $sertch."\n";
?>