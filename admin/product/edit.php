<?php
require_once '../../core/boot.php' ;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $img = $_POST['img'];
    $price = $_POST['price'];


    update_product($product_id, $name, $img,$price);

    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $product_id = $_GET['product_id'];
    $product = get_product($product_id);

    include_once '../view/product/_edit.php';
}