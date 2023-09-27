<?php
   
    $source = 'input.txt';
    $dest = 'output.txt';

    # echo copy($source,$dest)? "The file $source was copied to $dest successfully":'Error';


    # Check if the destination file exists before copying

        // !file_exists($source) && die(" The file $source does not exists");

        // file_exists($dest) && die(" The file $dest already exists");

        // echo copy($source,$dest)? "The file $source was copied to $dest successfully":'Error';


    # PHP copy file helper function

        function copy_file($source, $dest){
              
              if(!file_exists($source)){
                  return false;
              }
              if(file_exists($dest)){
                  return false;
              }

              return copy($source,$dest);
        }

        echo copy_file($source,$dest)? "The file $source was copied to $dest successfully":"Either $dest file exists or $source does not exists";
        



?>