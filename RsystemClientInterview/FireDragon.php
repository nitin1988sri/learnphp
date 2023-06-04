<?php

interface Reptile{
    public function layEgg():ReptileEgg;
 } 


class FireDragon implements Reptile{

    private $reptliType = "FireDragon";

     public function layEgg():ReptileEgg{
      return new ReptileEgg($this->reptliType);
     }

}

$egg = new ReptileEgg("FireDragon");
print_r($egg->hatch());

$egg1 = new ReptileEgg("FireDragon");

print_r($egg1->hatch());


class ReptileEgg{

    public $hatchCount = 0;
    function __construct(public string $reptileType)
    {
    }

    function hatch():?Reptile{
     if($this->hatchCount>0)
     throw new Exception("Reptile egg has already been hatched");
     $this->hatchCount++;
     return new $this->reptileType;
    }

 }