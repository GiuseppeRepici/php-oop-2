<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";

class Food extends Product {
    public $calories;

    function __construct($_name, $_price, Category $_category, $_calories) {
        parent::__construct($_name, $_price, $_category);
        $this->calories = $_calories;
    }
}    
