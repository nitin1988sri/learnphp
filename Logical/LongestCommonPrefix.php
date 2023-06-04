<?php

namespace Logical;

class LongestCommonPrefix{
    public function __construct(private array $arr) {}

    public function solve(){
        $first = $this->arr[0];
        for($i = 1; $i < count($this->arr); $i++){
            $prefix = $this->arr[$i];
            $common = "";
            for($j = 0; $j < strlen($prefix); $j++){
                if(@$first[$j] === @$prefix[$j]){
                    $common.= $first[$j];   
                }
            }
            $prefix = $common; 
        }
        return $common;
    }
}