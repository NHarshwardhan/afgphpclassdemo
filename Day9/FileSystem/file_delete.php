<?php

   $filename = 'output.txt';

   if(unlink($filename)){
       echo 'The file '. $filename. 'was deleted successfully';
   }
   else{
      echo 'There was a error deleting the file '.$filename;
   }


?>