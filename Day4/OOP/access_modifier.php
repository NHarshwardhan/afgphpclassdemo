<?php
 #Private :  only within class 
class BankAccount{
       
     #properties
     public $accountNumber;
     private $balance;

     #method
     public function deposit($amount){
           if($amount > 0){
             
                $this->balance += $amount;
           }
     }

     public function withdraw($amount){
             if($amount <= $this->balance){
                  $this->balance -= $amount;
                  return true;
             }
             return false;
     }

     public function getBalance(){
           return $this->balance;
     }

     

      
}

#instance of class
$account = new BankAccount();
$account->accountNumber = 1;
// $account->balance = 100; # access outside class Error
$account->deposit(100);
echo 'Total Balance = '.$account->getBalance();


?>