<?php

require './main.php';

use Logical\BubbleSort;
use Logical\keyboardrow;
use Logical\SingleNumber;
use Logical\LongestCommonPrefix;
use Logical\MajorityElement;

$bbs = new BubbleSort([2, 4, 8, 3, 7, 1, 0, 9]);
$bbs = new BubbleSort(['D', 'A', 'C', 'G', 'L', 'K']);

//print_r($bbs->bubbleSort());


// $client = new GuzzleHttp\Client();
// $res = $client->request('GET', 'http://localhost:81');
// echo "<pre>";
// echo $res->getBody();


$keyBoardRows = ['qwertyuiop', 'asdfghjkl', 'zxcvbnm'];
$givenArr = ["alaska", "dad"];
$obj = new keyboardrow($keyBoardRows, $givenArr);
//print_r($obj->checkExistElement());

$singleNum = (new SingleNumber([1]))->solve();

//print_r($singleNum);


$LongestCommonPrefix = (new LongestCommonPrefix(["flower", "flow", "flight"]))->solve();

//print_r($LongestCommonPrefix);

print_r((new MajorityElement([3, 3, 3, 2, 2, 1, 2, 3]))->solve());
