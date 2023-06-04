<?php

namespace Logical;

class BubbleSort{
    public $arr;
    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function bubbleSort(){
        $temp = 0;
        for($i=0; $i<count($this->arr); $i++){

            for($j=0; $j<count($this->arr)-1;$j++){
                if($this->arr[$j] > $this->arr[$j+1]){
                    $temp = $this->arr[$j+1];
                    $this->arr[$j+1] = $this->arr[$j];
                    $this->arr[$j] = $temp;
                }
            }
        }
        return $this->arr;
    }
}


