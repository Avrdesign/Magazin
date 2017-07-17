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
    const DB_USER_PASSWORD = '';

    private static $db = null;  // Единственный экземпляр класса, чтобы не создавать множество подключений
    private $connection;              // Идентификатор соединения

    private function __construct()
    {
        $this->connection = new mysqli(self::DB_HOST,self::DB_USER_NAME,self::DB_USER_PASSWORD,self::DB_NAME);
        $this->connection->query("SET lc_time_names = 'ru_RU'");
        $this->connection->query("SET NAMES 'utf8'");
    }

    public function __destruct()
    {
        if ($this->connection) {
            $this->connection->close();
        }
    }

    /* Получение экземпляра класса. Если он уже существует, то возвращается, если его не было, то создаётся и возвращается (паттерн Singleton) */
    public static function getDB()
    {
            if (self::$db == null) {
                self::$db = new DBManager();
            }
            return self::$db;
    }

    /**
     * @return array
     */
    public function getAllData($tableName){
        $sql = "SELECT * FROM $tableName";
        $result = $this->connection->query($sql);
        $array = array();
        while($row = $result->fetch_assoc()){
            $array[] = $row;
        }
        return $array;
    }

    /**
     * @return array
     */
    public function getArrayFromTableWhere($tableName,$key,$value){
        $sql = "SELECT * FROM $tableName WHERE $key='$value'";
        $result = $this->connection->query($sql);
        $array = array();
        while($row = $result->fetch_assoc()){
            $array[] = $row;
        }
        return $array;
    }

    public function getFieldFromTableWhere($tableName,$key,$value){
        $sql = "SELECT * FROM $tableName WHERE $key='$value' LIMIT 1";
        $result = $this->connection->query($sql);
        return $result->fetch_assoc();
    }

    public function update($tableName, $array, $where){
        $sql = "UPDATE $tableName SET ";
        foreach ($array as $key=>$value) {
            $sql .= "`$key`=\"$value\",";
        }
        $sql = substr($sql, 0, -1);
        $sql .= " WHERE ";
        foreach ($where as $key=>$value) {
            $sql .= "`$key`=\"$value\",";
        }
        $sql = substr($sql, 0, -1);
        return $this->connection->query($sql);
    }

    public function insert($tableName, $array){
        $sql = "INSERT INTO $tableName (";
        foreach ($array as $key=>$value) {
            $sql .= "`$key`,";
        }
        $sql = substr($sql, 0, -1);
        $sql .= " ) VALUES (";
        foreach ($array as $key=>$value) {
            $sql .= "\"$value\",";
        }
        $sql = substr($sql, 0, -1);
        $sql .= " )";
        return $this->connection->query($sql);
    }

    public function delete($tableName, $where){
        $sql = "DELETE FROM $tableName WHERE ";
        foreach ($where as $key=>$value) {
            $sql .= "`$key`=\"$value\",";
        }
        $sql = substr($sql, 0, -1);

        return $this->connection->query($sql);
    }
}