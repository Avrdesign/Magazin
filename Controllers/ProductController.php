<?php

/**
 * Created by PhpStorm.
 * User: alexandrzanko
 * Date: 6/29/17
 * Time: 11:12 AM
 */
class ProductController implements IController
{

    private $productSlug;
    private $categorySlug;


    public function __construct($categorySlug,$productSlug)
    {
        $this->categorySlug = $categorySlug;
        $this->productSlug = $productSlug;
    }

    public function response()
    {
        echo 'ProductController';
    }

}