<?php

     # Open the file  using fopen()
     # Read the contents using fread()
     # close the file using fclose()

        //  $filename = './input.txt';

        //  $f = fopen($filename,'r');

        //  if($f){
            
        //     //  $contents = fread($f,filesize($filename));
        //     $contents = fread($f,100);

        //      fclose($f);

        //      echo nl2br($contents);

        //  }


     #----------Read a file line by line-----------

        // $filename = './input.txt';
        // $lines = [];

        // $f = fopen($filename, 'r');

        // if(!$f){
        //      return;
        // }
        // else{
        //       while(!feof($f)){
        //           $lines[] = fgets($f);
        //       }
        // }
        // echo '<pre>';
        // print_r($lines);

        // fclose($f);


    #--------Read entire file into string------------

    // $html = file_get_contents('https://www.php.net');
    // echo $html;

    // $filename = './input.txt';

    // if(!is_readable($filename)){
    //       die('File does not exist or is not readable');
    // }

    // echo file_get_contents($filename);


    #-----------Read a part of a file into a string----------------

        $filename = './input.txt';
        if(!is_readable($filename)){
                  die('File does not exist or is not readable');
        }
        
        echo file_get_contents($filename,null,null,5,20);



?>