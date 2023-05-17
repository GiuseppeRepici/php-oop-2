<?php

include_once __DIR__ . "/Product.php";
include_once __DIR__ . "/Category.php";

class Bunk extends Product {
    public $color;
    public $brand;

    function __construct($_name, $_price,  $_availability , Category $_category, $_color , $_brand) {
        parent::__construct($_name, $_price,$_availability, $_category);
        $this->color = $_color;
        $this->brand = $_brand;
      }
}