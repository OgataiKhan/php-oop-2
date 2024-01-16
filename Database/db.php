<?php
$database = file_get_contents(__DIR__ .'/db.json');
$products_db = json_decode($database, true);