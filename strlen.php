<?php
$input_line = trim(fgets(STDIN));

for($i=0; $i<$input_line; $i++){
    $input = trim(fgets(STDIN));
    $length = strlen($input);
    echo $length."\n";
}
?>