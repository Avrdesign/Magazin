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

    public function __construct($slug,$page)
    {
        $this->slug = $slug;
        $this->page = $page;
    }

    public function response()
    {
        $categoryRelation = new CategoriesRelation();
        $categories = $categoryRelation->getAllCategories();
        $currentCategory = $categoryRelation->getCategoryBySlug($this->slug);
        include_once 'Views/header.php';
        if (!isset($currentCategory)) {
            include_once 'Views/error404.php';
        }else {
            $productRelation = new ProductRelation();
            $products = $productRelation->getAllProductsByCategorySlug($this->slug);
            include_once 'Views/category.php';
        }
        include_once 'Views/footer.php';
    }

}