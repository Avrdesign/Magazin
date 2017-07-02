<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 29.06.2017
 * Time: 19:39
 */
class Rout
{

    const INDEX = '';
    const BASKET = 'basket';
    const CONTACTS = 'contacts';

    private $controller;

    public function __construct()
    {
        $params = explode('/',$_SERVER["REQUEST_URI"]);
        if (!empty($params[3])){
            $this->controller = new Error404Controller();
            return;
        }

        switch ($params[1]){
            case self::INDEX :
                $this->controller = new MainController();
                break;
            case self::BASKET :
                $this->controller = new BasketController();
                break;
            case self::CONTACTS :
                $this->controller = new ContactsController();
                break;
            default:
                if (!Utils::regExpOnlyLettersAndNumbers($params[1])){
                    $this->controller = new Error404Controller();
                    break;
                }

                if (!empty($params[2]) and !Utils::regExpOnlyLettersAndNumbers($params[2])){
                    $this->controller = new Error404Controller();
                    break;
                }

                if (empty($params[2])){
                    $this->controller = new CategoriesController($params[1]);
                }else{
                    $this->controller = new ProductController($params[1],$params[2]);
                }
                break;
        }
    }

    public function resp()
    {
        if ($this->controller){
            $this->controller->response();
        }else{
            echo "Error server";
        }    
    }

}
