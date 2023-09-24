<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="row">
             <div class="col-md-12">
                    <h3>Form Based Authentication</h3>
             </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
            <form action="registerProcess.php" method="post">
                    
                    <p>
                      <label>Email</label>
                      <input type="text" name="email" class="form-control" />
                    </p> 
                    <p>
                      <label>Password</label>
                      <input type="password" name="password" class="form-control" />
                    </p>
                    <br>
                    
                    <p>
                    <input type="submit" value="Register" name="action" class="btn btn-success"/>  
                    &nbsp;&nbsp;
                    </p>

                  </form>
            </div>
        </div>
        
        </div>
    </div>
    
</body>
</html>