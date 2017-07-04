<?php

/**
 * Created by PhpStorm.
 * User: alexandrzanko
 * Date: 6/29/17
 * Time: 10:45 AM
 */
class MainController implements IController
{


    public function response()
    {
        $categories = (new CategoriesRelation())->getAllCategories();
        //$promotionProducts = (new ProductRelation())->getAllPromotionProducts();

        include_once 'Views/header.php';
        include_once "Views/main.php";
        include_once 'Views/footer.php';
    }
}