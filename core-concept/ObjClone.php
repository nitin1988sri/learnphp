<?php

use Address as GlobalAddress;

class Student{
    public $name;
    public $age;
    public Profile $profile;

  public  function __construct($name, $age, $profile)
  {
    $this->name = $name;
    $this->age = $age;
    $this->profile = $profile;
  }

  public function __clone()
  {
      $this->profile = clone $this->profile;
  }
 
 
  public function __toString()
  {
    return "name: ". $this->name . " <br/> Age: " . $this->age. '<br/> Profile details:'. $this->profile;
  }
}

class Profile{
    public Phone $phone;
    public Address $address;
    
    public function __construct($phone, $address)
    {
        $this->phone = $phone;
        $this->address = $address;
    }

    

    public function __toString()
    {
        return " <br>&nbsp;&nbspPhone no: ". $this->phone->phoneNo . "<br/>&nbsp;&nbsp;Address: " .$this->address->address;
    }
}

class Phone{
    public $phoneNo;

    public function __construct($phone)
    {
        $this->phoneNo = $phone;
    }
   
}

class Address{
    public $address;

    public function __construct($address)
    {
        $this->address = $address;
    }
   
}

$nitinpProfile = new Profile(new Phone('987654321'),  new Address("Lucknow"));
$obJclone1 = new Student('Nitin', 34, $nitinpProfile);
$obJclone2 = clone $obJclone1;

$obJclone2->name = 'Saurabh';
$obJclone2->age = 24;
$obJclone2->profile->phone = new Phone('123456789');
$obJclone2->profile->address = new Address("Delhi");



echo $obJclone1;
echo "<br/><br/>";
echo $obJclone2;

