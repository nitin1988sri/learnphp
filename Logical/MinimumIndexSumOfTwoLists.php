

<?php

/**
 * Given an array of strings words, return the words that can be typed using letters of the alphabet on only one row of American keyboard like the image below.
 * In the American keyboard:
 * the first row consists of the characters "qwertyuiop",
 * the second row consists of the characters "asdfghjkl", and
 * the third row consists of the characters "zxcvbnm".
 */

class MinimumIndexSumOfTwoLists{
    public $list1 = [];
    public $list2= [];
    function __construct(Array $list1, Array $list2)
    {
        $this->list1 = $list1;
        $this->list2 = $list2;
    }

    function checkExistElement(){
        $returnArr = [];
        for($i=0; $i < count($this->list2); $i++){
            $flag = false;
                for($k=0; $k < count($this->list1); $k++){
                if(str_contains($this->list1[$k], $this->list2[$i])){
                    $flag= true;
                }
                }
                
                if($flag == true){
                    $returnArr[] = $this->list2[$i]; 
                }
            
            
        }
        return $returnArr;
    }
}

$list1 = ["Shogun","Tapioca Express","Burger King","KFC"];
$list2 = ["Piatti","The Grill at Torrey Pines","Hungry Hunter Steakhouse","Shogun"];
$obj = new MinimumIndexSumOfTwoLists($list1, $list2);



define("FOO",10);
$a = [10=>FOO, "FOO"=>20];
print_r($a);
print_r($a[10]);

//print_r($obj->checkExistElement());