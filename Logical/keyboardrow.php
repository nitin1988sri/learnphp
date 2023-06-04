<?php

/**
 * Given an array of strings words, return the words that can be typed using letters of the alphabet on only one row of American keyboard like the image below.
 * In the American keyboard:
 * the first row consists of the characters "qwertyuiop",
 * the second row consists of the characters "asdfghjkl", and
 * the third row consists of the characters "zxcvbnm".
 */

 
 namespace Logical;

class keyboardrow{
    public $keyBoardRows = [];
    public $givenArr= [];
    function __construct(Array $keyBoardRows, Array $givenArr)
    {
        $this->keyBoardRows = $keyBoardRows;
        $this->givenArr = $givenArr;
    }

    function checkExistElement(){
        $returnArr = [];
        for($i=0; $i < count($this->givenArr); $i++){
            $len = strlen($this->givenArr[$i]);
            $count1=0;
            $count2=0;
            $count3=0;
            for($j=0; $j < $len; $j++){
                if(str_contains($this->keyBoardRows[0], $this->givenArr[$i][$j])){
                    $count1++;
                }
                else if(str_contains($this->keyBoardRows[1], $this->givenArr[$i][$j])){
                    $count2++;
                }
               else if(str_contains($this->keyBoardRows[2], $this->givenArr[$i][$j])){
                    $count3++;
                }
                if($count1 == $len || $count2 == $len || $count3== $len){
                    $returnArr[] = $this->givenArr[$i]; 
                }
            }
            
        }
        return $returnArr;
    }
    
}

