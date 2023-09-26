<?php

   if($_SERVER['REQUEST_METHOD'] !== "GET"){
        http_response_code(405);
        echo json_encode([
             'success'=>0,
             'message'=>'Invalid Reuqest Method, HTTP METHOD should be GET'
        ]);
        exit;
   }

   require 'connect.php';
  
   if(isset($_GET['id'])){
        $recordId = $_GET['id'];
   }

   try{
        $sql = isset($recordId)? "SELECT * FROM users WHERE id = '$recordId'" :"SELECT * FROM users";
        $result = $conn->query($sql);
        if($result->rowCount() > 0){
                  
               if(isset($recordId)){
                     $data = $result->fetch(PDO::FETCH_ASSOC);
               }
               else{
                    $data = $result->fetchAll(PDO::FETCH_ASSOC);
               }
              

                # returing JSON Response
                echo json_encode([
                        'success'=>1,
                        'results'=>$data
                  ]);
        }
        else{
            echo json_encode([
                'success'=>0,
                'message'=>'No Result Found !'
            ]);
        }     

        
   }
   catch(Exception $e){
         http_response_code(500);
         echo json_encode([
              'success'=>0,
              'message'=>$e->getMessage()
         ]);
   }




?>