<?php

namespace Gondr;

class DB {
    private static $db = null;

    public static function getDB(){
        if(self::$db == null){
            self::$db = new \PDO("mysql:host=gondr.asuscomm.com; dbname=yy_30218;charset=utf8mb4;", "yy_30218", "1234");


        }
        return self::$db;
    }
    public static function fetchAll($sql, $data = []){
        $q = self::getDB()->prepare($sql);
        $q->execute($data);
        return $q->fetchAll(\PDO::FETCH_OBJ);
    }
}