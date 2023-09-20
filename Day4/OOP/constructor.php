<?php

# Constructor = used to initalize the properites of an object.

        // class BankAccount{
        //         private $accountNumber;
        //         private $balance;

        //         public function __construct($accountNumber, $balance){

        //                $this->accountNumber = $accountNumber;
        //                $this->balance = $balance;
        //         }

        // }

        // $account1 = new BankAccount(1,100);
        // $account2 = new BankAccount(2,200);

        // echo '<pre>';
        // print_r($account1);
        // print_r($account2);


# Constructor Promotion
class BankAccount{

    public function __construct(private $accountNumber, private $balance ){}    

}

$account1 = new BankAccount(1,100);
$account2 = new BankAccount(2,200);
$account3 = new BankAccount(3,300);

echo '<pre>';
print_r($account1);
print_r($account2);
print_r($account3);



?>