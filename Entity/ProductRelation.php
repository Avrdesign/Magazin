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
            $products[] = new TechProduct($product["name"],$product["description"],$product["icons"],$product["price"],$product["is_exists"],$product["slug"],$product["category_slug"]);
        }
        return $products;
    }

    public function getProductBySlug($slug){
        $product = DBManager::getDB()->getFieldFromTableWhere(self::TABLE_NAME,'slug',$slug);
        return $product ? new TechProduct($product["name"],$product["description"],$product["icons"],$product["price"],$product["is_exists"],$product["slug"],$product["category_slug"]) : null;
    }

    public function getTechProductBySlug($slug){
        $product = DBManager::getDB()->getFieldFromTableWhere(self::TABLE_NAME,'slug',$slug);
        return $product ? new TechProduct($product["name"],$product["description"],$product["icons"],$product["price"],$product["is_exists"],$product["slug"],$product["category_slug"]) : null;
    }

    public function getAllTechProducts(){
        $array = DBManager::getDB()->getAllData(self::TABLE_NAME);
        $products = array();
        foreach ($array as $product){
            $products[] = new TechProduct($product["name"],$product["description"],$product["icons"],$product["price"],$product["is_exists"],$product["slug"], $product["category_slug"]);
        }
        return $products;
    }

    public function updateProduct(TechProduct $product, $oldSlug){
        $array = array(
            "name" => $product->getName(),
            "description"=>$product->getDescription(),
            "icons"=>$product->getIcons(),
            "price"=>$product->getPrice(),
            "is_exists"=>$product->getExists(),
            "slug"=>$product->getSlug(),
            "category_slug"=>$product->getCategorySlug()
        );
        $where = array(
            "slug"=>$oldSlug
        );
        return DBManager::getDB()->update(self::TABLE_NAME, $array, $where);
    }

    public function insertProduct(TechProduct $product){
        $array = array(
            "name" => $product->getName(),
            "description"=>$product->getDescription(),
            "icons"=>$product->getIcons(),
            "price"=>$product->getPrice(),
            "is_exists"=>$product->getExists(),
            "slug"=>$product->getSlug(),
            "category_slug"=>$product->getCategorySlug()
        );
        return DBManager::getDB()->insert(self::TABLE_NAME, $array);
    }

    public function deleteProduct(TechProduct $product){
        $where = array(
            "slug"=>$product->getSlug()
        );
        return DBManager::getDB()->delete(self::TABLE_NAME, $where);
    }
}