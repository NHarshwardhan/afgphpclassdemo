<?php

  // if(isset($_POST['action'])){

  //    require 'connect.php';

  //    $id = $_POST['record_id'];
  //    $fullname = $_POST['fullname'];
  //    $email = $_POST['email'];
  //    $gender = $_POST['gender'];
  //    $qualification = $_POST['qualification'];
    
  //    try{
  //     $sql = "UPDATE users SET FullName='$fullname',Email='$email',Gender='$gender',Qualification='$qualification'
     
  //              WHERE id = '$id'
  //             ";

  //     $conn->exec($sql);
  //     echo ' <script>
  //           alert("Record updated successfully");
  //           window.location.href="http://localhost:8300/SeptPHP23/Day4/Database/PDO/displayRecord.php";

  //            </script>';
  //    }
  //    catch(Exception $e){
  //         echo "Error:Could not able to execute $sql ". $e->getMessage();

  //    }
    
    
  //   }
  
  if(isset($_POST['action'])){

    require 'connect.php';

    $id = $_POST['record_id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $qualification = $_POST['qualification'];
   
    try{
     $sql = "UPDATE users SET FullName=:fullname,Email=:email,Gender=:gender,Qualification=:qualification
    
              WHERE id =:id
             ";

     $stmt =  $conn->prepare($sql);

      #Bind Parameter to statement
      $stmt->bindParam(':fullname',$fullname);
      $stmt->bindParam(':email',$email);
      $stmt->bindParam(':gender',$gender);
      $stmt->bindParam(':qualification',$qualification);
      $stmt->bindParam(':id',$id);


     #Execute
     $stmt->execute();
     echo ' <script>
                alert("Record updated successfully");
                window.location.href="http://localhost:8300/SeptPHP23/Day4/Database/PDO/addForm.html";

            </script>';
    }
    catch(Exception $e){
         echo "Error:Could not able to execute $sql ". $e->getMessage();

    }
   
   
   }
  unset($conn);

?>