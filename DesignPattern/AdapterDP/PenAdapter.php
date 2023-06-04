<?php
class PenAdapter implements Pen{

    public function write(String $str){
        $pen =  new RenoldPen();
        $pen->writeWithStyle($str);

    }


}