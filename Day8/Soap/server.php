<?php

   require './server_functions.php';

   $server = new SoapServer('simple.wsdl');

   $server->addFunction('getHello');
   $server->addFunction('getGoodbye');
   
   $server->handle();



?>