<?php
require '../MVC/model/Model.php';

  class Controller{
        public $model;

        public function __construct(){
            $this->model = new Model();
        }

        public function invoke(){
            
             if(!isset($_GET['record'])){
                $users = $this->model->getUserList();
                include '../MVC/view/UserList.php';
             }
             else{
                     
                $user = $this->model->getUserDetails($_GET['record']);
                include '../MVC/view/UserDetails.php';
             }
        }
  }



?>