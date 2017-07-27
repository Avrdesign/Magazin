<?php
session_start();
/**
 * Created by PhpStorm.
 * User: st
 * Date: 27.07.2017
 * Time: 18:58
 */
require_once '../ParserHTML.php';
error_reporting(0);

$message = "Ошика сервера !";
$status = "danger";
$result = array();

$category = $_POST["category"];
$url = $_POST["url"];
if ($content = file_get_contents($url)){
    $parser = new ParserHTML();
    $parser->setContent($content);

    $products = $parser->getElementsByClassName("result__root");

    /**
     * @var DOMElement $product;
     */
    foreach ($products as $key=>$product){
        $result[$key]["icon"] = $product->getElementsByTagName('img')->item(0)->getAttribute('src');
        $result[$key]["name"] = substr($product->getElementsByTagName('img')->item(0)->getAttribute('alt'),0,-3);
        $result[$key]["price"] = $product->getElementsByTagName('span')->item(2)->getAttribute('data-price');
    }
    $status = "success";
    $message = count($result)." продукт(ов) загружены";

}else{
    $message = "Не корректный адрес";
}

$_SESSION["message"] = array(
    "status"    =>  $status,
    "text"      =>  $message,
    "products"  => $result
);
header('Location:  /admin/?page=parse');
