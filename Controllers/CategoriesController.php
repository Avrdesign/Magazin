<?php

/**
 * Created by PhpStorm.
 * User: alexandrzanko
 * Date: 6/29/17
 * Time: 11:09 AM
 */
class CategoriesController implements IController
{

    private $slug;

    public function __construct($slug)
    {
        $this->slug = $slug;
    }

    public function response()
    {
        $relationCat =  new CategoriesRelation();
        /** @var Category $category */
        $category = $relationCat->getCategoryById($this->slug);
        include 'Views/header.php';
        if ($category){
            include 'Views/categories.php';
        }
        include 'Views/footer.php';
    }
}