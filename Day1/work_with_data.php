<?php

// Operator
   
// Arithmetic operators : + , - ,*, / ,%, ++ ,--

// $a = 10;
// $b = ++$a;  #pre-increment :  First Increment and the assign the value
// echo " value of a = ".$a;
// echo " value of b = ".$b;


// $a = 10;
// $b = $a++; #post-increment:  First assign and then increment
// echo " value of a = ".$a;
// echo " value of b = ".$b;


// Compound Assignment operator , +=, -=, /=, %=

// $a = $a+1 ;
// $a+=1;

// Built-in function 

 #number_format()
 echo 'Original Number = 12345 </br></br>';
 $nf = number_format(12345);
 echo 'Formatted Number = '.$nf; 
 $nf = number_format(12345,2);
 echo '<br>Formatted Number  with 2 decimal places= '.$nf; 
 $nf = number_format(12345.674,2);
 echo '<br>Formatted Number 12345.674 with 2 decimal places= '.$nf; 


 #date()
 $today = date('Y-m-d');
 echo '<br><br><br>';
 echo 'Current Date = '.$today;

 #isset()
 $name = "";
 echo '<br><br><br>';
 var_dump($name);

 #is_numeric()
  $price = 898;
  echo '<br><br><br>';
  var_dump(is_numeric($price))
?>