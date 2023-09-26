<?php
  
    // $f = tmpfile();

    // if(false !== $f){
    //        fputs($f, 'The Current time is '. strftime('%c'));
    // }

    // echo 'The current time is '. strftime('%c');

    // exit(1);


    #----------tempnam()

    $name = tempnam('tmp','php');

    echo $name;

?>