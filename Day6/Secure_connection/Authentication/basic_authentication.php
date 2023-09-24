<?php

   # PHP_AUTH_USER , PHP_AUTH_PW

    $email = $_SERVER['PHP_AUTH_USER'];
    $password = $_SERVER['PHP_AUTH_PW'];

    if(!is_admin_login($email,$password)){

        header('WWW-Authenticate: Basic realm ="Admin"');
        header('HTTP/1.0 401 Unauthorized');
        exit();
    }
    else{
          header('Location: http://localhost:8300/SeptPHP23/Day6/MVC_CRUD/index.php?flag=1') ;
    }
    


   function is_admin_login($email,$password){

    try{
        $conn = new PDO('mysql:host=localhost;dbname=afgphp','root','');

        $sql = "SELECT * FROM loginuser WHERE email='$email' AND password='$password'";

        $result = $conn->query($sql);

        $valid = $result->rowCount();

        if($valid !=0){
           return true;
        }
        else{
           return false;
        }

      
  }
  catch(PDOException $e){
       echo 'Error: could not connect'. $e->getMessage();
  }
   }


?>