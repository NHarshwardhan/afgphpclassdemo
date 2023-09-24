<?php

  class Model{
        public $servername = 'localhost';
        public $username = 'root';
        public $password = '';
        public $dbname = 'afgphp';
        public $conn;

        public function __construct(){

                $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
                
        }

        public function getUserList(){
               $sql = "SELECT * FROM users";
               $result = mysqli_query($this->conn, $sql);
               $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
               return $row;
        }

        public function getUserDetails($recordId){
                
               $sql = "SELECT * FROM users WHERE id = $recordId";
               $result = mysqli_query($this->conn,$sql);
               $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
               return $row;
        }


  }


?>