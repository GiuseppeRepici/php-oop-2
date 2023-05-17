<?php
require_once __DIR__ . "/Category.php";

class Product {
  
  public $name;
  public $price;
  public $image;
  public $availability = true;
  public $category;

  function __construct($_name, $_price, $_availability = "", Category $_category ) {
    $this->name = $_name;
    $this->price = $_price;
    $this->availability = $_availability;
    $this->category = $_category;
  }

}