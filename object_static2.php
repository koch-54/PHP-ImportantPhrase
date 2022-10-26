<?php
// staticを理解しよう
class Item {
    public static $tax = 1.08; //クラス内の固定値
    // public $price;
    // public $quantity;

    // public function __construct($newPrice, $newQuantity){
    //     $this->price = $newPrice;
    //     $this->quantity = $newQuantity;
    // }

    public static function getTotalAmount($price, $quantity) {  
        return round($price * $quantity * self::$tax);//roundは小数点以下切り捨て、selfはクラス内でstaticを呼び出す
    }
}

$total = Item::getTotalAmount(120, 15); //メソッドがstatic functionのときオブジェクトを作らなくてもそのままメソッドを使える
echo "合計金額は" . $total . "円です。\n";

?>
