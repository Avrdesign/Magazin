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
        $currentCategory = $categoryRelation->getCategoryBySlug($this->slug);
        if (!isset($currentCategory)) {
            print 'Error';
            return;
        }
        $productRelation = new ProductRelation();
        $categories = $categoryRelation->getAllCategories();
        $products = $productRelation->getAllProductsByCategorySlug($this->slug);
        include_once 'Views/header.php';
        include_once 'Views/category.php';
        include_once 'Views/footer.php';
    }

}