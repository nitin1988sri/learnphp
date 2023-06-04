<?php

/**
 * @purpose
 * Provide empty garden space full od dirt which 
 * can grow and produce items
 */
class EmptyGarden{

    public function __construct(protected int $width, protected int $height)
    {}

    public function itms()
    {
        $numberOfSpots = ceil($this->width*$this->height);
        return array_fill(0,$numberOfSpots, 'handful of dirt');
    }
}

class Rice extends EmptyGarden
{

   public function item(){
    return array_fill(0, $this->width * $this->height, 'wheat');
   }
}

$rice = new Rice(25,20);
//echo "<pre>";
//print_r($rice->item());
$geeks = 'Welcome12Geeks4Geeks.';
 preg_match_all('!\d+\.*\d*!', $geeks, $matches);


//print_r(array_sum(($matches[0])));




// $string1 = "BEST";
// $string2 = "WEEKEND";
// $expectedResult="";
// if(strlen($string1)>strlen($string2)){
//     $theString = $string1;
// }elseif(strlen($string1)<strlen($string2)){
//     $theString = $string2;
// }else{
//     $theString = $string2; 
// }
// for($i=0; $i<strlen($theString); $i++){
//     $expectedResult .= @$string1[$i].$string2[$i];
// }
// //echo $expectedResult;






function removeNumberBeforeFive($number, $givenNumber){
 $newArr = [];
    for($i=0; $i< count($number); $i++){
        $newArr[] = $number[$i];
        if($number[$i] == $givenNumber) {
         unset($newArr[$i-1]);
        }
    }
    return $newArr;
}
//$number = [1,2,5,4,4,4,3,5,1];

//print_r (removeNumberBeforeFive($number, 5));

function firstOccurence($array){
    $newArr = [];
    for($i=0; $i<count($array);$i++){
        $num = $array[$i];
        $count = 1;
        if(!in_array($array[$i],$newArr)){
        for($j=$i+1; $j < count($array);$j++){
         if($num == $array[$j]){
             $newArr[$num] = ++$count;
         }
        } 
     }
    }
  print_r(array_key_first($newArr));
}



$number = [2,1,3,2,4,1,4,6,2, 6];
firstOccurence($number);