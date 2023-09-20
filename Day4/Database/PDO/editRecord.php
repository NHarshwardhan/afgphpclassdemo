<?php
 
  if(isset($_GET['id'])){

       require 'connect.php';

       $id = $_GET['id'];

       $sql = "SELECT * FROM users WHERE id = $id";

       $result = $conn->query($sql);

       $record = $result->fetch();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
         <div class="row">
             <div class="col-md-12">
                  <h2>Update  Record</h2>
                <form action="updateData.php" method="post">
                    <p>
                      <label>Full Name</label>
                      <input type="text" name="fullname" value="<?php echo $record['FullName'];?>" class="form-control" />
                    </p>
                    <br>
                    <p>
                      <label>Email</label>
                      <input type="text" name="email" value="<?php echo $record['Email'];?>" class="form-control" />
                    </p> <br>
                    <p>
                      <label>Gender</label>
                      <input type="radio" name="gender" value="female" <?php if($record['Gender']=='female'){echo "checked";}?>  /> Female
                      <input type="radio" name="gender" value="male"  <?php if($record['Gender']=='male'){echo "checked";}?>   /> Male
                    </p> <br>
                    <p>
                      <label>Qualification</label>
                      <select name="qualification" class="form-control">
                        <option>------Select--------</option>
                        <option value="graduation" <?php if($record['Qualification']=='graduation'){echo "selected";}?>>Graduation</option>
                        <option value="postgraduation" <?php if($record['Qualification']=='postgraduation'){echo "selected";}?>>Post Graduation</option>
                      </select>
                    </p> <br>

                      <p>
                         <input type="hidden" name="record_id" value="<?php echo $record['id'];?>"/>
                      </p>
                      <p>
                        <input type="submit" value="Update" name="action" class="btn btn-warning"/>  
                        <!-- <a href="displayRecord.php" class="btn btn-primary">Show Record</a> -->
                      </p>

                  </form>
             </div>
         </div>
    </div>
  </body>
</html>

