<?php
//与えられた文字が、ある文字列にいくつ含まれているかを重複ありでカウントする。
$reserch = trim(fgets(STDIN));
$string = trim(fgets(STDIN));
$counter = 0;

for($i=0; $i<mb_strlen($string); $i++){ //文字列を頭から見たいのでforでまわす
    if(mb_substr($string, $i, mb_strlen($reserch)) == $reserch){ //$i番目から$reserchの文字数だけみる
        $counter++;
    }
}
echo $counter;
?>
