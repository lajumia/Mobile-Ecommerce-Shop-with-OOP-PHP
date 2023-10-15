<?php

include('../database/DB_Controller.php');
$obj = new DB_controller();

$product_id = $_GET['id'];
$insert_into_cart = "INSERT INTO cart (item_id) VALUES ($product_id)";

$run_query = $obj->dbCon->query($insert_into_cart);

header("Location: ../index.php?cart_added=$product_id");