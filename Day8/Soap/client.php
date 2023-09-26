<?php
   
     try{
         
         $client = new SoapClient('simple.wsdl');

         $response = array();

         $response['users'] = $client->getHello();
         $response['goodbyeResponse'] = $client->getGoodbye();

         echo json_encode([
              'results'=>$response
         ]);
        
     }
     catch(SoapFault $e){
        echo 'Error: '.$e->getMessage();
     }

?>