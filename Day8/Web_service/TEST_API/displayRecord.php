<?php
   
   $api = 'http://localhost:8300/SeptPHP23/Day8/Web_service/RESTFUL_API/restful_get_api.php';

   $client = curl_init($api);
 
   curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
 
   $response = curl_exec($client);
 
   $jsonData = json_decode($response,true);

   $users = $jsonData['results'];

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
                    <h3>CONSUME RESFUL API : GET METHOD</h3>
             </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                    <a href="addForm.html" class="btn btn-primary">Add Record</a>   
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
            <table class="table table-bordered mt-5">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Email</th>                            
                            <th colspan="2">Action</th>                          
                        </tr>
                    </thead>
                     <tbody>
                        <?php foreach($users as $key => $value):?>
                            <tr>
                                <td><a href="displayUserDetails.php?id=<?php echo $value['id'];?>"><?php echo $value['id'];?></a></td>
                                <td><?php echo $value['FullName'];?></td>
                                <td><?php echo $value['Email'];?></td>
                                <td>
                                    <a class='btn btn-warning' href="editRecord.php?id=<?php echo $value['id'];?>">Edit</a>
                                    &nbsp;&nbsp;
                                    <a class='btn btn-danger' href="deleteRecord.php?id=<?php echo $value['id'];?>">Delete</a>
                                </td>
                               
                            </tr>

                        <?php endforeach;?>
                     </tbody>
               </table>
            </div>
        </div>
    </div>
    
</body>
</html>