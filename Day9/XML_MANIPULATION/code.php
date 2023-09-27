<?php
  
    //    #load XML file

    //    $xml = simplexml_load_file('hotel.xml') or die('Unable to load XML');

    //    # access xml element
    //      echo 'Hotel :'.$xml->hotel->name;


   # Access multiple elements

    //    $xml = simplexml_load_file('hotel.xml') or die('Unable to load XML');

    //    #access xml elements

    //    foreach($xml->hotel as $hotel){
    //        echo '<br> Hotel: '. $hotel->name;
    //    }

    //    #count elements
    //    echo '<br> Total :'.count($xml->hotel);

  # Access Attributes

    // $xml = simplexml_load_file('hotel.xml') or die('Unable to load XML');

    // #access xml elements

    // foreach($xml->hotel as $hotel){
    //     echo '<br> Hotel: '. $hotel->name.' is a <strong>'. $hotel['stars']. '</strong> star hotel';
    // }

 # Altering XML element and attribute values
    
    $xml = simplexml_load_file('hotel.xml') or die('Unable to load XML');

    #change element value
     $xml->hotel[2]->name = 'Crown Plaza';

    #change attribute value
     $xml->hotel[2]['stars'] = 6;

    #print new XML string
     header('Content-type: Text/html');
     echo $xml->asXML();



?>