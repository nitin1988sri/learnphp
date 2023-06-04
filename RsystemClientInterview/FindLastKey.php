<?php

function findlastKey($arr, $searchVal){
$tempArr= [];
    foreach($arr as $key=>$value){
   if($value == $searchVal){
     $tempArr[$key] = $value;
   } 
}
//print_r($tempArr);
return  array_key_last($tempArr);
}

echo findlastKey(["age"=>"32","name"=>"geeta" ,"name1"=>"geeta" ,"age1"=>"34"], "32");