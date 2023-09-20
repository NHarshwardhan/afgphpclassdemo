<?php
  
//    if(isset($_GET['id'])){

//         require 'connect.php';

//         $id = $_GET['id'];

//         $sql = "DELETE FROM users WHERE id = $id";

//         if($conn->query($sql)===true){
//             echo ' <script>
//                     alert("Record deleted successfully");
//                     window.location.href="http://localhost:8300/SeptPHP23/Day4/Database/Mysqli_object/displayRecord.php";
    
//                     </script>';
//           }
//           else{
//               echo "Error:Could not able to execute $sql ". $conn->error;
//           }
    
//    }

if(isset($_GET['id'])){

    require 'connect.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = ?";
   
    $stmt = $conn->prepare($sql);

    $stmt->bind_param('i',$id);

    $stmt->execute();
    
    echo ' <script>
    alert("Record deleted successfully");
    window.location.href="http://localhost:8300/SeptPHP23/Day4/Database/Mysqli_object/displayRecord.php";

    </script>';
   

}
   $conn->close();

?>