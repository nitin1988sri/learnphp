<?php

class Compose{

    public $price = [];
 
    public function compose(Leaf $leaf){
        $this->price[] = $leaf->showPrice();
    }
    public function totalCost(){
        return array_sum($this->price);
    }

}