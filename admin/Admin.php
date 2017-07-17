<?php

/**
 * Created by PhpStorm.
 * User: alexandrzanko
 * Date: 7/2/17
 * Time: 7:45 PM
 */
class Admin
{
    const PRODUCTS = "products";
    const PRODUCT = "product";
    const CATEGORIES = "categories";
    const CATEGORY = "category";
    const INFO = "info";
    const PROMO = "promo";
    const COMMENTS = "comments";


    public static function adminValid(){
        if (isset($_COOKIE["admin"]) and !empty($_COOKIE["admin"])){
            $_SESSION["admin"] = $_COOKIE["admin"];
        }else{
            if (empty($_SESSION["admin"]) or $_SESSION["admin"] != 'ok'){
                header('Location: http://'.$_SERVER["SERVER_NAME"].'/admin/login.php');
                exit;
            }
        }
    }

    public static function adminSessionValid(){
        if (isset($_SESSION["admin"]) and $_SESSION["admin"] == 'ok'){
            header('Location: http://'.$_SERVER["SERVER_NAME"].'/admin/');
            exit;
        }
    }

    public static function checkAdmin($name, $password){
        if($name == 'admin' and $password == '123456'){
            return true;
        }else{
            return false;
        }
    }

    public static function logOutAdmin(){

        if (isset($_COOKIE['admin'])) {
            unset($_COOKIE['admin']);
            setcookie('admin', null, -1);
        }
        if (isset($_SESSION["admin"])){
            unset($_SESSION["admin"]);
        }

        header('Location: http://'.$_SERVER["SERVER_NAME"].'/admin/login.php');
    }
}