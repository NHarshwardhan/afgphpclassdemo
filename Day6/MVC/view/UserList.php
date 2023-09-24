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
     <table class="table table-bordered container mt-5" >
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
            </tr>
        </thead>
        <tbody>
              <?php foreach($users as $key => $value):?>
                  <tr>
                     <td><a href="index.php?record=<?php echo $value['id'];?>"><?php echo $value['id'];?></a></td>
                     <td><?php echo $value['FullName'];?></td>
                  </tr>

              <?php endforeach;?>
        </tbody>
     </table>

    
</body>
</html>