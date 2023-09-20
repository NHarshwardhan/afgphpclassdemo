<?php
   
     if(isset($_GET['id'])){
          require 'connect.php';

          $id = $_GET['id'];

          $sql = "SELECT * FROM products WHERE productID = $id";

          $result = mysqli_query($conn,$sql);

          $record = mysqli_fetch_array($result);
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
       <h1>Update Record no = <strong><?php echo $id;?></strong>
       <form action="updateProcess.php" method="post">
            <p>
                 <label>Product Code</label>
                 <input type="text" value="<?php echo $record['ProductCode'];?>" name="Pcode">
            </p>
            <p>
                 <label>Product Name</label>
                 <input type="text" value="<?php echo $record['ProductName'];?>" name="Pname">
            </p>
            <p>
                 <label>Product Price</label>
                 <input type="text" value="<?php echo $record['ListPrice'];?>" name="Pprice">
            </p>

              <input type="hidden" name="record_id" value="<?php echo $record['productID'];?>"/>
            <p>
                 
                 <input type="submit" name="action" value="Update">
            </p>
       </form>
</body>
</html>