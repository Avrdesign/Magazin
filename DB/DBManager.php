<?php

/**
 * Created by PhpStorm.
 * User: alexandrzanko
 * Date: 6/20/17
 * Time: 5:15 PM
 */
class DBManager
{

    const DB_HOST = 'localhost';
    const DB_NAME = 'test';
    const DB_USER_NAME = 'root';
    const DB_USER_PASSWORD = 'root';

    private static $db = null;  // Единственный экземпляр класса, чтобы не создавать множество подключений
    private $link;              // Идентификатор соединения

    private function __construct()
    {
        $this->link = new mysqli(self::DB_HOST,self::DB_USER_NAME,self::DB_USER_PASSWORD,self::DB_NAME);
        $this->link->query("SET lc_time_names = 'ru_RU'");
        $this->link->query("SET NAMES 'utf8'");
    }

    public function __destruct()
    {
        if ($this->link){
            $this->link->close();
        }
    }

    /* Получение экземпляра класса. Если он уже существует, то возвращается, если его не было, то создаётся и возвращается (паттерн Singleton) */
    public static function getDB() {
        if (self::$db == null) {
            self::$db = new DBManager();
        }
        return self::$db;
    }

}