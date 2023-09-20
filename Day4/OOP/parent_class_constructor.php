<?php
 class BankAccount{
    private $balance;

    public function __construct($balance){
          $this->balance = $balance;
    }

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

  public function __construct($balance,$intrestRate){

      # call Parent class constructor
      parent::__construct($balance);

      $this->intrestRate = $intrestRate;
  }

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

$account = new SavingAccount(100,0.05);

echo '<pre>';

// print_r($account);

$account->addInterest();
echo $account->getBalance();


?>