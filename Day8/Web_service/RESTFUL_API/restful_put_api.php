<?php

     if($_SERVER['REQUEST_METHOD'] !== 'PUT'){
            
           http_response_code(405);
           echo json_encode([
               'success'=>0,
               'message'=>'Invalid Request Method'
           ]);
     }

     require 'connect.php';

     # Get data from browser for update
     $data = json_decode(file_get_contents("php://input"),true);

     if(isset($data)){
         
           if(!isset($data['record_id'])){
                 echo json_encode([
                      'success'=>0,
                      'message'=>'Please provide the Record Id'
                 ]);
                 exit;
           }

           $id = $data['record_id'];
           $fullname = $data['fullname'];
           $email = $data['email'];
           $gender = $data['gender'];
           $qualification = $data['qualification'];

           try{
                $sql = "UPDATE users SET FullName='$fullname',Email='$email',Gender='$gender',Qualification='$qualification'
                
                               WHERE id = '$id'";

                if($conn->exec($sql)){
                       http_response_code(201);
                       echo json_encode([
                            'success'=>1,
                            'message'=>'Data updated Successfully'
                       ]);
                }
                else{
                    echo json_encode([
                        'success'=>0,
                        'message'=>'User Id Does not Exist'
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

     }



?>