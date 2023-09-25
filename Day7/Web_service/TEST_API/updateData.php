<?php
 
  if(isset($_POST['action'])){

    $api = 'http://localhost:8300/SeptPHP23/Day7/Web_service/RESTFUL_API/restful_put_api.php';

    $client = curl_init($api);
    curl_setopt($client,CURLOPT_PUT,true);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);

    $data = json_encode($_POST);   
  
    curl_setopt($client,CURLOPT_POSTFIELDS,$data);
  
    $response = curl_exec($client);    
    $result = json_decode($response,true);
     
    $msg = $result['message'];
    if($result){
          echo "<script>
                   alert('$msg');
               window.location.href='http://localhost:8300/SeptPHP23/Day7/Web_service/TEST_API/displayRecord.php';

            </script>";  
    }

   
   
   
   }


?>