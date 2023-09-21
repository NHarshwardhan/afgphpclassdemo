<?php
 # overriding method :  It allows a child class to provide a specific implementation of a method 
                        # already provided by its parent class

  
 # The method in the parent class is called overriden method
 # the method in the child class is known as the overriding method

        //  class Robot{
        //        public function greet(){
        //           return  'greet method from Robot class';
        //        }
        //  }

        //  class Android extends Robot{

        //        public function greet(){
        //           return 'greet function from Android class';
        //        }
        //  }
        
        //  $robot = new Robot();
        //  echo $robot->greet();
        //  echo '<br>';
        //  $android = new Android();
        //  echo $android->greet();


 # Call the overriden method in the overriding method
   
    //  class Robot{
    //            public function greet(){
    //               return  'greet method from Robot class';
    //            }
    //      }

    // class Android extends Robot{

    //     public function greet(){
    //         $greeting = parent::greet();
    //         return $greeting.' from Android class';
    //     }
    // }


    // $android = new Android();
    // echo $android->greet();
                


    # More---------------------------

    // class BankAccount{
       
    //     #properties
    
    //     private $balance;
      
    //     public function __construct($amount){
    //            $this->balance = $amount;
    //     }

    //     public function getBalance(){
    //           return $this->balance;
    //     }
    //     #method
    //     public function deposit($amount){
    //           if($amount > 0){
                
    //                $this->balance += $amount;
    //           }
    //           return $this;
    //     }
   
    //     public function withdraw($amount){
    //             if($amount > 0 && $amount <= $this->balance){
    //                  $this->balance -= $amount;
    //                  return true;
    //             }
    //             return false;
    //     }
   
         
    // }


    // class CheckingAccount extends BankAccount{
    //        private $minBalance;

    //        public function __construct($amount,$minBalance){
    //               if($amount > 0 && $amount >= $minBalance){
    //                    parent::__construct($amount);
    //                    $this->minBalance = $minBalance;
    //               }
               
    //        }

    //        public function withdraw($amount){
    //              $canWithdraw =  $amount >0 && $this->getBalance() - $amount > $this->minBalance;

    //              if($canWithdraw){
    //                    parent::withdraw($amount);
    //                    return true;
    //              }

    //              return false;
             
    //        }
    // }

    // $acc1 = new CheckingAccount(100,20);
    // echo $acc1->withdraw(30);


    # prevent the method in the class from overriding the method in parent class
       # - using final keyword

    class Robot{
          public function greet(){
              return 'greet function from Robot class';
          }

          final public function id(){
             return uniqid();
          }
    }

    class Android extends Robot{
           public function greet(){
               $greeting = parent::greet();
               return $greeting. 'from Android class';
           }

           public function id(){
               return uniqid('Android-');
           }
    }



?>