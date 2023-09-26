<?php
     
     if($_SERVER['REQUEST_METHOD'] !== 'POST'){

            http_response_code(405);
            echo json_encode([
                  'success'=>0,
                  'message'=> 'Invalid Request Method'
            ]);
            exit;
     }

     require 'connect.php';

     # capture browser data
     $data = json_decode(file_get_contents("php://input"),true);

     if(isset($data)){
           $fullname = $data['fullname'];
           $email = $data['email'];
           $gender = $data['gender'];
           $qualification = $data['qualification'];
     }

     try{
        $sql = "INSERT INTO users(FullName,Email,Gender,Qualification)
                             VALUES('$fullname','$email','$gender','$qualification')";

        if($conn->exec($sql)){
                echo json_encode([
                    'success'=>0,
                    'message'=>'Data inserted successfully..!'
            ]);
             
        }
        else{
                echo json_encode([
                       'success'=>0,
                       'message'=>'Data not inserted..!'
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