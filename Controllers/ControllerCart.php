<?php 

require_once __DIR__ . '/../Models/User.php';
require_once __DIR__ . '/../Models/RegisteredUser.php';
require_once __DIR__ . '/../Models/CreditCard.php';

$cart = [];

// Adding 3 random products to the cart for the sake of example
array_push($cart, $food[0], $toys[0], $beds[0]);

// Creating a temporary active user for the sake of example
$active_user = new RegisteredUser('MarioRossi', new CreditCard(12345, 2026));

$totalPrice = 0;

// Calculating total price before discount
foreach ($cart as $product) {
  $totalPrice += $product->get_price();
}

// Applying discount
$totalPrice *= (1 - ($active_user->get_discount() / 100));
