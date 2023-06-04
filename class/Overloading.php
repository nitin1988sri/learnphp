<?php
 // To revise or more onformation go through https://www.geeksforgeeks.org/overloading-in-php/

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    include 'Autoload.php';


class Overloading {

  public  $variable = array();
  public  $declear = 1;
  public $salary = 1000;
  public const  FINAL = "test";
  public $address;
  public $phonenumber;

   public function __construct(Address $address, PhoneNumber $phonenumber){
    $this->address = $address;
    $phonenumber = $phonenumber;
   }

   public function __clone() {
    $this->address = new Address($this->address->permanentAddress, $this->phonenumber);
  }

 public function __set($name, $value){
    // echo "Setting $name into Variable array";
     $this->variable[$name] = $value; 
     $this->salary = $value; 

 }

 public function __get($name){
     if(array_key_exists($name, $this->variable)){
         return $this->variable[$name];
     }
 }

 public function __call($name, $arguments)
 {
   print_r($name);   
 }

 public function CheckUsedVaraiable(){
     foreach($this as $key => $value){
         print_r($key);
     }
 }

     public function __toString(){
         return $this->salary;
     }

    public function __invoke($test){
     return "Hi";
    }
}

$phonenumber = new PhoneNumber(987654321);
$address =  new Address("Jankipurm", $phonenumber);

$Overloading = new Overloading($address,$phonenumber);
//echo  $Overloading;
// echo $Overloading(5);
$OverloadingClone = clone $Overloading;


//echo $Overloading->salary;

//echo $OverloadingClone->salary;

echo $Overloading->address->permanentAddress;
echo $OverloadingClone->address->permanentAddress= 'lko' ;





