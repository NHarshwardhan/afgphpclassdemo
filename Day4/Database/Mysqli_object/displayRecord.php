<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

 <a href="addForm.html" class="btn btn-primary">Add Record</a>   
<?php
   
      require 'connect.php';

      $sql = "SELECT * FROM users";

      $result = $conn->query($sql);

      if($result->num_rows > 0){

           echo '<table class="container table table-bordered mt-5">
                    <tr>
                      <th>ID</th>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Gender</th>
                      <th>Qualification</th>   
                      <th colspan="2">Action</th>         
           
           ';

           while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['FullName']."</td>";
                    echo "<td>".$row['Email']."</td>";
                    echo "<td>".$row['Gender']."</td>";
                    echo "<td>".$row['Qualification']."</td>";
                    echo "<td><a class='btn btn-warning' href='editRecord.php?id=".$row['id']."'>Edit</a></td>";
                    echo "<td><a class='btn btn-danger' href='deleteRecord.php?id=".$row['id']."'>Delete</a></td>";
                    echo "</tr>";
           }

           echo '</table>';
           $result->free();
      }

      $conn->close();


?>