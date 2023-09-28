<?php
  session_start();
  if(isset($_POST['action'])){
 
         $email = $_POST['email'];
         $password = $_POST['password'];
         $url = $_POST['url'];
         $password = sha1($email.$password);
         #Register proecess

         try{
               $conn = new PDO('mysql:host=localhost;dbname=afgphp','root','');

               $sql = "SELECT * FROM loginuser WHERE email='$email' AND password='$password'";

               $result = $conn->query($sql);

               $valid = $result->rowCount();

               if($valid !=0){
                   
                   $_SESSION['isLoggedIn'] = true;

                   echo "<script>
                            alert('You are authenticated user');
                            window.location.href='$url';

                         </script>";
               }
               else{
                echo ' <script>
                        alert("Data does not match , Please Register Yourself");
                        window.location.href="http://localhost:8300/SeptPHP23/Day6/Secure_connection/Authentication/register.php";

                    </script>';
               }

             
         }
         catch(PDOException $e){
              echo 'Error: could not connect'. $e->getMessage();
         }
  }


?>