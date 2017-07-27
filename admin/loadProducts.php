<?php
session_start();
require_once '../Utils.php';
require_once '../Models/Product.php';
require_once '../Models/TechProduct.php';
require_once '../DB/DBManager.php';
require_once '../Entity/ProductRelation.php';

$message = "Ошика сервера !";
$status = "danger";

if(isset($_POST['parse'])){
    $categorySlug = $_POST['category'];
    $productRelation = new ProductRelation();
    $products = array();
    for ($i=0; $i<count($_POST); $i++){
        if($i == count($_POST)-2 or empty($_POST["name-".$i])){
            break;
        }
        $product = new TechProduct(
            $_POST["name-".$i],
            $_POST["description-".$i],
            $_POST["icon-".$i],
            $_POST["price-".$i],
            $_POST["exists-".$i],
            Utils::rusToLat($_POST["name-".$i]),
            $categorySlug
        );
        $products[]=$product;
        $productRelation->insertProduct($product);
    }

    $message = "Данные сохранены";
    $status = "success";
}

$_SESSION["message"] = array(
    "status"    =>  $status,
    "text"      =>  $message
);
header('Location:  /admin/?page=parse');


