<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'Halpler_function.php';
spl_autoload_register(function ($class_name) {
    include 'class/'.$class_name . '.php';
});

