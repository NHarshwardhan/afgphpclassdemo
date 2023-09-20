<?php
 
   if(isset($_GET['id'])){
        require 'connect.php';
        
        $id = $_GET['id'];

        $sql =  "DELETE FROM products WHERE productID = $id";

        if(mysqli_query($conn,$sql)){
            // echo 'Record Insert successfully';
    
            echo ' <script>
                        alert("Record Deleted successfully");
                        window.location.href="http://localhost:8300/SeptPHP23/Day4/Database/Mysqli/Read.php";
            
            </script>';
        }
        else{
            echo "Error: Could not able to execute $sql ".mysqli_error($conn);
        }
       
   }


?>