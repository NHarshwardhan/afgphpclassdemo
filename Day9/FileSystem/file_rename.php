<?php

    //   $oldname = 'input.txt';
    //   $newname = 'input_v2.txt';

    //   if(rename($oldname,$newname)){
        
    //         $message = sprintf(
    //               'The file %s was renamed to %s successfully',
    //               $oldname,
    //               $newname
    //         );
    //   }
    //   else{
    //        $message = sprintf(
    //            'There was an error renaming file %s'
    //        );
    //   }

    //   echo $message;


    # ------Rename and move the file------------------
      $oldname = 'input_v2.txt';
      $newname = 'public/input_v3.txt';

      if(rename($oldname,$newname)){
        
            $message = sprintf(
                  'The file %s was renamed to %s successfully',
                  $oldname,
                  $newname
            );
      }
      else{
           $message = sprintf(
               'There was an error renaming file %s'
           );
      }

?>