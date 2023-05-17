<?php
require_once __DIR__ . "/Category.php";

class Product {
  
  protected $name;
  protected $price;
  protected $image;
  protected $availability = true;
  protected $category;

  function __construct($_name, $_price,$_image = "", $_availability = "", Category $_category ) {
    $this->name = $_name;
    $this->price = $_price;
    $this->image = $_image;
    $this->availability = $_availability;
    $this->category = $_category;
  }

}