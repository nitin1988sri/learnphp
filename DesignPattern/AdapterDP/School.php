<?php
include 'DPAutoload.php';

class school{

    public function __construct()
    {
        $pen = new PenAdapter;
        $assigment = new Assigment();
        $assigment->setPen($pen);
        $assigment->writeAssigment("I am writteing the assigment by using adapter");
    }
    
}

$obj = new school();