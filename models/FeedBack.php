<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 15.06.2017
 * Time: 20:41
 */
class FeedBack
{
    private $id;
    private $productId;
    private $text;
    private $userName;
    private $dateCreate;
    private $rating;
    private $status;

    public function __construct($id,$productId,$text,$userName,$dateCreate,$rating,$status)
    {
        $this->id = $id;
        $this->productId = $productId;
        $this->text = $text;
        $this->userName = $userName;
        $this->dateCreate = $dateCreate;
        $this->rating = $rating;
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param mixed $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


}