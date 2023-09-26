<?php

  

   function getHello(){
       $conn = new PDO('mysql:host=localhost;dbname=afgphp','root','');
       $sql = "SELECT * FROM users";
       $result = $conn->query($sql);
       $data = $result->fetchAll(PDO::FETCH_ASSOC);

    //    $string = 'Hello HELLO';
       return $data;
   }

   function getGoodBye(){
        $string = "Goodbye All";
        return $string;

   }


?>