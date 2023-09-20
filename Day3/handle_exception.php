<?php
   
   function division($dividend, $divisor){
      if($divisor ==0){
         throw new Exception('Divison by zero');
      }
      else{
          $q = $dividend / $divisor;
          echo "<p> $dividend /  $divisor = $q </p>";
      }
   }

   try{
         division(10,0);
   }
   catch(Exception $e){
        echo '<p> Error Message: '.$e->getMessage().'</p>';

   }


?>