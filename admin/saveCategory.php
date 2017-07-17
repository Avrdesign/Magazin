<?php
session_start();
require_once '../Utils.php';
require_once 'Admin.php';
require_once '../DB/DBManager.php';
require_once '../Entity/CategoriesRelation.php';
require_once '../Models/Category.php';
Admin::adminValid();

// category add to data base
$name = $_POST["name"];
$oldSlug = $_POST["oldSlug"];

$message = "Ошика сервера!";
$status = "danger";

if (empty($name)){
    $message = "Название не должно быть пустым";
}else{
    $slug = Utils::rusToLat($name);
    $categoryRelation = new CategoriesRelation();
    $category = $categoryRelation->getCategoryBySlug($categorySlug);
    if (isset($category)){
        $category->setName($name);
        if($categoryRelation->updateCategory($category, $oldSlug)){
            $message = "Категория успешно сохранена!";
            $status = "success";
        }else{
            $message = "Ошибка при сохранении данных!";
            $status = "danger";
        }
    }else{
        $message = "Категории $slug не существует";
        $status = "danger";
    }
}

$_SESSION["message"] = array(
    "status"    =>  $status,
    "text"      =>  $message
);
header('Location:  /admin/?page=categories');
