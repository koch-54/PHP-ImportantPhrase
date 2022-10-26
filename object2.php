<?php
// クラスで変数を管理する
class Player {
    public $myName; //メンバ変数
    public function __construct($name) {    //__constructはnewでオブジェクトを作ったときに呼び出される場所
        $this->myName = $name; //$this->メンバ変数 はクラス内でメンバ変数にアクセスする。オブジェクトの変数の塊
    }
    public function walk(){
        echo $this->myName . "は荒野を歩いていた。" . "\n";
    }
}

$player1 = new Player("戦士"); //メンバ変数の引数に戦士を入れてそれを$player1というオブジェクトと定義する
$player1 -> walk();  //上で定義したオブジェクトからwalkメソッドを呼び出す

$player2 = new Player("魔法使い"); //メンバ変数の引数に魔法使いを入れてそれを$player2というオブジェクトと定義する
$player2 ->walk(); 

?>
