<?php

   # HTTPS : return non-empty value if the current requrest is using HTTPS
   # HTTP_HOST : return the host for the current request
   # REQUEST_URI :  return the URI for the current request


   if(!isset($_SERVER['HTTPS'])){
       
     $url = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

     header('Location'.$url);
    
     exit();     


   }
   



?>