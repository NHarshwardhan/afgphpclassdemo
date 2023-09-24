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
                    <h3>MVC CRUD EXAMPLE</h3>
             </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                    <a href="index.php" class="btn btn-primary">Add Record</a>   
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
                            <th>Gender</th>
                            <th>Qualification</th>   
                            <th colspan="2">Action</th>                          
                        </tr>
                    </thead>
                     <tbody>
                        <?php foreach($users as $key => $value):?>
                            <tr>
                                <td><?php echo $value['id'];?></a></td>
                                <td><?php echo $value['FullName'];?></td>
                                <td><?php echo $value['Email'];?></td>
                                <td><?php echo $value['Gender'];?></td>
                                <td><?php echo $value['Qualification'];?></td>
                                <td><a class='btn btn-warning' href="index.php?eid=<?php echo $value['id'];?>">Edit</a></td>
                                <td><a class='btn btn-danger' href="index.php?did=<?php echo $value['id'];?>">Delete</a></td>
                            </tr>

                        <?php endforeach;?>
                     </tbody>
               </table>
            </div>
        </div>
    </div>
    
</body>
</html>