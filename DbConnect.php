<?php

class DbConnect{

    public static $table='user';
    public function saveUser($data){
        echo "User data successfully save in table ".static::$table.'<br>';
    }

    public function updateUser($data){
        echo "User data successfully update in table ".static::$table.'<br>';
    }
}

