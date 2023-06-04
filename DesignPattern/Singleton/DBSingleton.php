<?php

final class DBSingleton{
 
    private static $instanse;

    private function __construct(){}
    private function __clone(){}
    private static function init(){
        if(is_null(self::$instanse)){
        self::$instanse = new self();
        }
    }
    public static function getInstance(){
        self::init();
        return self::$instanse;
    }
}