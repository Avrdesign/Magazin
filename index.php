<?php
/**
 * Created by PhpStorm.
 * User: st
 * Date: 13.06.2017
 * Time: 20:09
 */
require_once 'models/FeedBack.php';

$product = new FeedBack(1,'Шурик','Аккумуляьторный 12V','nfkjfljwbgnlewg.jpeg',date('d-m-Y'),9,10);

echo $product->getDateCreate();







