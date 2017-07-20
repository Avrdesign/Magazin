<?php
/**
 * Created by PhpStorm.
 * User: st
 * Date: 18.07.2017
 * Time: 18:39
 */
class ParserHTML extends DOMDocument {


    public function __construct($url)
    {
        $this->loadHTML(file_get_contents($url));
    }

    public function getUrlIcons(){
        $urls = array();
        foreach ($this->getElementsByTagName('img') as $item) {
            $urls[] = $item->getAttribute('src');
        }
        return $urls;
    }

    public function getUrlHref(){
        $urls = array();
        foreach ($this->getElementsByTagName('a') as $item) {
            $urls[] = $item->getAttribute('href');
        }
        return $urls;
    }

    public function getElementsByClassName($className=null){
        $items = array();
        $body = $this->getElementsByTagName('body')->item(0);
        foreach ($body->getElementsByTagName('*') as $element) {
            $classStr = $element->getAttribute('class');
            if ($classStr == $className){
                $items[] = $element;
            }else{
                $classList = explode(' ',$classStr);
                if (in_array($className,$classList)){
                    $items[] = $element;
                }
            }

        }
        return $items;
    }
}

