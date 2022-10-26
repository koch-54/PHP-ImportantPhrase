<?php
// staticを理解しよう
class Item {
    public static $tax = 1.08; //クラス内の固定値
    public $price;
    public $quantity;

    public function __construct($newPrice, $newQuantity){
        $this->price = $newPrice;
        $this->quantity = $newQuantity;
    }

    public function getTotalAmount() {
        return round($this->price * $this->quantity * self::$tax);//roundは小数点以下切り捨て、selfはクラス内でstaticを呼び出す
    }
}

$apple = new Item(120, 15);
$total = $apple->getTotalAmount();
echo "合計金額は" . $total . "円です。\n";
$orange = new Item(85, 32);
echo "合計金額は" . $orange->getTotalAmount() . "円です。\n";
?>
