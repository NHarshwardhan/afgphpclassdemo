<?php
  
//    if(isset($_GET['id'])){

//         require 'connect.php';

//         $id = $_GET['id'];

//         try{
//             $sql = "DELETE FROM users WHERE id = $id";
//             $conn->exec($sql);
//             echo ' <script>
//                         alert("Record deleted successfully");
//                         window.location.href="http://localhost:8300/SeptPHP23/Day4/Database/PDO/displayRecord.php";

//             </script>';
//         }
//         catch(Exception $e){
//             echo "Error:Could not able to execute $sql ". $e->getMessage();

//         }


//    }

   if(isset($_GET['id'])){

    require 'connect.php';

    $id = $_GET['id'];

    try{
        $sql = "DELETE FROM users WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();
       
        echo ' <script>
                    alert("Record deleted successfully");
                    window.location.href="http://localhost:8300/SeptPHP23/Day4/Database/PDO/displayRecord.php";

        </script>';
    }
    catch(Exception $e){
        echo "Error:Could not able to execute $sql ". $e->getMessage();

    }


}

   unset($conn);

?>