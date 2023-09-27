<?php

    require 'connect.php';

    $sql  = "SELECT * FROM users";

    $result = $conn->query($sql);

    $items = array();

    # Store table records into an array

    while($row = $result->fetch_assoc()){
           $items[] = $row;
    }

    $filename = 'itemdata-'.date('d-m-Y').'.xls';

    # set header information to export data in excel format

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename='.$filename);

    # set variable to false for heading
    $heading = false;

    # Add the MySql table data to excel file
    if(!empty($items)){
          foreach($items as $item){
             if(!$heading){
                  echo implode("\t", array_keys($item))."\n";
                  $heading = true;
             }
             echo implode("\t", array_values($item))."\n";
          }
    }
    exit();



?>