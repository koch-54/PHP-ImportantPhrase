<?php
/*2
  string
  のように表示したい文字列の番号と文字列が与えられる
  文字列のnとn+1番目の文字を空白を入れて表示する */
$n = trim(fgets(STDIN)); 
$string = trim(fgets(STDIN));
if($n < mb_strlen($string)){   //strlenはバイト数（半角は1全角は2でカウントされる。）mb_strlenは文字数カウント。
    echo mb_substr($string, $n-1, 1) . " " . mb_substr($string, $n, 1); //mb_substr(文字列, 頭が0番目で開始文字の番号, バイト数), 文字列の部分表示
}
?>