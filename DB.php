<?php
include 'DesignPattern/Singleton/DBSingleton.php';


   
$db = DBSingleton::getInstance();
$db1 = DBSingleton::getInstance();

var_dump($db);

