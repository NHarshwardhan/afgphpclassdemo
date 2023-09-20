<?php
    require 'connect.php';

    // $sql = "SELECT * FROM products";
    //  $sql = "SELECT * FROM products WHERE productID > 2";
    $sql = "SELECT * FROM products LIMIT 2";

    $result = mysqli_query($conn,$sql);
   
    if(mysqli_num_rows($result) > 0){
          echo '<table border="1">
                     <tr>
                        <th>Id</th>
                        <th>ProductCode</th>
                        <th>ProductName</th>
                        <th>ProductPrice</th>
                        <th>Action</th>
                     </tr>        
          ';

         while($row = mysqli_fetch_array($result)){
              echo "<tr>";
              echo "<td>".$row['productID']."</td>";
              echo "<td>".$row['ProductCode']."</td>";
              echo "<td>".$row['ProductName']."</td>";
              echo "<td>".$row['ListPrice']."</td>";
              echo "<td><a href='editRecord.php?id=".$row['productID']."'>Edit</a></td>";
              echo "</tr>";
         }

         echo '</table>';
         mysqli_free_result($result);
          
    }
    else{
          echo 'No Record Available';
    }





?>