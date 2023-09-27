<?php
   
   $servername = 'localhost';
   $username = 'root';
   $password = '';
   $dbname = 'afgphp';

   try{
       $conn = mysqli_connect($servername,$username,$password,$dbname);
   }
   catch(Exception $e){
       echo 'Error: Could not connect'.mysqli_connect_error();

   }

?>