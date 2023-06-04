<?php
class Assigment{

 public Pen $p;

 public function setPen(Pen $p){
    $this->p =  $p; 
 }

 public function getPen(){
    return $this->p;
 }

 public function writeAssigment($str){
    $this->p->write($str);
 } 
}