<?php
$list = array("HND", "NRT", "KIX", "NGO", "NGO");
$number = array_count_values($list);
$max = max($number);
if($number == 1){
    echo "false";
} else {
    echo "true";
}
?>