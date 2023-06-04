<?php

$y = 10;
$z = 30;

$sum =  function ($a) use ($z){
    global $y;
  return $a+$y+$z;
};

$sum =  fn() =>  $y++;
echo $sum();

$a = ['1.5' => "saurabh"];
print_r($a);