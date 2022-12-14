<?php
//二分探索を利用して、$koho以上の要素の個数を出力する。
function binary_branch($a, $val){
    $left = 0;
    $right = count($a);
   while ($right > $left) {
        $mid = (int)(($left + $right) / 2);
        if ($a[$mid] < $val) { 
            $left = $mid + 1; //中間値が一定の値にちかづいていって、+1が条件を抜ける原因になる
            } else {
                $right = $mid;//$rightの値が$serchの値に限りなく近づく
                }
    }
return $right;
}
    $youso = trim(fgets(STDIN));
    if($youso === 1){
        $lists = trim(fgets(STDIN));
    }else{
    $lists = explode(" ", trim(fgets(STDIN)));
    sort($lists);
}
    
    
    $line = trim(fgets(STDIN));
    for($i=0; $i<$line; $i++){
        $koho = trim(fgets(STDIN));
        $result = binary_branch($lists, $koho);
        echo round(count($lists)-$result)."\n";
    }
    
    
?>
