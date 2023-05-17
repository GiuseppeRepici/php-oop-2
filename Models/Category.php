<?php

class Category {
    public $name;

    function __construct($_name) {
        $this->name = $_name;
    }

    public function printCategory() {
        return "{$this->name}";
      }
}

  