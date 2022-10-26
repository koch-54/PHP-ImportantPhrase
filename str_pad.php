<?php
$input = trim(fgets(STDIN));
echo str_pad($input,3,"0",STR_PAD_LEFT); //(数値,桁数,埋めるもの,左ずめという意味)
?>