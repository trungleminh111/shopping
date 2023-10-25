<?php
require_once '../../core/boot.php' ;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categories_id = $_POST['categories_id'];
    $name = $_POST['name'];
    $img = $_POST['img'];

    update_category($categories_id, $name, $img);

    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $categories_id = $_GET['categories_id'];
    $category = get_category($categories_id);

    include_once '../view/category/_edit.php';
}