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
    private $rating;

    public function __construct($id,$name,$description,$icons,$price,$exists, $slug,$categoryId)
    {
        parent::__construct($id,$name,$description,$icons,$price,$exists, $slug);
        $this->categorySlug = $categoryId;
    }


    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
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