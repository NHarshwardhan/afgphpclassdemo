<?php
   
  require  '../MVC_CRUD/model/model.php';
 class Controller{
            private $model;

            public function __construct(){
                  $this->model = new Model();
            }

            public function invoke(){
                $users = $this->model->getAllUsers();
                include '../MVC_CRUD/view/AllUsers.php';

            }

            public function register($fullname,$email,$gender,$qualification){

                   $this->model->insertRecord($fullname,$email,$gender,$qualification);
            }

            public function editRecord($recordId){
                  $user = $this->model->edit($recordId);    
                  include '../MVC_CRUD/view/EditUser.php';   
            }

            public function updateRecord($id,$fullname,$email,$gender,$qualification){
                    $this->model->update($id,$fullname,$email,$gender,$qualification);
            }   

            public function deleteRecord($recordId){
                      $this->model->delete($recordId);   
            }
    }


?>