<?php
  
  # Inheritance :  allows a class to reuse the code from another class without duplicating it

   #parent class, Base class, Super class
  class BankAccount{
        private $balance;

        public function getBalance(){

             return $this->balance;
        }

        public function deposit($amount){
             
               if($amount > 0){
                   $this->balance += $amount;
               }
               return $this;
        }
  }

  #Child class, Derived class, Sub class
  class SavingAccount extends BankAccount{

      private $intrestRate;

      public function setIntrestRate($intrestRate){
          $this->intrestRate = $intrestRate;
      }

      public function addInterest(){
            #calculate Interest
             $interest = $this->intrestRate * $this->getBalance();

            #deposit interest to the balance
            $this->deposit($interest);
            
      }
  }


  $account = new SavingAccount();
  $account->deposit(100);

  #set Intrest rate
  $account->setIntrestRate(0.05);
  $account->addInterest();
  echo $account->getBalance();





?>