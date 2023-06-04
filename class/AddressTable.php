<?php
include_once 'DbConnect.php';

 class AddressTable extends Dbconnect{
   public static $table='AddressTable';

   public function saveUserAddress(Address $address){
      echo 'User address save in user address table'. static::$table.'<br>';
   }
}