<?php

   $host = '127.0.0.1';
   $port = 25003;

   $message = "Hello Server";

   echo "Client = ".$message;

   # Create Socket
    $socket =  socket_create(AF_INET,SOCK_STREAM,0) or die('COuld not create socket\n');
   
   # Connect to server
    $result = socket_connect($socket,$host,$port) or die('Could not connect to server\n');

   # Send String to Server
     socket_write($socket,$message,strlen($message)) or die('Could not send data to server\n');


   # Get Server Response
     $result = socket_read($socket,1024) or die('Could not read server response\n');

     echo '<br><br> Server = '.$result;

   # close Socket
      socket_close($socket);



?>