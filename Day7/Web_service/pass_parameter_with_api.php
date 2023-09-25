<?php
     
     if(isset($_POST['button'])){
             
         $noOfRecords = $_POST['total_records'];

         $api = 'https://randomuser.me/api/?results='.$noOfRecords;

         $client = curl_init($api);
         curl_setopt($client,CURLOPT_RETURNTRANSFER,true); 
         $response = curl_exec($client);
         $jsonData = json_decode($response,true);
         $result = $jsonData['results'];

     }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <title>Document</title>
</head>
<body>
        <form class="container mt-4" action="pass_parameter_with_api.php" method="POST" >
             <div class="row">
                 <div class="col-md-12">
                    <div class=" mb-4">
                        <input class="form-control" type="number" placeholder="Enter number of records to fetch" name="total_records"  required/>
                        <br/>
                        <input class="btn btn-primary" type="submit" name="button" value="Fetch" />
                    </div>
                 </div>
             </div>
             
        </form>

         <?php if(isset($result) && count($result)>0):?>
            <table class="container mt-5 table table-bordered">
            <thead>
                 <tr>
                     <th>Picture</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Address</th>
                 </tr>
            </thead>
             <tbody>
                  <?php foreach ($result as $row):?>
                      <tr>
                         <td><img src="<?php echo $row['picture']['large'];?>"/></td>
                         <td><?php echo $row['name']['first'].' '.$row['name']['last'];?></td>
                         <td><?php echo $row['email'];?></td>
                         <td><?php echo $row['location']['country'];?></td>
                      </tr>
                      
                  <?php endforeach ;?>  
             </tbody>
       </table>

         <?php endif;?>
</body>
</html>