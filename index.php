<?php
/**
 * Created by PhpStorm.
 * User: st
 * Date: 13.06.2017
 * Time: 20:09
 */
require_once 'DB/DBManager.php';

$ar = DBManager::getDB()->getAllData("users");
print '<pre>';
var_dump($ar);
print '</pre>';







