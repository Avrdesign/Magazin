<?php

/**
 * Created by PhpStorm.
 * User: alexandrzanko
 * Date: 7/2/17
 * Time: 7:45 PM
 */
class Admin
{

    public static function adminValid(){
        if (!empty($_COOKIE["admin"]) and $_COOKIE["admin"] == 'ok'){
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
}