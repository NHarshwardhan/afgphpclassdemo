<?php 
   $name = 'Mike';
   $location = "UK";
   
   echo '<br> My Name is $name';
   echo "<br> My Name is $name"; //Interpolation


   #Escape sequence
     #C:\xampp\htdocs\php
        $dir = 'C:\\xampp\\htdocs\\php';
        echo "<br>$dir";
    
     #Mike's Music Store
         $shop = 'Mike\'s Music Store';   
         echo "<br>$shop";

     #He said, "It costs $12"
         $msg = "He said, \"It costs $12.\" ";
         echo "<br>$msg";

    #length of string
     echo '<br>length of JOHN DOE = '.strlen("JOHN DOE");

    #substring
       $full_name = "JOHN DOE";
       echo '<br> String = '.$full_name;
       echo '<br>substring = '.substr($full_name,0,4);

    #Substring example   
        $mobile_number = '5545556624'; # 554-555-6634 , (554)555-6624
        $part1 = substr($mobile_number,0,3);
        $part2 = substr($mobile_number,3,3);
        $part3 = substr($mobile_number,6);

        $format1 = "$part1-$part2-$part3";
        $format2 = "($part1)$part2-$part3";

        echo "<br><br>Mobile Number = $mobile_number";
        echo "<br>Format1 = $format1";
        echo "<br>Format2 = $format2";
   
    #search a string for spaces
       $lastname = "JOHN DOE MIKE";
       echo '<br><br>';
       echo 'Position1 for space = '.strpos($lastname, ' ');    
       echo '<br>';
       echo 'Position2 for space = '.strpos($lastname, ' ',5);    

    #replace
        $phone = '554.555.6624';
        echo '<br><br> Replace dot : 554.555.6624 = '.str_replace('.','-',$phone);
        echo '<br><br>';

        echo '<br>'.str_repeat('*',30);

    #Modify the string
      $firstname = '    JOHN DOE     ';
      echo '<br><br>Length before trim = '. strlen($firstname);
      $firstname = ltrim($firstname);
      echo '<br><br>Length after left trim = '. strlen($firstname);
      $firstname = rtrim($firstname);
      echo '<br><br>Length after right trim = '. strlen($firstname);
      $firstname = trim($firstname);
      echo '<br><br>Length after removing all space = '. strlen($firstname);

      echo '<br>'.str_repeat('*',30);
      $country = 'india';
      echo '<br><br>original value = '.$country;
      echo '<br>'.ucfirst($country);
      echo '<br>'.lcfirst($country);
      echo '<br>'.ucwords('tax rate');
      echo '<br>'.strtolower('TAXRATE');
      echo '<br>'.strtoupper('taxrate');
  
   
      echo '<br>'.str_repeat('*',30);
      echo '<br>'.strrev('taxrate');
      echo '<br>'.str_shuffle('taxrate');

    #string into Array
      echo '<br>'.str_repeat('*',30);
      $users = 'John|Mike|Karan|Rose';
      $users = explode('|',$users);
      echo '<pre>';
      print_r($users);

    #Array to string
      echo '<br>'.str_repeat('*',30);
      $users = implode('-',$users);
      echo '<br>'.$users;
   
    
?>