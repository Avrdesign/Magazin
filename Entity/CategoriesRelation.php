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
            $categories[] = new Category($category["name"], $category["slug"]);
        }
        return $categories;
    }

    public function getCategoryBySlug($slug){
        $category = DBManager::getDB()->getFieldFromTableWhere(self::TABLE_NAME, 'slug',$slug);
        return $category ? new Category($category["name"], $category["slug"]) : null;
    }

    public function insertCategory(Category $category){
        $array = array(
            "name" => $category->getName(),
            "slug"=>$category->getSlug()
        );
        return DBManager::getDB()->insert(self::TABLE_NAME, $array);
    }

    public function updateCategory(Category $category, $oldSlug){
        $array = array(
            "name" => $category->getName(),
            "slug"=>$category->getSlug()
        );
        $where = array(
            "slug"=>$oldSlug
        );
        return DBManager::getDB()->update(self::TABLE_NAME, $array, $where);
    }

    public function deleteCategory(Category $category){
        $where = array(
            "slug"=>$category->getSlug()
        );
        return DBManager::getDB()->delete(self::TABLE_NAME, $where);
    }

}