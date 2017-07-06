<?php

/**
 * Created by PhpStorm.
 * User: alexandrzanko
 * Date: 6/29/17
 * Time: 11:00 AM
 */
class BasketController implements IController
{
    public function response()
    {
        $categoryRelation = new CategoriesRelation();
        $categories = $categoryRelation->getAllCategories();

        include_once 'Views/header.php';
        include_once 'Views/basket.php';
        include_once 'Views/footer.php';
    }
}