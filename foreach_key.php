<?php
// 標準入力から値をループで取得
while($input = trim(fgets(STDIN))){
	// カンマで分割
	$key_value = explode(",", $input);
	$key = $key_value[0];
	$value = $key_value[1];
	// 連想配列として$itemに代入
	$result[$key] = $value;
}
// 得点が高い順番に並び替え、print_rで出力後、
arsort($result);
print_r($result);

//valueを大きい順に並び変えた$resultを使って、keyが戦士になるのを順番に探す。
foreach($result as $key => $value){
    $array[] = $key;       //戦士が何番目にあるのかを知りたいので、keyの配列を新しく作り合致したら要素数を数えるようにした
    if($key == "戦士"){
        $num = count($array);
    }
}
echo $num;
?>
