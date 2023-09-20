<?php

class BankAccount{
       
     #properties
     public $accountNumber;
     public $balance;

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

      
}

#instance of class
$account = new BankAccount();
$account->accountNumber = 1;
$account->balance = 100;

echo '<pre>';
print_r($account);

$account->deposit(100);
echo '<pre>';
print_r($account);

$account->withdraw(100);
echo '<pre>';
print_r($account);

?>