<?php

     if($_SERVER['REQUEST_METHOD'] !== 'DELETE'){
            http_response_code(405);
            echo json_encode([
                 'success'=>0,
                 'message'=>'Invalid Reuqest Method'
            ]);
            exit;
     }

     require 'connect.php';

     # Get the data from Reuqest
     $data = json_decode(file_get_contents('php://input'),true);

     if(isset($data)){
          
             if(!isset($data['id'])){
                    echo json_encode([
                         'success'=>0,
                         'message'=>'Please provide the user id'
                    ]);
                    exit;
             }

             $id = $data['id'];


     }

     try{
          $sql = "DELETE FROM users WHERE id = $id";
          if($conn->exec($sql)){
               http_response_code(201);
               echo json_encode([
                  'success'=>1,
                  'message'=>'Data deleted successfully'
               ]);
          }
          else{
                echo json_encode([
                    'success'=>0,
                    'message'=>'User id does not exist'
                ]);
          }

     }

     catch(Exception $e){
          http_response_code(500);
          echo json_encode([
              'success'=>0,
              'message'=>'User id does not exist'
          ]);
     }



?>