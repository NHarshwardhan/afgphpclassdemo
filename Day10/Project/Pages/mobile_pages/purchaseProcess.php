<?php

   if(isset($_POST['action'])){
          
        $action = $_POST['action'];
        $qty = $_POST['qty'];
        $mobileInfo = unserialize(urldecode($_POST['data']));  
        

        switch($action){

             case 'Add to cart':
                  break;

             case 'Buy Now':
                  break;

        }
        
   }

?>