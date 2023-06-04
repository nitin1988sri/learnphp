<?php

$item = '[{"name":"eggs","price":1.9},{"name":"aotato","price":1.9},{"name":"coffee","price":1.5},
{"name":"rice","price":0.04}]';

$jsonDecoded = json_decode($item, true);

uasort($jsonDecoded, function($a, $b) {
    if ($a['price'] == $b['price']) {
       $sort = strcmp($a['name'], $b['name']);
       if($sort==0 || $sort==-1){
        return -1;
       }else{
        return 1;
       }
    }
    return ($a['price'] < $b['price']) ? -1 : 1;
});


$sorteddata = json_encode($jsonDecoded);
echo $sorteddata;
