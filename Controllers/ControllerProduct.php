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
  array_push($food, new Food($foodData['name'], $foodData['price'], $foodData['available'], $foodData['img'], $foodData['designed_for'], $foodData['expiration_date']));
}

// toys array
foreach ($products_db['toys'] as $toyData) {
  array_push($toys, new Toy($toyData['name'], $toyData['price'], $toyData['available'], $toyData['img'], $toyData['designed_for'], $toyData['material']));
}

// beds array
foreach ($products_db['beds'] as $bedData) {
  array_push($beds, new Bed($bedData['name'], $bedData['price'], $bedData['available'], $bedData['img'], $bedData['designed_for'], $bedData['size']));
}