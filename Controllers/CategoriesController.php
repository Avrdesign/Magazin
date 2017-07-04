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
    private $page;

    public function __construct($slug)
    {
        $this->slug = $slug;
        if (isset($_GET['page'])){
            $this->page = (int)$_GET['page'];
        }
    }

    public function response()
    {
        $categories = (new CategoriesRelation())->getAllCategories();
        $products = (new ProductRelation())->getAllProductsByCategorySlug($this->slug);
        $currentCategory = $this->slug;
        include_once 'Views/header.php';
        include_once "Views/category.php";
        include_once 'Views/footer.php';
    }

}