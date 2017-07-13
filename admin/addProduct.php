<?php
session_start();
require_once '../ImageManager.php';
require_once '../Utils.php';
require_once '../DB/DBManager.php';
require_once '../Entity/ProductRelation.php';
require_once '../Entity/CategoriesRelation.php';
require_once '../Models/Category.php';
require_once '../Models/Product.php';
Admin::adminValid();



$imageManager = new ImageManager($_FILES);
$imageNames = $imageManager->uploadAllImages();
$name = $_POST["name"];
$price = $_POST["price"];
$exists = empty($_POST["exists"]) ? 0 : 1;
$description = $_POST["description"];
$categorySlug = $_POST["category"];

$message = "Ошика сервера!";
$status = "danger";

if (empty($name)){
    $message = "Название не должно быть пустым";
}else if (empty($price)){
    $message = "Цена не должна быть пустой";
}else if (empty($categorySlug)){
    $message = "Выберите категорию";
}else{
    $slug = Utils::rusToLat($name);
    $images = implode(",", $imageNames);

    $categoryRelation = new CategoriesRelation();
    $category = $categoryRelation->getCategoryBySlug($categorySlug);

    $productRelation = new ProductRelation();
    $product = $productRelation->getProductBySlug($slug);

    if (empty($category)){
        $message = "Категории $categorySlug не существует";
        $status = "danger";
    }else if (isset($product)){
        $message = "Продукт названием $name существует";
        $status = "danger";
    }else{
        $newProduct = new Product();
        // work with DB

        $message = "Данные успешно сохранены!";
        $status = "success";
    }
}

$_SESSION["message"] = array(
    "status"    =>  $status,
    "text"      =>  $message
);
header('Location: /admin');





