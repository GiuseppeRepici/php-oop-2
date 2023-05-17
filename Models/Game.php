<?php

include_once __DIR__ . "/Product.php";
include_once __DIR__ . "/Category.php";

class Game extends Product {
    public $type;
    public $brand;

    function __construct($_name, $_price, Category $_category, $_type , $_brand) {
        parent::__construct($_name, $_price, $_category);
        $this->type = $_type;
        $this->brand = $_brand;
      }

      public function hasBrand(){
        return true;
      }

      public function printBrand() {
        return "{$this->brand}";
      }
      public function hasType(){
        return true;
      }
      public function printType() {
        return "{$this->type}";
      }
}
