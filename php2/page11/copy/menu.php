<?php 
class Menu {
    public $name;
    public $price;
    public $image;

    public function __construct($name, $price, $image) {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    public function hello() {
        echo 'Hallo, saya adalah '.$this->name;
    }
}
?>