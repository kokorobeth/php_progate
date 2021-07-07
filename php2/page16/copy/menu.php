<?php 
class Menu {
    public $name;
    public $image;
    public $price;
    public $orderCount = 0;

    public function __construct($name, $price, $image) {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    public function hello() {
        echo 'Saya adalah '.$this->name;
    }

    public function getImage() {
        return $this->image;
    }

    public function getName() {
        return $this->name;
    }

    public function getOrderCount() {
        return $this->getOrderCount;
    }

    public function setOrderCount($orderCount) {
        $this->orderCount = $orderCount;
    }

    public function getTaxIncludedPrice() {
        return round($this->price * 1.0725, 2);
    }
}
?>