<?php 

 session_start();

 require_once './connect.php';
  
 foreach($_POST as $key=> $value){
      $_SESSION['userInfo'][$key] = $value;
 }

 #extract(): convert textbox name into variable
 extract($_SESSION['userInfo']);

  

    $Sql = "INSERT INTO users(FullName, Email, Gender,Qualification)
                       VALUES('$fullname','$email','$gender','$qualification')";

    if(mysqli_query($conn,$Sql)){
        // echo 'Record Insert successfully';

        echo ' <script>
                      alert("Record Insert successfully");
                      window.location.href="http://localhost:8300/SeptPHP23/Day3/Online_Registration/page1.php";
         
        </script>';
    }
    else{
        echo "Error: Could not able to execute $sql ".mysqli_error($conn);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <a href="page1.php">Add New Record</a>
     <h3>Given Details are below , check and confirm</h3>
     <table border="1">
         <tr>
             <th>Full name</th>
             <td><?php echo $fullname;?></td>
         </tr>
         <tr>
             <th>Email</th>
             <td><?php echo $email;?></td>
         </tr>
         <tr>
             <th>Gender</th>
             <td><?php echo $gender;?></td>
         </tr>
         <tr>
             <th>Qualification</th>
             <td><?php echo $qualification;?></td>
         </tr>
     </table>
</body>
</html>