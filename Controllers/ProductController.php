<?php

/**
 * Created by PhpStorm.
 * User: alexandrzanko
 * Date: 6/29/17
 * Time: 11:12 AM
 */
class ProductController implements IController
{

    private $slug;


    public function __construct($slug)
    {
        $this->slug = $slug;
    }

    public function response()
    {
        $categories = (new CategoriesRelation())->getAllCategories();
        $product = (new ProductRelation())->getProductBySlug($this->slug);
        include_once 'Views/header.php';
        include_once "Views/product.php";
        include_once 'Views/footer.php';
    }



}