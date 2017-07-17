<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 15.06.2017
 * Time: 20:25
 */

class TechProduct extends Product
{
    private $categorySlug;

    public function __construct($name,$description,$icons,$price,$exists, $slug,$categorySlug)
    {
        parent::__construct($name,$description,$icons,$price,$exists, $slug);
        $this->categorySlug = $categorySlug;
    }

    /**
     * @return mixed
     */
    public function getCategorySlug()
    {
        return $this->categorySlug;
    }

    /**
     * @param mixed $categorySlug
     */
    public function setCategorySlug($categorySlug)
    {
        $this->categorySlug = $categorySlug;
    }
}