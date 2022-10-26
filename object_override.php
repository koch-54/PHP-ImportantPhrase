<?php
// メソッドのオーバーライド
class Box {
    public $myItem;

    public function __construct($item) {
        $this->myItem = $item;
    }

    public function open() {
        echo "宝箱を開いた。".$this->myItem."を手に入れた。\n";
    }
}

class MagicBox extends Box {
    public function look(){
        echo "宝箱は怪しく輝いている。\n";
    }
    //オーバーライド：親クラスのメソッドを子クラスで書き換える
    public function open() {
        echo "宝箱を開いた。" . $this->myItem . "が襲ってきた！\n";
    }
}

$box = new Box("鋼鉄の剣");
$box->open();
$magicbox = new MagicBox("モノマネモンスター");
$magicbox->look();
$magicbox->open();
?>
