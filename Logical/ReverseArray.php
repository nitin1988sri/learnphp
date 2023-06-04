<?php

/******************************* ************************** 

Given an array A of size N, print the reverse of it.

Input:
First line contains an integer denoting the test cases 'T'. T testcases follow. Each testcase contains two lines of input. First line contains N the size of the array A. The second line contains the elements of the array.

Output:
For each testcase, in a new line, print the array in reverse order.

Constraints:
1 <= T <= 100
1 <= N <=100
0 <= Ai <= 100

Example:
Input:
1
4
1 2 3 4
Output:
4 3 2 1

****************************************************************/
include '../Autoload.php';
 class ReverseArray{
    public $arr;
    public $temp= [];
    function __construct(Array $arr){
      $this->arr = $arr;
    }
    function reverseArray(){
        for($i=count($this->arr)-1; $i>=0; $i--){
         $this->temp[]= $this->arr[$i];
        }
        return $this->temp;
    }
}
$input =[1,2,3,4,5,6,7];
$obj = new ReverseArray($input);
echo "<br> Input:  ";
print_r(implode(',',($input)));
echo "</br></br>Output: ";
print_r(implode(',',($obj->reverseArray())));