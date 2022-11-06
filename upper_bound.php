<?php
//回答
function binary_branch($array, $serch){
    $left = 0;
    $right = count($array);
    while($left < $right){
        $mid = (int)(($left+$right) / 2);
        if($array[$mid] <= $serch){
            $left = $mid + 1;
        }else{
            $right = $mid;
        } 
    }
    return $right;
}

$input = trim(fgets(STDIN));
if($input === 1){
    $list= $list1 = trim(fgets(STDIN));
}else{
    $list  = trim(fgets(STDIN));
    $list1 = explode(" ", $list);
}

sort($list1);

$line = trim(fgets(STDIN));
for($i=0; $i<$line; $i++){
    $border = trim(fgets(STDIN));
    $right = binary_branch($list1, $border);
    //echo  preg_match('/'.$border.'/', $list)." ";
    echo count($list1)-$right."\n";
}
?>
