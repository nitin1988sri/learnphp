<?php
include 'DPAutoload.php';

class ComposeComputer{

    public function getComputer(){
    $ram = new Leaf("Ram", 3000);
    $processer = new Leaf("cup", 8000);
    $hardDrive = new Leaf("hd", 3000);
    $memcache = new Leaf('memCache',4000);

    $mouse = new Leaf('mouse',400);
    $keyBoard = new Leaf('keyBoard',2000);
    $speaker = new Leaf('speaker',6000);
    $moniter = new Leaf('moniter',9000);






    $motherBoard  = new Compose();
    $motherBoard->compose($ram);
    $motherBoard->compose($processer);
    $cabinat  = new Compose();
    $cabinat->compose($motherBoard);
    $cabinat->compose($hardDrive);
    $cabinat->compose($memcache);


   // $mb = $motherBoard->totalCost(); 
   // return $mb; 

   // $computer  = new Compose();
    }

}
$cc = new ComposeComputer();
print_r($cc->getComputer());