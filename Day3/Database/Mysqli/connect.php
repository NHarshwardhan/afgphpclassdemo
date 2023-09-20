<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'afgphp';
  
     try{
          $conn = mysqli_connect($servername,$username,$password,$dbname);
        //   echo 'Connected successfully';

    }
    catch(Exception $e){
        echo 'Error: Could Not Connect '.mysqli_connect_error();

    }





?>