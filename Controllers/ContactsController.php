<?php

/**
 * Created by PhpStorm.
 * User: alexandrzanko
 * Date: 6/29/17
 * Time: 10:58 AM
 */
class ContactsController implements IController
{

    public function response()
    {
        $categoryRelation = new CategoriesRelation();
        $categories = $categoryRelation->getAllCategories();

        include_once 'Views/header.php';
        include_once 'Views/contacts.php';
        include_once 'Views/footer.php';
    }
}