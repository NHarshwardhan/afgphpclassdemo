<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <title>Online Ecommerce Application</title>
</head>
<body>
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-3">
                     <img class="img-fluid" src="data:image/png;base64,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" alt="">
              </div>
              <div class="offset-md-8 col-md-1 mt-5">
                     
                     <?php if(isset($_SESSION['isLoggedIn'])):?>
                        <a href="logout.php" class="btn btn-primary">Logout</a>

                     <?php else :?>
                        <a href="Form_based.php" class="btn btn-danger">Login</a>

                     <?php endif;?>   

              </div>
              <hr/>
          </div>
          <div class="row">
             <div class="col-md-12">
              <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
             
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a style=" font-weight:bold; font-size: 20px;"  class="nav-link active" aria-current="page" href="#">Home</a>
                      <a style=" font-weight:bold; font-size: 20px;"  class="nav-link" href="index.php?query=mobile">Mobile</a>
                      <a style=" font-weight:bold; font-size: 20px;"  class="nav-link" href="index.php?query=laptop">Laptop</a>                      
                    </div>
                  </div>
                </div>
              </nav>
             </div>
          </div>
          <hr/>
