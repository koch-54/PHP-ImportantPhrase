<?php
// クラスを作成する
class Player {
   public function walk(){    //クラスの中の関数はメソッドと呼ぶ
    $message = "勇者は荒野を歩いていた。";
    echo $message;
}
}

$player1 = new Player(); //クラスにnewをつけるとオブジェクトになる。
$player1->walk(); //オブジェクトからメソッドを呼び出す
?>
