<?php 

require_once __DIR__ . '/../Database/db.php';
require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Food.php';
require_once __DIR__ . '/../Models/Toy.php';
require_once __DIR__ . '/../Models/Bed.php';

$food = [];
$toys = [];
$beds = [];

// food array
foreach ($products_db['food'] as $foodData) {
  /*
  $name = $foodData['name'];
  $price = $foodData['price'];
  $available = $foodData['available'];
  $img = $foodData['img'];
  $designed_for = $foodData['designed_for'];
  $expiration_date = $foodData['expiration_date'];

  $food = new Food($name, $price, $available, $img, $designed_for, $expiration_date);
  $food[] = $food;
  */

  array_push($food, new Food($foodData['name'], $foodData['price'], $foodData['available'], $foodData['img'], $foodData['designed_for'], $foodData['expiration_date']));
}

// toys array
foreach ($products_db['toys'] as $toyData) {
  $name = $toyData['name'];
  $price = $toyData['price'];
  $available = $toyData['available'];
  $img = $toyData['img'];
  $designed_for = $foodData['designed_for'];
  $material = $toyData['material'];

  $toy = new Toy($name, $price, $available, $img, $designed_for, $material);
  $toys[] = $toy;
}

// beds array
foreach ($products_db['beds'] as $bedData) {
  $name = $bedData['name'];
  $price = $bedData['price'];
  $available = $bedData['available'];
  $img = $bedData['img'];
  $designed_for = $foodData['designed_for'];
  $size = $bedData['size'];

  $bed = new Bed($name, $price, $available, $img, $designed_for, $size);
  $beds[] = $bed;
}