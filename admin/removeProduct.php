<?php
session_start();
require_once '../Utils.php';
require_once 'Admin.php';
require_once '../DB/DBManager.php';
require_once '../Entity/ProductRelation.php';
require_once '../Models/Product.php';
require_once '../Models/TechProduct.php';

Admin::adminValid();

// category add to data base
$slug = $_POST["slug"];

$message = "Ошика сервера $slug !";
$status = "danger";

$productRelation = new ProductRelation();
$product = $productRelation->getProductBySlug($slug);
if (isset($product)){
    if($productRelation->deleteProduct($product)){
        $message = "Продукт успешно удален!";
        $status = "success";
    }else{
        $message = "Ошибка при удалении!";
        $status = "danger";
    }
}else{
    $message = "Продукта $slug не существует";
    $status = "danger";
}

$_SESSION["message"] = array(
    "status"    =>  $status,
    "text"      =>  $message
);
header('Location:  /admin/?page=products');
