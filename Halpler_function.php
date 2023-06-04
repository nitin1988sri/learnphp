<?php

 function oneDarraysortAlgorithms(Array $array){
       $count = count($array);
       for($k=0; $k < $count; $k++){
        for($i=0; $i < $count-1; $i++){
        if($array[$i]>$array[$i+1]){
            $temp = $array[$i]; 
            $array[$i] = $array[$i+1];
            $array[$i+1] = $temp;
        }       
     }   
    }
     return $array;
 }


 function countArrayValuesAlgorithms(Array $array){
    $count = count($array);
    $result = [];
    $counter = 0;
    $repeter = $array[0];
     for($i=0; $i < $count; $i++){
     if($array[$i] > $repeter){
        $repeter = $array[$i];
        $counter = 1;
     } else{
        $result[$array[$i]] =  ++$counter;
     }      
  }   
  return $result;
}