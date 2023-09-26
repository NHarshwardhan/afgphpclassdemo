<?php
  
    //   $filename = 'php-developer.pdf';

    //   if(file_exists($filename)){

    //          header('Content-Description: File Transfer');
    //          header('Content-Type: application/octet-stream');
    //          header('Content-Disposition: attachment; filename="'.basename($filename).'"');
    //          header('Expires: 0');
    //          header('Content-length: '. filesize($filename));
    //          readfile($filename);
    //          exit;

    //   }


    #----------Download file with a download rate limit---------------

     $filename = 'php-developer.pdf';
     $client_file = 'php_toc.pdf';
     $download_rate = 200;  # 200 kb/s

     if(file_exists($filename)){
          header('Content-Type: application/octet-stream');
          header('Content-length: '. filesize($filename));
          header('Content-Disposition: filename='.$client_file);

          flush();

          $f = fopen($filename, 'r');

          while(!feof($f)){
              # send the file part to the web browser
              print fread($f, round($download_rate * 1024));

              # flush the content to th wweb brower
              flush();

              # sleep one second
              sleep(1);
          }
     }




?>