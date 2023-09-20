<?php

    //    if(isset($_POST['action'])){

    //         require 'connect.php';

    //         $Pcode = $_POST['Pcode'];
    //         $Pname = $_POST['Pname'];
    //         $Pprice = $_POST['Pprice'];

    //         $sql = "INSERT INTO products(ProductCode, ProductName,ListPrice)VALUES('$Pcode','$Pname',$Pprice)";

    //         if(mysqli_query($conn,$sql)){            
        
    //             echo ' <script>
    //                         alert("Record Inserted successfully");
    //                         window.location.href="http://localhost:8300/SeptPHP23/Day4/Database/Mysqli/Read.php";
                
    //             </script>';
    //         }
    //         else{
    //             echo "Error: Could not able to execute $sql ".mysqli_error($conn);
    //         }


    //    }

    // 



    // ---------------Implement Prepare Statement--------------------------
         if(isset($_POST['action'])){

            require 'connect.php';

            $Pcode = $_POST['Pcode'];
            $Pname = $_POST['Pname'];
            $Pprice = $_POST['Pprice'];
             
            #Prepare an insert statement        
            $sql = "INSERT INTO products(ProductCode, ProductName,ListPrice)VALUES(?,?,?)";

            if($stmt = mysqli_prepare($conn,$sql)){
                  # b-> binary , d-> double, i- integer , s-> string
                  
                  # Bind variables to the prepared statement as parameter                    
                  mysqli_stmt_bind_param($stmt,'ssd',$Pcode,$Pname,$Pprice);

                  mysqli_stmt_execute($stmt);

                  
                  echo ' <script>
                            alert("Record Inserted successfully");
                            window.location.href="http://localhost:8300/SeptPHP23/Day4/Database/Mysqli/Read.php";
                
                  </script>';


            }
            else{
                echo "Error: Could not able to execute $sql ".mysqli_error($conn);
            }
           
           #close statement 
           mysqli_stmt_close($stmt); 


       }

       #close connection
       mysqli_close($conn);


?>
