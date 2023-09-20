<?php
   
   #round()
   $subtotal = 15.99;
   $tax_rate = 0.08;
   echo '<br>';
   echo $subtotal * $tax_rate;
   echo '<br>After using round() = '. round($subtotal * $tax_rate,2);

   #max(),min()
   $num1 = 10;
   $num2 = 20;
   echo '<br>';
   echo str_repeat('*', 30);
   echo '<br>Maxmium b/w 10 and 20 = '.max($num1,$num2);
   echo '<br>Minimum b/w 10 and 20 = '.min($num1,$num2);


   #Generate Random number
   $number = 0;
   $places =5;
   for($i = 0; $i<$places;$i++){
       $number+= mt_rand(0,9);
       $number/=10;
   }
   echo '<br>';
   echo str_repeat('*', 30);
   echo '<br>Random value with 5 decimal places = '.$number;


   #Generate Random Password
     $password_length = 8;
     # Add symbol to the password
     $symbols = '~!@#$%^&*()_+{}:?><>?<:[]=/.,';
     $symbol_count = strlen($symbols);
     #choose a random position
     $index = mt_rand(0,$symbol_count-1);
     # Add the symbol
     $password = substr($symbols,$index,1);
     #digit : 48-57 
     $password.= chr(mt_rand(48,57));
     #letter(A-Z): 65-90
     $password.= chr(mt_rand(65,90));
     #a-z : 97-122
     while(strlen($password) < $password_length ){
          $password.= chr(mt_rand(97,122));          
     }
     #suffle string
     $password = str_shuffle($password);
     echo '<br>';
     echo str_repeat('*', 30);
     echo '<br> Generated Password = '.$password;

?>