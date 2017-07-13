<?php

/**
 * Created by PhpStorm.
 * User: alexandrzanko
 * Date: 7/2/17
 * Time: 3:40 PM
 */
class ProductRelation
{
    const TABLE_NAME = 'products';

    public function getAllProductsByCategorySlug($slug){
        $array = DBManager::getDB()->getArrayFromTableWhere(self::TABLE_NAME,'category_slug',$slug);
        $products = array();
        foreach ($array as $product){
            $products[] = new Product($product["id"],$product["name"],$product["description"],$product["icons"],$product["price"],$product["is_exists"],$product["slug"]);
        }
        return $products;
    }

    public function getProductBySlug($slug){
        $product = DBManager::getDB()->getFieldFromTableWhere(self::TABLE_NAME,'slug',$slug);
        return $product ? new Product($product["id"],$product["name"],$product["description"],$product["icons"],$product["price"],$product["is_exists"],$product["slug"]) : null;
    }

    public function getTechProductBySlug($slug){
        $product = DBManager::getDB()->getFieldFromTableWhere(self::TABLE_NAME,'slug',$slug);
        return $product ? new TechProduct($product["id"],$product["name"],$product["description"],$product["icons"],$product["price"],$product["is_exists"],$product["slug"],$product["category_slug"]) : null;
    }

    public function getAllTechProducts(){
        $array = DBManager::getDB()->getAllData(self::TABLE_NAME);
        $products = array();
        foreach ($array as $product){
            $products[] = new TechProduct($product["id"],$product["name"],$product["description"],$product["icons"],$product["price"],$product["is_exists"],$product["slug"], $product["category_slug"]);
        }
        return $products;
    }

}