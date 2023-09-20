<?php
  
  $a = 10;
  $b = '10';

  var_dump($a==$b); //true :  Match value
  echo '<br>';
  var_dump($a===$b); //false  Match value and datatype

  #logical Operator
  $username = 'admin';
  $password = 'admin1234';
  echo '<br><br><br>';
  var_dump($username==='admin' && $password==='admin');
  echo '<br>';
  var_dump($username==='admin' || $password==='admin');

  $isAdmin = true;
  echo '<br>';
  var_dump(!$isAdmin);


  #selection Structure
   $age = 18;
   echo '<br><br><br>';
   if($age >=18){
      echo 'You can vote..!';
   }
   else{
      echo 'You can not vote..!';
   }

   $score = 89;
   echo '<br><br><br>';
   echo 'Score  = '. $score;
   if($score >=90 && $score <100){
     echo '<br>Grade A';
   }
   else if($score >=80 && $score <90){
     echo '<br>Grade B';
   }
   else{
      echo '<br>Fail';
   }

   #conditional operator
   $myage = 8;
   $result = ($myage >=18)? 'can vote..!': 'can not vote..!';
   echo '<br><br><br>';
   echo $result;

   #switch
   $color = 'red';
   echo '<br><br>';
   switch ($color) {
    case 'red':
        echo 'You have selected red color';
        break;

    case 'blue':
        echo 'You have selected blue color';
        break;
    
    default:
        echo 'Invalid color';
        break;
   }
  

?>