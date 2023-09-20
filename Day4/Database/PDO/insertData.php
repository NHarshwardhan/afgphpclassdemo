<?php
    
//     if(isset($_POST['action'])){
//           require 'connect.php';     

//           $fullname = $_POST['fullname'];
//           $email = $_POST['email'];
//           $gender = $_POST['gender'];
//           $qualification = $_POST['qualification'];

//           try{
//             $sql = "INSERT INTO users(FullName,Email,Gender,Qualification)VALUES('$fullname','$email','$gender','$qualification')";
//             $conn->exec($sql);
//             echo ' <script>
//                           alert("Record inserted successfully");
//                          window.location.href="http://localhost:8300/SeptPHP23/Day4/Database/PDO/addForm.html";

//                    </script>';

//           }
//           catch(Exception $e){
//                echo "Error:Could not able to execute $sql ". $e->getMessage();

//           }

          
        

//     }

if(isset($_POST['action'])){
      require 'connect.php';     

      $fullname = $_POST['fullname'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
      $qualification = $_POST['qualification'];

      try{
        $sql = "INSERT INTO users(FullName,Email,Gender,Qualification)VALUES(:fullname,:email,:gender,:qualification)";
        $stmt = $conn->prepare($sql);

        #Bind Parameter to statement
        $stmt->bindParam(':fullname',$fullname);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':gender',$gender);
        $stmt->bindParam(':qualification',$qualification);

        #Execute
        $stmt->execute();
        echo ' <script>
                   alert("Record inserted successfully");
                   window.location.href="http://localhost:8300/SeptPHP23/Day4/Database/PDO/addForm.html";

               </script>';
        

      }
      catch(Exception $e){
           echo "Error:Could not able to execute $sql ". $e->getMessage();

      
      }
      
      unset($stmt);
}

 unset($conn)

?>