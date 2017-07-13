<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 15.06.2017
 * Time: 20:13
 */
class Product
{
    protected $id;
    protected $name;
    protected $description;
    protected $icons;
    protected $price;
    protected $exists;
    protected $slug;


    public function __construct($id,$name,$description,$icons,$price,$exists, $slug)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->icons = $icons;
        $this->price = $price;
        $this->exists= $exists;
        $this->slug = $slug;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $icons
     */
    public function setIcons($icons)
    {
        $this->icons = $icons;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getIcons()
    {
        return $this->icons;
    }

    public function getURI(){
        return Rout::base_url().Rout::PRODUCT.'/'.$this->slug;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getExists()
    {
        return $this->exists;
    }

    /**
     * @param mixed $exists
     */
    public function setExists($exists)
    {
        $this->exists = $exists;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

}