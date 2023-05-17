<?php
require_once __DIR__ . "/Category.php";

class Product {
  
  public $name;
  public $price;
  public $image;
  public $category;

  function __construct($_name, $_price, Category $_category ) {
    $this->name = $_name;
    $this->price = $_price;
    $this->category = $_category;
  }

}