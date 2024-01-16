<?php
require_once __DIR__ . '/Controllers/ControllerProduct.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 2</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- /Bootstrap -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- /Font Awesome -->
  <!-- My css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- /My css -->
</head>

<body>
  <header class="py-3">
    <div class="container">
      <h1 class="text-center">Cats & Dogs</h1>
    </div>
  </header>
  <main>
    <div class="container">
      <ul class="d-flex justify-content-center flex-wrap">
        <!-- Food cards -->
        <?php foreach ($food as $food_item) : ?>
          <li class="card m-3 shadow" style="width: 18rem;">
            <img src="img/<?php echo $food_item->get_img(); ?>" class="card-img-top object-fit-cover" alt="<?php echo $food_item->get_name(); ?>">
            <div class="card-body text-center">
              <h5 class="card-title"><i class="fa-solid fa-<?php if ($food_item->get_designed_for() === "cats") {
                echo 'cat';
              } elseif ($food_item->get_designed_for() === "dogs") {
                echo 'dog';
              } ?>"></i> <?php echo $food_item->get_name(); ?></h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Food <?php if (!$food_item->get_available()) : ?><span class="text-danger ms-1">Out of stock</span><?php endif; ?></h6>
              <p class="card-text">Expiration date: <?php echo $food_item->get_expiration_date(); ?></p>
              <p class="card-text text-end fs-3"><?php echo $food_item->get_price(); ?></p>
            </div>
          </li>
        <?php endforeach; ?>
        <!-- /Food cards -->
        <!-- Toy cards -->
        <?php foreach ($toys as $toy) : ?>
          <li class="card m-3 shadow" style="width: 18rem;">
            <img src="img/<?php echo $toy->get_img(); ?>" class="card-img-top object-fit-cover" alt="<?php echo $toy->get_name(); ?>">
            <div class="card-body text-center">
              <h5 class="card-title"><i class="fa-solid fa-<?php if ($toy->get_designed_for() === "cats") {
                echo 'cat';
              } elseif ($toy->get_designed_for() === "dogs") {
                echo 'dog';
              } ?>"></i> <?php echo $toy->get_name(); ?></h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Toy <?php if (!$toy->get_available()) : ?><span class="text-danger ms-1">Out of stock</span><?php endif; ?></h6>
              <p class="card-text">Material: <?php echo $toy->get_material(); ?></p>
              <p class="card-text text-end fs-3"><?php echo $toy->get_price(); ?></p>
            </div>
          </li>
        <?php endforeach; ?>
        <!-- /Toy cards -->
        <!-- Bed cards -->
        <?php foreach ($beds as $bed) : ?>
          <li class="card m-3 shadow" style="width: 18rem;">
            <img src="img/<?php echo $bed->get_img(); ?>" class="card-img-top object-fit-cover" alt="<?php echo $bed->get_name(); ?>">
            <div class="card-body text-center">
              <h5 class="card-title"><i class="fa-solid fa-<?php if ($bed->get_designed_for() === "cats") {
                echo 'cat';
              } elseif ($bed->get_designed_for() === "dogs") {
                echo 'dog';
              } ?>"></i> <?php echo $bed->get_name(); ?></h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Bed <?php if (!$bed->get_available()) : ?><span class="text-danger ms-1">Out of stock</span><?php endif; ?></h6>
              <p class="card-text">Size: <?php echo $bed->get_size(); ?></p>
              <p class="card-text text-end fs-3"><?php echo $bed->get_price(); ?></p>
            </div>
          </li>
        <?php endforeach; ?>
        <!-- /Bed cards -->
      </ul>
    </div>
  </main>
</body>

</html>