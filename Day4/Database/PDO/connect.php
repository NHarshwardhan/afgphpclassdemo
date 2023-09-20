<?php

  try{
     $conn = new PDO("mysql:host=localhost;dbname=afgphp","root","");
    //  echo  'connect successfully';
  } 
  
  catch(Exception $e){
         echo "Error: Could Not Connect". $e->getMessage(); 

  }


?>