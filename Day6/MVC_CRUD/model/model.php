<?php
    
     class Model{

            private $conn;

            public function __construct(){

                    try{
                           $this->conn = new PDO('mysql:host=localhost;dbname=afgphp','root','');
                    }
                    catch(PDOException $e){
                        echo 'Error: Could not connect '.$e->getMessage();
                    }
            }

            public function insertRecord($fullname,$email,$gender,$qualification){
                $sql = "INSERT INTO users(FullName,Email,Gender,Qualification)
                                     VALUES('$fullname','$email','$gender','$qualification')";

                $this->conn->exec($sql);
                echo ' <script>
                          alert("Record inserted successfully");
                         window.location.href="http://localhost:8300/SeptPHP23/Day6/MVC_CRUD/index.php";

                </script>';                     
            }

            public function getAllUsers(){
                   
                $sql = "SELECT * FROM users";
                $result = $this->conn->query($sql);
                $allUsers = $result->fetchAll();
                return $allUsers;
            }

            public function edit($id){
                $sql = "SELECT * FROM users WHERE id = $id";
                $result = $this->conn->query($sql);         
                $record = $result->fetch();
                return $record;
            }

            public function update($id,$fullname,$email,$gender,$qualification){
                $sql = "UPDATE users SET FullName=:fullname,Email=:email,Gender=:gender,Qualification=:qualification
    
                WHERE id =:id
               ";
               $stmt =  $this->conn->prepare($sql);

               #Bind Parameter to statement
               $stmt->bindParam(':fullname',$fullname);
               $stmt->bindParam(':email',$email);
               $stmt->bindParam(':gender',$gender);
               $stmt->bindParam(':qualification',$qualification);
               $stmt->bindParam(':id',$id);
         
         
              #Execute
              $stmt->execute();
              echo ' <script>
                         alert("Record updated successfully");
                         window.location.href="http://localhost:8300/SeptPHP23/Day6/MVC_CRUD/index.php?flag=1";
         
                     </script>';
            }

            public function delete($id){
                 
                $sql = "DELETE FROM users WHERE id = :id";
                $stmt = $this->conn->prepare($sql);        
                $stmt->bindParam(':id', $id);        
                $stmt->execute();               
                echo ' <script>
                            alert("Record deleted successfully");
                            window.location.href="http://localhost:8300/SeptPHP23/Day6/MVC_CRUD/index.php?flag=1";
        
                </script>';
            }
     }


?>