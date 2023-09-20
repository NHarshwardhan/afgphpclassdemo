
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <h1>Add New Record</h1>
       <form action="insertProcess.php" method="post">
            <p>
                 <label>Product Code</label>
                 <input type="text"  name="Pcode">
            </p>
            <p>
                 <label>Product Name</label>
                 <input type="text"  name="Pname">
            </p>
            <p>
                 <label>Product Price</label>
                 <input type="text" name="Pprice">
            </p>

            <p>
                 
                 <input type="submit" name="action" value="Add">
            </p>
       </form>

       <a href="Read.php">Show Record</a>
</body>
</html>