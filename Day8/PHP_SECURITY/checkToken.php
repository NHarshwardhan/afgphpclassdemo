<?php
    session_start();
   $token = $_POST['token'];

   if(!$token || $token !== $_SESSION['token']){

       header($_SERVER['SERVER_PROTOCOL'].' 405 method not allowed');

       exit;
   }
   else{
        echo 'Processing the form';
   }


?>