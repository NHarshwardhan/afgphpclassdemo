<?php
     require_once 'connect.php';

    //  $sql = "INSERT INTO products(ProductCode, ProductName,ListPrice)
    //             VALUES('ABC-123','Mobile',456.34)";

     #insert mutliple record
     $sql = "INSERT INTO products(ProductCode, ProductName,ListPrice)VALUES('ABC-123','Mobile',456.34),('ABC-124','SHOE',456.34),('ABC-125','JACKET',456.34)";

    if(mysqli_query($conn,$sql)){
          echo 'Record Insert successfully';
    }
    else{
          echo "Error: Could not able to execute $sql ".mysqli_error($conn);
    }


?>