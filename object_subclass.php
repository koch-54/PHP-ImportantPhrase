<?php
// クラスを継承する
class Box {
    public $myItem;
    
    public function __construct() {
        $this->myItem = "新しいアイテム";
    }
    
    public function open(){
        echo "宝箱を開いた。" . $this->myItem . "を手に入れた。";
    }
}

//サブクラス
class JewelryBox extends Box {
    public function look(){
        echo "宝箱はキラキラと輝いている。\n";
    }
}
$box = new Box();
$box->open();
echo "\n";

$jewelryBox = new JewelryBox();
$jewelryBox->look();
$jewelryBox->open(); // 子クラスのオブジェクトから親クラスのメソッドを呼び出せる。オブジェクトとクラス。

?>
