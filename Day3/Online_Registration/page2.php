<?php 

 session_start();
  
 foreach($_POST as $key=> $value){
      $_SESSION['userInfo'][$key] = $value;
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
      <form action="final_submit.php" method="post">
            <p>
                <label>Gender</label>
                <input type="radio" name="gender" value="female"/> Female
                <input type="radio" name="gender" value="male"/> Male
            </p>
            <p>
                <label>Qualification</label>
                <select name="qualification">
                      <option>------Select--------</option>
                      <option value="graduation">Graduation</option>
                      <option value="postgraduation">Post Graduation</option>
                </select>
            </p>
             
            <p>
                <input type="submit" value="submit"/>
            </p>


        
      </form>
</body>
</html>