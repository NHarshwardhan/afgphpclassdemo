<?php
  
   if(isset($_POST['action'])){
       
         $action = $_POST['action'];

         switch($action){

              case 'Login':
                  echo 'You have click on Login Button';
                  break;
              case 'Add':
                  echo 'You have click on Add Button';
                  break;

               case 'Read':
                  echo 'You have click on Read Button';
                  break;

               default:
                  echo 'Invaid selection';

         }


   }
   else{
      echo 'Page Not Found';
   }

?>