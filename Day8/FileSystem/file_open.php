<?php

   $filename = 'input.txt';

   if(!file_exists($filename)){

      die("The file $filename does not exist");
   }

   $f = fopen($filename,'r');

   if($f){
        # proces the file

        echo ' The File '. $filename. ' is open';
        fclose($f);
   }
?>