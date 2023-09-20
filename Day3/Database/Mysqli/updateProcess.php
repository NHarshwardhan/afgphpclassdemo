<?php
  if(isset($_POST['action'])){

      require 'connect.php';

      $id = $_POST['record_id'];
      $Pcode = $_POST['Pcode'];
      $Pname = $_POST['Pname'];
      $Pprice = $_POST['Pprice'];

      $sql = "UPDATE products SET ProductCode = '$Pcode',ProductName='$Pname',ListPrice=$Pprice WHERE productID = $id";
     
    if(mysqli_query($conn,$sql)){
        // echo 'Record Insert successfully';

        echo ' <script>
                    alert("Record Updated successfully");
                    window.location.href="http://localhost:8300/SeptPHP23/Day3/Database/Mysqli/Read.php";
        
        </script>';
    }
    else{
        echo "Error: Could not able to execute $sql ".mysqli_error($conn);
    }

  }



?>