<?php
    $line = trim(fgets(STDIN));
    for($i=0; $i<$line; $i++){
        $a  = explode(" ",trim(fgets(STDIN)));
        if($a[0]  == 2){
            array_pop($stack);
            // print_r($stack);
        }else{
            $stack[] = $a[1];
        }
        for($j=0; $j<count($stack); $j++){
            if($j == count($stack)-1){
                echo $stack[$j]."\n";
            }else{
                echo $stack[$j]." ";
            }
        }
    }
?>