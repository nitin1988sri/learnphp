<?php

namespace Logical;

class SingleNumber{
    public function __construct(private array $numList){}
    
    public function solve(): array{
        $numList = $this->numList;
        $count = count($numList);
        for($i=0; $i< $count; $i++){
            for($j=$i+1; $j< $count; $j++){
                if(@$numList[$i] == @$numList[$j] && (@$numList[$i] != Null && @$numList[$j] != Null)){
                   unset($numList[$i], $numList[$j]);
                } 
            }
        }
        return array_values($numList);            
    }
}