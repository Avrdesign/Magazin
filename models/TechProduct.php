<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 15.06.2017
 * Time: 20:25
 */

class TechProduct extends Product
{
    private $categoryId;
    private $rating;

    public function __construct($id, $name, $description, $icon, $price,$categoryId)
    {
        parent::__construct($id, $name, $description, $icon, $price);
        $this->categoryId = $categoryId;
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
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param mixed $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }
}