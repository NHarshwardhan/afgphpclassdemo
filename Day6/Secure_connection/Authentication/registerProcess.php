<?php

  if(isset($_POST['action'])){

         $email = $_POST['email'];
         $password = $_POST['password'];

         $password = sha1($email.$password);
         

         #Register proecess

         try{
               $conn = new PDO('mysql:host=localhost;dbname=afgphp','root','');

               $sql = "INSERT INTO loginuser(email,password)VALUES('$email','$password')";

               $conn->exec($sql);

               echo ' <script>
                            alert("Record Inserted successfully");
                            window.location.href="http://localhost:8300/SeptPHP23/Day6/Secure_connection/Authentication/Form_based.php";
        
                </script>';
         }
         catch(PDOException $e){
              echo 'Error: could not connect'. $e->getMessage();
         }
  }


?>