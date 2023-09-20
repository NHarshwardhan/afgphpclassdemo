<?php
    
    // if(isset($_POST['action'])){
    //       require 'connect.php';     

    //       $fullname = $_POST['fullname'];
    //       $email = $_POST['email'];
    //       $gender = $_POST['gender'];
    //       $qualification = $_POST['qualification'];


    //       $sql = "INSERT INTO users(FullName,Email,Gender,Qualification)VALUES('$fullname','$email','$gender','$qualification')";

          
    //       if($conn->query($sql)===true){
    //         echo ' <script>
    //                 alert("Record inserted successfully");
    //                 window.location.href="http://localhost:8300/SeptPHP23/Day4/Database/Mysqli_object/addForm.html";

    //                 </script>';
    //       }
    //       else{
    //           echo "Error:Could not able to execute $sql ". $conn->error;
    //       }


    //   $conn->close();

    // }


    if(isset($_POST['action'])){
        require 'connect.php';     

        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $qualification = $_POST['qualification'];


        $sql = "INSERT INTO users(FullName,Email,Gender,Qualification)VALUES(?,?,?,?)";
    
        if($stmt = $conn->prepare($sql)){

               #Bind variables to the prepared statement
               $stmt->bind_param("ssss",$fullname,$email,$gender,$qualification);

               $stmt->execute();
               echo ' <script>
                         alert("Record inserted successfully");
                         window.location.href="http://localhost:8300/SeptPHP23/Day4/Database/Mysqli_object/addForm.html";

               </script>';

        }
        else{
            echo "Error:Could not able to execute $sql ". $conn->error;

        }
        
        
        

    //Close statement
    $stmt->close();
    //Close connection
    $conn->close();

  }
?>