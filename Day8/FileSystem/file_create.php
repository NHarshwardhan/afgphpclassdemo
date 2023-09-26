<?php

    //   $numbers = [1,2,3,4,5];

    //   $filename = 'numbers.txt';

    //   $f = fopen($filename,'w');

    //   if(!$f){
    //       die('Error creating the file '. $filename);
    //   }

    //   foreach($numbers as $num){
    //         fputs($f,$num);
    //   }

    //   fclose($f);


    #------file_put_contents()-------------
    $url = 'https://www.php.net';
    $html = file_get_contents($url);
    file_put_contents('home.html',$html);


?>