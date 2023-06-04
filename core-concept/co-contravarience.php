<?php

interface AnimalShalter{
     public function adopt(string $name): Animal;
}

class CatShalter implements AnimalShalter{
    public function adopt(string $name): Cat
    {
        return new cat($name);
    }
}

class DogShalter implements AnimalShalter{
    public function adopt(string $name): Dog
    {
        return new Dog($name);
    }
}

class Food {}

class AnimalFood extends Food {}

abstract class Animal{

    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    abstract function speak();

    public function eat(AnimalFood $food)
    {
        echo $this->name . " eats " . get_class($food);
    }
}


class Cat extends Animal{

    public function speak()
    {
        echo $this->name. ' Meouw'; 
    }
}

class Dog extends Animal{

    public function speak()
    {
        echo $this->name. ' Bark'; 
    }

    public function eat(Food $food)
    {
        echo $this->name . " eats " . get_class($food);
    }
}

$kitty = (new CatShalter)->adopt('kitty');

$kitty->speak();

$kitty->eat(new AnimalFood());


$Ricky =  (new DogShalter)->adopt('Ricky');

$Ricky->speak();

$Ricky->eat(new Food());

$a = '1';
$b = &$a;
$b = "2$a";

echo $a. ' ' .$b; 


