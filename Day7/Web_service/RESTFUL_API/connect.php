<?php

    try{
         $conn = new PDO('mysql:host=localhost;dbname=afgphp','root','');

    }
    catch(PDOException $e){
        echo 'Error: could not connect'.$e->getMessage();
    }

?>