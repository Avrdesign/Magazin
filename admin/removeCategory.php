<?php
session_start();
require_once '../Utils.php';
require_once 'Admin.php';
require_once '../DB/DBManager.php';
require_once '../Entity/CategoriesRelation.php';
require_once '../Models/Category.php';
Admin::adminValid();

// category add to data base
$slug = $_POST["slug"];

$message = "Ошика сервера $slug !";
$status = "danger";

$categoryRelation = new CategoriesRelation();
$category = $categoryRelation->getCategoryBySlug($slug);
if (isset($category)){
    if($categoryRelation->deleteCategory($category)){
        $message = "Категория успешно удалена!";
        $status = "success";
    }else{
        $message = "Ошибка при удалении!";
        $status = "danger";
    }
}else{
    $message = "Категории $slug не существует";
    $status = "danger";
}

$_SESSION["message"] = array(
    "status"    =>  $status,
    "text"      =>  $message
);
header('Location:  /admin/?page=categories');
