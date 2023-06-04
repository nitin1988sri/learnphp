<?php

  class test extends \stdClass{}

  function getclass(){
   return 'test';  
}
 $a= new (test::class);

 var_dump($a);