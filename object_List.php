<?php
class Enemy {
    public $myName;
    
    public function __construct($name){
        $this->myName = $name;
        }
    public function attack() {
        echo $this->myName . "は勇者を攻撃した。\n";
        }
}

$enemies[] = new Enemy("スライム");
$enemies[] = new Enemy("モンスター");
$enemies[] = new Enemy("ドラゴン");

foreach($enemies as $enemy){
    $enemy->attack();
}
?>
