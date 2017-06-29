<?php
/**
 * Created by PhpStorm.
 * User: st
 * Date: 13.06.2017
 * Time: 20:09
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Utils.php';
require_once 'DB/DBManager.php';
require_once 'Models/Category.php';
require_once 'Controllers/IController.php';
require_once 'Controllers/MainController.php';
require_once 'Controllers/CategoriesController.php';
require_once 'Controllers/ContactsController.php';
require_once 'Controllers/ProductController.php';
require_once 'Controllers/BasketController.php';
require_once 'Controllers/Error404Controller.php';
require_once 'Entity/CategoriesRelation.php';
require_once 'Routing.php';

$rout = new Routing();
$rout->resp();