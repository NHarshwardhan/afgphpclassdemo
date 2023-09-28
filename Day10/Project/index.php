<?php

   require './Pages/header.php';

   if(isset($_GET['query'])){
        
         $query = $_GET['query'];

         switch($query){

                case 'mobile':
                     require 'Pages/mobile.php';
                     break;

                case 'laptop':
                      require 'Pages/laptop.php';
                      break;


         }

    }
   


   require './Pages/footer.php';


?>