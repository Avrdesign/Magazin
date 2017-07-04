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
    const CATEGORY = 'category';
    const PRODUCT = 'product';

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
            case self::CATEGORY :
                if (!empty($params[2]) and !Utils::regExpOnlyLettersAndNumbers($params[2])){
                    $this->controller = new Error404Controller();
                    break;
                }
                $this->controller = new CategoriesController($params[2]);
                break;
            case self::PRODUCT :
                if (!empty($params[2]) and !Utils::regExpOnlyLettersAndNumbers($params[2])){
                    $this->controller = new Error404Controller();
                    break;
                }
                $this->controller = new ProductController($params[2]);
                break;
            default:
                $this->controller = new Error404Controller();
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

    public static function base_url(){
        return 'http://'.$_SERVER["SERVER_NAME"].'/';
    }

}
