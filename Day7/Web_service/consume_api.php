<?php

  $api = 'https://jsonplaceholder.typicode.com/users';

  $client = curl_init($api);

  curl_setopt($client,CURLOPT_RETURNTRANSFER,true);

  $response = curl_exec($client);

  $result = json_decode($response,true);

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
       <table class="container mt-5 table table-bordered">
            <thead>
                 <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Address</th>
                 </tr>
            </thead>
             <tbody>
                  <?php foreach ($result as $row):?>
                      <tr>
                         <td><?php echo $row['id'];?></td>
                         <td><?php echo $row['name'];?></td>
                         <td><?php echo $row['email'];?></td>
                         <td><?php echo $row['address']['city'];?></td>
                      </tr>
                      
                  <?php endforeach ;?>  
             </tbody>
       </table>
</body>
</html>