<?php

   class Customer{

         public function __construct(protected $name){}

         protected function format(){
            return ucwords($this->name);
         }

         public function getName(){
              return $this->format($this->name);
         }

   }

   class VIP extends Customer{
           
           protected function format(){
             return strtoupper($this->name);
           }
   }

   $bob = new Customer('bob allen');
   echo $bob->getName();

    echo '<br>';
   $alex = new VIP('peter parker');
   echo $alex->getName();

   #echo $bob->name; //Error


?>