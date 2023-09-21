<?php
   
       #Magic Method : __get, __set, __call, __invoke, __construct, __toString

       # __set() Method :  When You attempt to write to a non-existing or inaccessible property
                           # It accepts the name and value of the property that you write to.
                           
       # __get() Method : When You attempt to access to a non-existing or inaccessible property
               
    //    class HtmlElement{
    //           private $attributes = [];

    //           private $tag;

    //           public function __construct($tag){
    //               $this->tag = $tag;
    //           }

    //           public function __set($name,$value){

    //               $this->attributes[$name]= $value;
    //           }


    //           public function __get($name){
                    
    //               if(array_key_exists($name,$this->attributes)){
    //                    return $this->attributes[$name];
    //               }
    //           }

    //           public function html($innerHTML = ''){
                      
    //                  $html = "<{$this->tag}";

    //                  foreach($this->attributes as $key => $value){
    //                         $html.= ' '.$key. '="'.$value.'"';
    //                  }
    //                  $html .='>';
    //                  $html.= $innerHTML;
    //                  $html .= "</$this->tag>";

    //                  return $html;
    //           }
    //    }
          
    //     $div = new HtmlElement('div');

    //     $div->id = 'page';

    //     $div->class = 'light';

    //     echo $div->html('Hello');

      

       # __call() Method: invoked automatically ,when a non-existing method or inaccessible method is called
        
    //    class Str{
            

    //             private $functions = ['length'=>'strlen','upper'=> 'strtoupper','lower'=>'strtolower'];


    //             public function __construct(private $s){}


    //             public function __call($method,$args){
                        
    //               if(!in_array($method, array_keys($this->functions))){
    //                     throw new BadMethodCallException();
    //               }

    //               array_unshift($args, $this->s);
    //               return call_user_func_array($this->functions[$method],$args);

    //             }


    //    }


     # __invoke() Method: invoked, when we call an object as a function.

    //  class Comparator{

    //        public function __construct(private $key){}

    //        public function __invoke($a,$b){
              
    //          return $a[$this->key] <=> $b[$this->key];
    //        }


    //  }
  
    //  $customers = [
    //      ['id'=> 1, 'name'=>'john','credit'=>20000],
    //      ['id'=> 3, 'name'=>'Alice','credit'=>10000],
    //      ['id'=> 2, 'name'=>'Bob','credit'=>15000],
    //  ];

    //  #sort customers by names
    //  usort($customers, new Comparator('name'));
    //  echo '<pre>';
    //  print_r($customers);

    // #sort customers by credit
    // usort($customers, new Comparator('credit'));
    // echo '<pre>';
    // print_r($customers);




    # __toString(): return the string representation of an object.

        // class BankAccount{

        //      public function __construct(private $accountNumber, private $balance){}

        //      public function __toString(){

        //         return "Bank Account: $this->accountNumber .Balance : $$this->balance"; 
        //      }

        // }
    
        // $account = new BankAccount('12345456',100);

        // echo $account;



        #------------return value of __toString()-------------------

        class Quarter{

                private $number;
                
                public function  __construct($number){
                          if($number < 0 && $number > 4){
                              throw new InvalidArgumentException('Quarter must be between 0 to 4');
                          }      

                          $this->number = $number;
                }

                public function __toString(){
                       return $this->number;
                }
        }

        $quarter = new Quarter(2);
        echo $quarter;
        


?>