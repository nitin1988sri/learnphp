<?php

class Leaf{
    public function __construct(private String $name, private int $price)
    {    
    }

    public function showPrice() : int{
        return  $this->price;
    }
}