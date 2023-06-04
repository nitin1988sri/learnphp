<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'Autoload.php';
class index 
{
    private DbConnect $db;
    function __construct(DbConnect $db){
        $this->db = $db; 
        // for($i=0;$i<10;$i++){
        //     $this->testArray[]= rand(0,10); 
        // }
    }
    public  $testArray=[2,51,6,87,36,75,54,78,65,23,98,45,23,58,43];
    public $name;
    public $email;
    public Address $address;
    public function  setUserProfile($name,$email, $address){
     $this->name = $name;
     $this->email = $email;
     $this->address = $address;
    }

    public function saveUserProfile(){
        $this->db->updateUser($this);
        return $this;
       }

       public function saveUserAddress(){
        $this->db->saveUserAddress($this->address);
        return $this;
        }

   public function delete($i){
       $notModified =$this->testArray;
    for($k=$i; $k<count($this->testArray);$k++){
        $this->testArray[$k]=$this->testArray[$k+1];
    }
       print_r([$notModified,$this->testArray]);
       return $this;
  }
  public function findMin(){
    $minNum = $this->testArray[array_key_first($this->testArray)];
    $max= $this->testArray[array_key_first($this->testArray)];
 for($k=array_key_first($this->testArray)+1; $k < count($this->testArray);$k++){
     if($minNum > $this->testArray[$k]){
        $minNum = $this->testArray[$k];
     }
     if($max < $this->testArray[$k]){
        $max = $this->testArray[$k];
     }
 }
    return $this;
}
public function testArrayTuna($testArray,$flag){
        $max=[];
        $min=[];
         for($k=0; $k < count($testArray)-1;$k+=2){
         if($testArray[$k] > $testArray[$k+1]){
            $min[] = $testArray[$k+1];
            $max[] = $testArray[$k];
         }elseif($testArray[$k] < $testArray[$k+1]){
            $min[] = $testArray[$k];
            $max[] = $testArray[$k+1];
         }else{
            $min[] = $testArray[$k];
            $max[] = $testArray[$k+1];
         }
    }
    return $flag==null?[$min,$max]:$flag='min'?$min:$max;
}
public function findMinWithTunament($array=null,$testArray=null,$flag=null){
    if(!empty($array) || count($array)>0){
     return $this->testArrayTuna($array,null);
    }else{
    $min= $this->testArrayTuna($testArray,$flag);
    $max= $this->testArrayTuna($testArray,$flag);
    }
    return [$min, $max];
    
 }
   
}
$address = new Address("test", new PhoneNumber('123456778'));
$address->setAdd(['address1','address2']);
$db = new AddressTable();
$newUser = new index($db);
$newUser->setUserProfile('saurabh','test@gmail.com',$address);
$arrFirstKey= 5 ??array_key_first($newUser->testArray);

$saveUser = $newUser->findMinWithTunament($newUser->testArray);
while(count($saveUser[0])!=1){
    $saveUser = $newUser->findMinWithTunament($saveUser[0],'min');
   // $min = $newUser->findMinWithTunament($max,'max');
    
}
echo "<pre>";
print_r([$saveUser]);

    

  



