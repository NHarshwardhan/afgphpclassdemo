<?php

   $filename = 'input.txt';

        //    if(file_exists($filename)){
        //        $message = " The file $filename exists";

        //    }
        //    else{
        //          $message = " The file $filename does not exists";
        //    }

        //    echo $message;



        #-----------------------
            // if(is_file($filename)){
            //     $message = " The file $filename exists";
        
            // }
            // else{
            //       $message = " The file $filename does not exists";
            // }
        
            // echo $message;



       #------Check File Exist and readable------------
       
            // if(is_readable($filename)){
            //     $message = " The file $filename exists and readable"; 
            // }
            // else{
            //     $message = " The file $filename does not exists";
            // }
        
            // echo $message;


    #------Check File Exist and writable------------
       
        if(is_writable($filename)){
             $message = " The file $filename exists and writable"; 
        }
        else{
            $message = " The file $filename does not exists";
        }
    
        echo $message;

?>