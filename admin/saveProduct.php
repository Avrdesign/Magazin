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
    /**
     * @var TechProduct $product
     */
    if (isset($product)){

        $newSlug = Utils::rusToLat($name);
        $imageManager = new ImageManager($_FILES);
        $imageNames = $imageManager->uploadFourImages();
        $icons = $product->getIcons();
        $iconsArray = explode(',',$icons);
        $iconsArray = imageFirstStep($iconsArray,$imageNames);
        $iconsArray = imageSecondStep($iconsArray,$fSrc);
        $iconsNewStr = implode(",", $iconsArray);



        $product->setName($name);
        $product->setSlug($newSlug);
        $product->setDescription($description);
        $product->setExists($exists);
        $product->setPrice($price);
        $product->setIcons($iconsNewStr);
        $product->setCategorySlug($categorySlug);

        if($productRelation->updateProduct($product, $oldSlug)){
            $message = "Данные успешно сохранены!";
            $status = "success";
            $oldSlug = $newSlug;
        }else{
            $message = "Ошибка при сохранении данных!";
            $status = "danger";
        }
    }else{
        $message = "Не удалось сохранить данные!";
        $status = "danger";
    }
}
function imageSecondStep($arr_1,$arr_2){
    for($i=0; $i<count($arr_2); $i++){
        if($arr_2[$i] == "img.png"){
            $arr_1[$i] = $arr_2[$i];
        }
    }
    return $arr_1;
}

function imageFirstStep($arr_1,$arr_2){
    for($i=0; $i<count($arr_2); $i++){
        if($arr_2[$i] != "img.png"){
            $arr_1[$i] = $arr_2[$i];
        }
    }
    return $arr_1;
}

$_SESSION["message"] = array(
    "status"    =>  $status,
    "text"      =>  $message
);

header('Location: /admin/?page=product&slug='.$oldSlug);





