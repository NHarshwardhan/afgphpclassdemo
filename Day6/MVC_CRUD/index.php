<?php

require '../MVC_CRUD/controller/controller.php';

$controller = new Controller();

if(isset($_GET['flag'])){

    $controller->invoke();
}
else if(isset($_POST['action'])){

       if($_POST['action']==='Register'){
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $qualification = $_POST['qualification'];
    
            # send value to controller 
            $controller->register($fullname,$email,$gender,$qualification);
       }
       if($_POST['action']==='Update'){

            $id = $_POST['user_id'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $qualification = $_POST['qualification'];

            $controller->updateRecord($id,$fullname,$email,$gender,$qualification);
       }
}
else if(isset($_GET['eid'])){
      $controller->editRecord($_GET['eid']);
}
else if(isset($_GET['did'])){
      $controller->deleteRecord($_GET['did']);
}
else{
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
    <div class="container mt-5">
         <div class="row ">
             <div class="col-md-12">
                  <h2>MVC CRUD EXAMPLE</h2>
                  <br>
                <form action="index.php" method="post">
                    <p>
                      <label>Full Name</label>
                      <input type="text" name="fullname" class="form-control" />
                    </p>
                    <br>
                    <p>
                      <label>Email</label>
                      <input type="text" name="email" class="form-control" />
                    </p> <br>
                    <p>
                      <label>Gender</label>
                      <input type="radio" name="gender" value="female" /> Female
                      <input type="radio" name="gender" value="male" /> Male
                    </p> <br>
                    <p>
                      <label>Qualification</label>
                      <select name="qualification" class="form-control">
                        <option>------Select--------</option>
                        <option value="graduation">Graduation</option>
                        <option value="postgraduation">Post Graduation</option>
                      </select>
                    </p> <br>
                      <p>
                        <input type="submit" value="Register" name="action" class="btn btn-success"/>  
                        &nbsp;&nbsp;
                        <a href="index.php?flag=1" class="btn btn-primary">Show Record</a>
                      </p>

                  </form>
             </div>
         </div>
    </div>
  </body>
</html>

<?php }?>