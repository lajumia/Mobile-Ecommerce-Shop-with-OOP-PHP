<?php
// Database class for connection
require('database/DB_Controller.php');

$db = new DB_controller();


// Fetching Product from database
require('database/Product.php');

$products = new Product($db);

$productInObj = $products->fetch_product();



