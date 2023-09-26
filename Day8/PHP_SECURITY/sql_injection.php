<?php
   
    #Insecure code
    $articleid = $_GET['article'];

    // $sql = "SELECT * FROM articles WHERE articleid='$articleid'"

    # Sql Injection
     
     $sql = "SELECT * FROM articles WHERE articleid=1+union+select+1,version()";



     #Secure Code

     if(!empty($_GET['user_id']) && (is_numeric($_GET['user_id'])))

     $sql1 = "SELECT * FROM users WHERE user_id = ?"

     # Prepare
     # Bind the data
     # Execute






?>