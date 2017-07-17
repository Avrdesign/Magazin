<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 15.06.2017
 * Time: 18:48
 */

class Category
{
    private $name;
    private $slug;

    public function __construct($name,$slug = null)
    {
        $this->name = $name;
        if ($slug){
            $this->slug = $slug;
        }else{
            $this->slug = Utils::rusToLat($name);
        }
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
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->slug = Utils::rusToLat($name);
    }

}