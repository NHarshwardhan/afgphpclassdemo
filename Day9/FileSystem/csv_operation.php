<?php
   
    # Writing a line to CSV file
        // $data = [
        //       ['Symbol', 'Company', 'Price'],
        //       ['GOOG', 'Google Inc.', '800'],
        //       ['APPL', 'Apple Inc.', '500'],
        //       ['AMZN', 'Amzon.com Inc.', '250'],
        //       ['FB', 'Facebook Inc.', '30'],
        // ];

        // $filename = 'stock.csv';

        // # open csv file for writing
        // $f = fopen($filename, 'w');

        // if($f===false){
        //       die('Error opening the file '. $filename);
        // }

        // # write each row at a time to a file
        //  foreach($data as $row){
        //       fputcsv($f,$row);
        //  }

        //  fclose($f);



    # Reading from a csv file
      $filename = './stock.csv';
      $data = [];

      # Open a file
        $f = fopen($filename, 'r');

        if($f === false){
              die('can not open the file '. $filename);
        }

      # read each line in csv file at a time

      while(($row = fgetcsv($f)) !== false){

          $data[] = $row;
      }
     
      echo '<pre>';
      print_r($data);
      fclose($f);


?>