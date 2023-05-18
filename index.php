<?php
require_once "./models/Product.php";
require_once "./models/Category.php";
require_once "./models/Game.php";
require_once "./models/Bunk.php";
require_once "./models/Food.php";

$dogC = new Category("Cane");
$catC = new Category("Gatto");




$croccantinicat = new Food("Sterilizzato al salmone", 4, $catC, 250);
$croccantinidog = new Food("A base di manzo e salmone", 5, $dogC, 450);
$ball = new Game("Signature Ball", 22, $dogC, "extra strong", "KONG");
$scratchingpost = new Game("Tiragraffi", 17, $catC, "extra strong", "Croci");
$bunkdog = new Bunk("Dog bunk", 199, $dogC, "blue", "Apexchaser");
$bunkcat = new Bunk("Cat bunk", 56, $catC, "red", "Cyclysio");
$errore = new Product("errore" , 10, $dogC );

$products = [
  $croccantinicat,
  $croccantinidog,
  $ball,
  $scratchingpost,
  $bunkdog,
  $bunkcat
];


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <div>
      <?php try {
        $errore->setPrice("prova errore");
      } catch (Exception $er) {
        echo $er;
      } ?>
  </div>


  <?php foreach ($products as $product) { ?>
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?php echo $product->printName() ?></h5>
        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $product->category->printCategory() ?></h6>
        <p class="card-text">Prezzo: <?php echo $product->printPrice() ?></p>
        <?php if ($product->hasCalories()) { ?>
          <p class="card-text">Calorie: <?php echo $product->printCalories() ?></p>
        <?php } ?>
        <?php if ($product->hasBrand()) { ?>
          <p class="card-text">Marca: <?php echo $product->printBrand() ?></p>
        <?php } ?>
        <?php if ($product->hasType()) { ?>
          <p class="card-text">Tipo: <?php echo $product->printType() ?></p>
        <?php } ?>
        <?php if ($product->hasColor()) { ?>
          <p class="card-text">Colore: <?php echo $product->printColor() ?></p>
        <?php } ?>

      </div>
    </div>
  <?php } ?>

</body>

</html>