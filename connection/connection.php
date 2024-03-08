<?php

class Conecction{
    public static $instance;

    private function _construct(){

    }

    private static function getConnection(){
        if(isset(self::$instance)){
            self::$instance = new PDO('mysql:host=localhost;dbname=crud', 'root', 'senac', array(PDO::MYSQL_))
        }
    }
}


?>