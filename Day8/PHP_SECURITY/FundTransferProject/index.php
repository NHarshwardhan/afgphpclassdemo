<?php
   session_start();

   require './inc/header.php';

   $inputs = []; # Store sanitized input value
   $errors = [];

   $request_method = strtoupper($_SERVER['REQUEST_METHOD']);

   if($request_method === 'GET'){

          # Generate a Token
           $_SESSION['token'] = bin2hex(random_bytes(35));

          # show the form 
          require './inc/get.php';
   }
   else if($request_method === 'POST'){
           
        # handle the form submission

         require './inc/post.php';

   }

   require './inc/footer.php';

?>