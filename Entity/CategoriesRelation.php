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
        foreach ($array as $item){
            $categories[] = new Category($item["id"],$item["name"], $item["slug"]);
        }
        return $categories;
    }

    public function getCategoryById($id){
        $item = DBManager::getDB()->getFieldById(self::TABLE_NAME, $id);
        return $item ? new Category($item["id"],$item["name"], $item["slug"]) : null;
    }
}