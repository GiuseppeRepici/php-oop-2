<?php
require_once __DIR__ . "/Category.php";

class Product {
  
  public $name;
  public $price;
  public $category;

  function __construct($_name, $_price, Category $_category ) {
    $this->name = $_name;
    $this->price = $_price;
    $this->category = $_category;
  }

  public function printName() {
    return "{$this->name}" ;
  }

  public function printPrice() {
    return "{$this->price}" ;
  }

  public function hasCalories(){
    return false;
  }

  public function hasBrand(){
    return false;
  }

  public function hasType(){
    return false;
  }

  public function hasColor(){
    return false;
  }

  public function setPrice($_price) {
    if (!is_int($_price)) {
        throw new Exception("Price deve essere un numero");
    }
  }
}