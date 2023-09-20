<!-- Example 1 -->
<?php
 
 echo 'Welcome To PHP World'
?>

<!-- How to embed Php in HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <h1>Please Find My Details Below</h1>
       <strong>
           First Name : <span> <?php echo "Mike"; ?> </span>
       </strong>
       <br>
       <strong>
           Last Name : <span> <?php echo "Tyson"; ?> </span>
       </strong>
</body>
</html>


<!-- How to embed HTML in PHP -->
<?php
   echo "<h1>This is the first day of PHP training</h1>"

?>

<!-- Comment -->
<?php
// , /*... */, #

# Code part coming soon...

?>

<!-- Datatype -->
<!-- 
    Integer
    double
    boolean
    string
    array
    object 
-->

<!-- Variable -->

<?php
  $count = 10;

 #check datatype
  var_dump($count);

  $first_name = "Rose";
  $admin = true;
  $tax_rate = 5.6;
?>

<!-- Constant -->
<?php
    define('SITE_URL',"http://www.example.com");
    echo '<br>';
    #use dot operator for concatenation
    echo 'Thank you for visiting -'. SITE_URL;
?>


<!-- Example 2 -->
<?php
  $name = "Rose Dawson";
  $age = 32;
  $salary = 23000;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <br/><br/><br/>
     <span> Name : <strong><?php echo $name;?></strong></span><br/>
     <span> Age : <strong><?php echo $age;?></strong></span><br/>
     <span> Salary : <strong><?php echo $salary;?></strong></span><br/>
</body>
</html>

