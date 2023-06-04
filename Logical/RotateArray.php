<?php

/* ******************************************************************************

 Given an unsorted array arr[] of size N, rotate it by D elements (clockwise). 

 Input:
 The first line of the input contains T denoting the number of testcases. First line of each test case contains two space separated elements, N denoting the size of the array and an integer D denoting the number size of the rotation. Subsequent line will be the N space separated array elements.

 Output:
 For each testcase, in a new line, output the rotated array.

 Constraints:
 1 <= T <= 200
 1 <= N <= 107
 1 <= D <= N
 0 <= arr[i] <= 105

 Example:
 Input:
 2
 5 2
 1 2 3 4 5 
 10 3
 2 4 6 8 10 12 14 16 18 20

 Output:
 3 4 5 1 2
 8 10 12 14 16 18 20 2 4 6

 Explanation :
 Testcase 1: 1 2 3 4 5  when rotated by 2 elements, it becomes 3 4 5 1 2.
 
 ***********************************************************************************/

include '../Autoload.php';
 class RotateArray{
    public $arr;
    public $temp=[];
    public $rotate;
    function __construct(Array $arr, $rotate){
      $this->rotate = $rotate;  
      $this->arr = $arr;
    }
    function rotateArray(){
        $k=0;
        while($k <  $this->rotate){
        for($i=0; $i< count($this->arr); $i++){
           // if(count($this->temp) != $this->rotate){
                $this->temp[$i] = $this->arr[$i];
           // }
           $this->arr[$i] = @$this->arr[$i+1];
        }
        $this->arr[count($this->arr)-1]= $this->temp[$k];
        $k++;
        }
        return $this->arr;
    }
 }

 $input =[1,2,3,4,5,6,7];
 $rotate = 3;
 $obj = new RotateArray($input, $rotate);
 echo "<br> Input:  ";
 print_r(implode(',',($input)));
 echo "<br> Input rotate: ". $rotate;
 echo "</br></br>Output: ";
 print_r(implode(",",$obj->rotateArray()));