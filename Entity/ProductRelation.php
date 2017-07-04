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
        $array = DBManager::getDB()->getDataFromTableWhere(self::TABLE_NAME,'category_slug',$slug);
        $products = array();
        foreach ($array as $product){
            $products[] = new Product($product["id"],$product["name"],$product["description"],$product["image"],$product["price"],$product["exists"],$product["slug"]);
        }
        return $products;
    }

    public function getProductBySlug($slug){
        $product = DBManager::getDB()->getFieldBySlug(self::TABLE_NAME,$slug);
        return $product ? new Product($product["id"],$product["name"],$product["description"],$product["image"],$product["price"],$product["exists"],$product["slug"]) : null;
    }

}