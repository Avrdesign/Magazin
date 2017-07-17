<?php
session_start();
require_once '../ImageManager.php';
require_once '../Utils.php';
require_once 'Admin.php';
require_once '../DB/DBManager.php';
require_once '../Entity/ProductRelation.php';
require_once '../Entity/CategoriesRelation.php';
require_once '../Models/Category.php';
require_once '../Models/Product.php';
require_once '../Models/TechProduct.php';

Admin::adminValid();

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
        $imageManager = new ImageManager($_FILES);
        $imageNames = $imageManager->uploadAllImages();
        $images = implode(",", $imageNames);

        $product = new TechProduct($name,$description,$images,$price,$exists, $slug,$categorySlug);
        if($productRelation->insertProduct($product)){
            $message = "Продукт успешно добавлен!";
            $status = "success";
        }else{
            $message = "Ошибка при сохранении данных!";
            $status = "danger";
        }



    }
}

$_SESSION["message"] = array(
    "status"    =>  $status,
    "text"      =>  $message
);
header('Location: /admin/?page=products');





