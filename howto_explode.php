<?php
    $input_line = trim(fgets(STDIN));
    [$n , $m, $k] = explode(" ", $input_line);
    for($i = 0; $i < $n; $i++){
        $sankasya = trim(fgets(STDIN));
        $answer_list = explode(" ", $sankasya);
        $point = 0;
        
        for($j=0; $j<$m; $j++){
            if($answer_list[$j] == $k){
                $point++;
            }
        }
        echo $point . "\n";
    }
?>