<?php
   # php date are going to store in timestamp (number of seconds)

   #current date & time 
    $now = time();
    echo 'Timestamp of current date & time = '.$now;
    
   #generate timestamp of given data & time
    $expire1 =  mktime(13,30,0,3,15,2012);
    echo '<br><br>Timestamp of [13,30,0,3,15,2012] = '.$expire1;

    $expire1 =  mktime(13,30,0,3,15);#current year
    echo '<br><br>Timestamp of [13,30,0,3,15] = '.$expire1;

   #extract individual information from timestamp
    $parts = getDate($expire1);
    echo '<br>';
    echo '<pre>';
    print_r($parts);
    echo 'year = '.$parts['year'];



?>