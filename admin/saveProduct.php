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
Admin::adminValid();

$name = $_POST["name"];
$price = $_POST["price"];
$exists = empty($_POST["exists"]) ? 0 : 1;
$description = $_POST["description"];
$categorySlug = $_POST["category"];

$oldSlug = $_POST["oldSlug"];

$fSrc = [$_POST["file1src"],$_POST["file2src"],$_POST["file3src"],$_POST["file4src"]];

$message = "Ошика сервера!";
$status = "danger";

if (empty($name)){
    $message = "Название не должно быть пустым";
}else if (empty($price)){
    $message = "Цена не должна быть пустой";
}else{

    $productRelation = new ProductRelation();
    $product = $productRelation->getProductBySlug($oldSlug);

    if (isset($product)){
        $imageManager = new ImageManager($_FILES);
        $imageNames = $imageManager->uploadFourImages();
        $images = implode(",", $imageNames);
        $arrayFSrc = implode(",", $fSrc);

        echo "FilesImageSNames = $images <br>";
        $icons = $product->getIcons();
        echo "ProductImageSNames = $icons <br>";
        echo "HiddenImageSNames = $arrayFSrc <br>";
        $newSlug = Utils::rusToLat($name);

//        $product->setName($name);
//        $product->setDescription($description);
//        $product->setExists($exists);
//        $product->setPrice($price);

        // work with DB

        $message = "Данные успешно сохранены!";
        $status = "success";
    }else{
        $message = "Не удалось сохранить данные!";
        $status = "danger";
    }
}

$_SESSION["message"] = array(
    "status"    =>  $status,
    "text"      =>  $message
);
//header('Location: /admin/?page=product&slug='.$oldSlug);





