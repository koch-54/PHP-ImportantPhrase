<?php
$input = trim(fgets(STDIN));
$first = mb_substr($input, 0, 1); //文字列の頭の文字
$end = mb_substr($input, -1); //文字列の最後の文字
for($i=ord($first); $i<=ord($end); $i++){ //ord(string)は文字列に対応する数字を返す
    echo chr($i)."\n"; //chr()は数字に対応する文字列を返す
}
?>
