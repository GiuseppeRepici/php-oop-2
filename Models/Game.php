<?php

include_once __DIR__ . "/Product.php";
include_once __DIR__ . "/Category.php";

class Game extends Product {
    public $type;
    public $brand;

    function __construct($_name, $_price,  $_availability , Category $_category, $_type , $_brand) {
        parent::__construct($_name, $_price,$_availability, $_category);
        $this->type = $_type;
        $this->brand = $_brand;
      }
}
