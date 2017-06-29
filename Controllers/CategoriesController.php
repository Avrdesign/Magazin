<?php

/**
 * Created by PhpStorm.
 * User: alexandrzanko
 * Date: 6/29/17
 * Time: 11:09 AM
 */
class CategoriesController implements IController
{

    private $slug;

    public function __construct($slug)
    {
        $this->slug = $slug;
    }

    public function response()
    {
        $relation = new CategoriesRelation();
        $categories = $relation->getAllCategories();
        include_once 'Views/header.php';
        include_once 'Views/categories.php';
        include_once 'Views/footer.php';
    }
}