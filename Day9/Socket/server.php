<?php

$host = '127.0.0.1';
$port = 25003;

# never timeout then set 0
  set_time_limit(0);

# Create Socket
$socket =  socket_create(AF_INET,SOCK_STREAM,0) or die('COuld not create socket\n');

# Bind Socket to Port
  $result = socket_bind($socket,$host,$port) or die('Could not bind socket\n');

# start listening for connections
 $result = socket_listen($socket,3) or die('could not set up socket listener\n');


# Accept Incoming connections
  # spawn another socket to handle communication

  $spawn = socket_accept($socket) or die('Could not accept incoming connection\n');
  
  # Read Client input
  $input = socket_read($spawn,1024) or die('Could not read input\n');

  # Clean up input string
    $input = trim($input);

    echo '<br> Client Message = '.$input;

  # Reverse client input and send back
    $output = strrev($input)."\n";
 
    socket_write($spawn,$output,strlen($output)) or die('Could not write output\n');

  # close Socket
    socket_close($spawn);
    socket_close($socket);



?>