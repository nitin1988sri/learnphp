<?php

class Palindrom{

    public function __construct(public $string)
    {    
    }

    public function checkPalindrom(){
        $tempString='';
        for($i= strlen($this->string)-1; $i >= 0 ; $i--){
            $tempString.= $this->string[$i];
        }
        if($tempString == $this->string){
            return true;
        }else{
            return false;
        }
    }
}

$obj = new Palindrom('abcdcba');
echo $obj->checkPalindrom();