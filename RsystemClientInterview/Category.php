<?php

class Category{

    public  $categoryArr =[];
    public function addCategory(String $category, String $parent=null){
         if(!array_key_exists($parent,  $this->categoryArr) && $parent==null){
          $this->categoryArr[$category]= null;
        }else{
            $this->categoryArr[$parent][] = $category;
        }
    }

    public function getChildren($parent){
        return $this->categoryArr;
     return implode(",",$this->categoryArr[$parent]);
    }

}

$c = new Category();
$c->addCategory("A");
$c->addCategory("B","A");
$c->addCategory("C","A");


print_r($c->getChildren("A"));