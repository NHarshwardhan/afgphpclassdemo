<?php 

    #use English langugae to generate timestamp
     $new = strtotime('Mar 10');
     echo '<br> March 10 = '.$new;

     $new = strtotime('31-dec-2023 8:45am');
     echo '<br>31-dec-2023 8:45am = '.$new;

     $new = strtotime('+1 hour');
     echo '<br>+1 hour = '.$new;

     $new = strtotime('tomorrow');
     echo '<br>tomorrow = '.$new;

     #Represent the date and time in readable format
     echo '<br> timestamp of 1695074400 = '. date('n/j/y',$new);
    
     $expire = mktime(12,30,0,3,15,2012);
     echo '<br> timestamp of mktime(12,30,0,3,15,2012) = '. date('n/j/y H:i:s',$expire);



    //  REAL USE

    $today = time();
    $exp = strtotime('+1 hour');

    echo '<br><br>Date = '.date('n/j/y',$today).' '.date('n/j/y',$exp);
    if($exp < $today){
          echo '<br>You card has expired.';
    }
    else{
         echo '<br>Your card has not expired';
    }


    #Object oriented way to handle date & time
     $now2 = new DateTime();
     echo '<br>';
     echo '<pre>';
     print_r($now2);

     $now2->setTime(22,30,0);
     $now2->setDate(2024,3,15);
     echo '<br> Payment Due : '. $now2->format('M. j,y h:i:s');

     $exp2 = new DateTime('+1 hour');
     if($exp2 < $now2){
          echo '<br>Your card has expired';
     } 
     else{
          echo '<br>Your card has not expired';
     }



?>