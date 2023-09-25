<?php
   
    if(isset($_GET['id'])){

        $id = $_GET['id'];    

        $api = 'http://localhost:8300/SeptPHP23/Day7/Web_service/RESTFUL_API/restful_get_api.php?id='.$id;         
     
        $client = curl_init($api);
      
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
      
        $response = curl_exec($client);
      
        $jsonData = json_decode($response,true);

        $user = $jsonData['results'];

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
</head>
<body>
    <div class="container mt-5">
        <div class="row">
             <div class="col-md-12">
                    <h3>CONSUME RESFUL API : GET METHOD BY ID</h3>
             </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                    <a href="addForm.html" class="btn btn-primary">Add Record</a>   
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
            <table class="table table-bordered container mt-5" >
         <tbody>
               <tr>
                   <th>Id</th>
                   <td><?php echo $user['id'];?></td>
               </tr>
               <tr>
                   <th>Full Name</th>
                   <td><?php echo $user['FullName'];?></td>
               </tr>
               <tr>
                   <th>Gender</th>
                   <td><?php echo $user['Gender'];?></td>
               </tr>
               <tr>
                   <th>Qualification</th>
                   <td><?php echo $user['Qualification'];?></td>
               </tr>
         </tbody>
     </table>
            </div>
        </div>
    </div>
    
</body>
</html>
