<?php
   
   try{
       $client = new SoapClient('calculator.wsdl');

       $result = $client->addNumbers(1,14);

       echo 'The sum is '. $result;

   }
   catch(SoapFault $e){
      echo 'Error: '.$e->getMessage();
   }




?>