<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <form action="page2.php" method="post">
            <p>
                 <label>Full Name</label>
                 <input type="text" name="fullname">
            </p>
            <p>
                 <label>Email</label>
                 <input type="text" name="email">
            </p>
            <p>
                 <label>Password</label>
                 <input type="password" name="password">
            </p>
            <p>
                 
                 <input type="submit" value="next">
            </p>

       </form>
</body>
</html>