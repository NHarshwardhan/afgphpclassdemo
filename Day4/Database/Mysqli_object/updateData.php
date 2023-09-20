<?php

  // if(isset($_POST['action'])){

  //    require 'connect.php';

  //    $id = $_POST['record_id'];
  //    $fullname = $_POST['fullname'];
  //    $email = $_POST['email'];
  //    $gender = $_POST['gender'];
  //    $qualification = $_POST['qualification'];

  //    $sql = "UPDATE users SET FullName='$fullname',Email='$email',Gender='$gender',Qualification='$qualification'
     
  //              WHERE id = '$id'
  //    ";
     
  //    if($conn->query($sql)===true){
  //       echo ' <script>
  //               alert("Record updated successfully");
  //               window.location.href="http://localhost:8300/SeptPHP23/Day4/Database/Mysqli_object/displayRecord.php";

  //               </script>';
  //     }
  //     else{
  //         echo "Error:Could not able to execute $sql ". $conn->error;
  //     }


  // }
  
  if(isset($_POST['action'])){

    require 'connect.php';

    $id = $_POST['record_id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $qualification = $_POST['qualification'];

    $sql = "UPDATE users SET FullName=?,Email=?,Gender=?,Qualification=? WHERE id =? ";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param('ssssi',$fullname,$email,$gender,$qualification,$id);
    $stmt->execute();
    
    echo ' <script>
               alert("Record updated successfully");
               window.location.href="http://localhost:8300/SeptPHP23/Day4/Database/Mysqli_object/displayRecord.php";

               </script>';
    


 }
  $conn->close();

?>