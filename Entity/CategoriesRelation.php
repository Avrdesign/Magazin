<?php

/**
 * Created by PhpStorm.
 * User: alexandrzanko
 * Date: 6/28/17
 * Time: 10:55 AM
 */
class CategoriesRelation
{
    const TABLE_NAME = 'categories';

    public function getAllCategories(){
        $array = DBManager::getDB()->getAllData(self::TABLE_NAME);
        $categories = array();
        foreach ($array as $category){
            $categories[] = new Category($category["id"],$category["name"], $category["slug"]);
        }
        return $categories;
    }

    public function getCategoryBySlug($slug){
        $category = DBManager::getDB()->getFieldBySlug(self::TABLE_NAME, $slug);
        return $category ? new Category($category["id"],$category["name"], $category["slug"]) : null;
    }
}