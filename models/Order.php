<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 15.06.2017
 * Time: 21:08
 */
class Order
{
    private $id;
    private $totalPrice;
    private $status;
    private $products;
    private $userName;
    private $userAddress;
    private $userPhone;
    private $dateCreate;
    private $comment;

    public function __construct($id,$totalPrice,$status,$products,$userName,$userAddress,$userPhone,$dateCreate,$comment)
    {
        $this->id = $id;
        $this->totalPrice = $totalPrice;
        $this->status = $status;
        $this->products = $products;
        $this->userName = $userName;
        $this->userAddress = $userAddress;
        $this->userPhone = $userPhone;
        $this->dateCreate = $dateCreate;
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
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
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * @return mixed
     */
    public function getUserPhone()
    {
        return $this->userPhone;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
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

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @return mixed
     */
    public function getUserAddress()
    {
        return $this->userAddress;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

}