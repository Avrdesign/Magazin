<?php
/**
 * Created by PhpStorm.
 * User: alexandrzanko
 * Date: 7/13/17
 * Time: 3:25 PM
 */
session_start();
Admin::adminValid();

// category add to data base


$_SESSION["message"] = array(
    "status"    =>  "success",
    "text"      =>  "Категория успешно добавлена"
);
header('Location:  /admin/?page=categories');
