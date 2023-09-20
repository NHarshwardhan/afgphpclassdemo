<?php
 
   #do..while
   $count = 0;
   do{
    //    echo '<br>count = '. $count;
       $count++;
   }while($count<10); 

   #while
   echo '<hr>';
   $counter = 0;
   while($counter <10){
        // echo '<br>count = '. $counter;
        $counter++;
   }

   #for..loop
   echo '<hr>';
   for($i = 0 ;$i <10; $i++){
    // echo '<br>i = '. $i;

   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <p>
          <label for="">Interest Rate:</label>
          <select name="" id="">
                <?php for($v = 5; $v <=12; $v++) :?>
                       <option value="<?php echo $v;?>"><?php echo $v;?></option>
                <?php endfor;?>    

          </select>
       </p>
</body>
</html>

<!-- Break/Continue -->
<?php
     
     for($i = 0 ;$i <5; $i++){
          if($i==3){
              break; #Exit the loop
          }
          echo $i;
     }
     #output : 0,1,2
     echo '<br>';
     for($j=0; $j<5;$j++){
           if($j==3){
             continue;  #skip the current iteration
           }
           echo $j;
     }
     #output :  0,1,2,4,5





     
?>