<?php
    $s = fgets(STDIN);

    $s = explode(" ", $s); //splitはphp5以降から非推奨なので、かわりにexplodeを使う。文字列を""の中の単位で配列にする。

    echo $s[0] . "\n";
    echo $s[1];
?>