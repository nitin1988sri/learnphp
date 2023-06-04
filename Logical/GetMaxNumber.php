<?php
/**
 * Chef took an examination two times. In the first attempt, 
 * he scored XX marks while in the second attempt he scored YY marks. According to the rules of the examination, 
 * the best score out of the two attempts will be considered as the final score. Determine the final score of the Chef.
 * 
 */

function getMax($scoredArry){
    $returnArr = [];
    foreach ($scoredArry as $scoredArryData){
        if(count($scoredArryData) > 1){
       $returnArr[] =
       $scoredArryData[0] > $scoredArryData[1] ? $scoredArryData[0] : $scoredArryData[1]; 
        }else{
            $returnArr[] = $scoredArryData[0]; 
        }
    }
    return $returnArr;
}

print_r(getMax([[10,40],[40,30],[49,70],[90]]));