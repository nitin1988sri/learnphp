<?php
 class Address{
     
    public $add=[];
    public const FINAL= "final";
    public $permanentAddress;
    public $phoneNumber;

    public function __construct(string $permanentAddress, PhoneNumber $phoneNumber){
      $this->permanentAddress = $permanentAddress;
      $this->PhoneNumber = $phoneNumber;
    }

    public function __clone() {
      $this->phoneNumber = new phoneNumber($this->phoneNumber->number);
    }
  
    

    public function setAdd($add){
        $this->add[]=$add;
    }

    public function getAdd(){
       return $this->add;
    }
 }