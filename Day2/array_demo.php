<?php

    #Array
        $names = array('Mike','John','Rose');
        echo '<pre>';
        print_r($names); 
    
    #Access array Element
        echo $names[0];
        echo '<br>';
        echo $names[1];
        echo '<br>'; 
        echo $names[2];
        echo '<br>';   
        
    # Add the element
       # add element at the end of an array
       $names[] = 'Peter';
       echo '<br>'; 
       print_r($names);

       #set the value at a specified index
       $names[0] = 'Rick';
       echo '<br>'; 
       print_r($names);

    #Delete the element
       #delete the value from an array
       unset($names[1]);
       print_r($names);

       #reindex the array
       $names = array_values($names);
       echo '<br>'; 
       print_r($names);

       #delete entire array
       unset($names);
       echo '<br>'; 
    //    print_r($names); //Error



   #Associative Array :  
      # index is string
      # key value pair

    $country = array('CN'=>'CANADA','IND'=>'INDIA','AFG'=>'AFGHANISTAN');
    echo '<pre>';
    print_r($country);

    #Access value
    echo $country['CN'];

    # Add an Element
    $country[] = 'Austria';
    echo '<br>';
    print_r($country);

    $country['UK'] = 'UK';
    echo '<br>';
    print_r($country);

    #delete the element
    unset($country['CN']);
    echo '<br>';
    print_r($country);


    #loop
    foreach ($country as $value) {
        # code...
        echo '<br>'.$value;
    }

    echo '<ul>';
    foreach ($country as $key => $value) {
        # code...
        echo '<li>'.$key.' =>'.$value.'</li>';
    }
    echo '</ul>';


    #Array function
        #range()
        $number = range(1,4);
        echo '<br>';
        print_r($number);

        #array_merge()
        $employees = array('Mike','Tyson');
        $new_hires = array('Rose','Dawson');

        $employees = array_merge($employees,$new_hires);
        print_r($employees);

        #implode()
        echo '<br>';
        echo implode('|', $employees);

        #adding the element to the end of array
        echo '<br>';
        array_push($employees,'Parker');
        print_r($employees);

        #adding the element to the begining
        array_unshift($employees,'Jasmine');
        print_r($employees);

        #remove last element in array
        array_pop($employees);
        print_r($employees);

         #remove first element in array
         array_shift($employees);
         print_r($employees);

         #in_array()
         $taxRates = array('NC'=>23.75,'CA'=>8.25,'NY'=>'8.875');
         echo '<br>';
         echo '7.75 exist in array  = ';
        //  var_dump(in_array(7.75,$taxRates));
         var_dump(in_array('7.75',$taxRates,true));  #check datatype also

         #array_key_exists()
         $key_exists = array_key_exists('CA',$taxRates);
         echo '<br>';
         echo 'CA key exist in array  = ';
         var_dump($key_exists);
         
         #array_count_values()
         $names = array('Mike','Rose','Mike','Ross','Peter','Ross');
         $occurance = array_count_values($names);
         echo '<pre>';
         print_r($occurance);

         #sort()
         $username = array('Mike','Peter','Rose','Amber');
         echo '<br>';
         echo '<pre>';
         echo str_repeat('*',30);
         print_r($username);
         sort($username);
         print_r($username);

         #rsort()
         echo '<br>';
         echo '<pre>';
         echo str_repeat('*',30);
         print_r($username);
         rsort($username);
         print_r($username);

         #asort(): asc and sort by value
         echo '<br>';
         echo '<pre>';
         echo str_repeat('*',30);
         print_r($taxRates);
         asort($taxRates);
         print_r($taxRates);

        #ksort(): asc and sort by key
        echo '<br>';
        echo '<pre>';
        echo str_repeat('*',30);
        print_r($taxRates);
        ksort($taxRates);
        print_r($taxRates);

        #arsort(): desc and sort by value
        echo '<br>';
        echo '<pre>';
        echo str_repeat('*',30);
        print_r($taxRates);
        arsort($taxRates);
        print_r($taxRates);

        #krsort(): desc and sort by key
        echo '<br>';
        echo '<pre>';
        echo str_repeat('*',30);
        print_r($taxRates);
        krsort($taxRates);
        print_r($taxRates);


    #Array of Arrays

     $time_table = array();

     # add 13 element to the array that contains empty array

     for($i = 0; $i<=12; $i++){
         $time_table[$i] = array();
     }

     # add values to array of arrays
     for($i = 0; $i<=12; $i++){
          for($j = 0; $j<=12; $j++){
              $time_table[$i][$j] = $i * $j;
          }
     }
     echo str_repeat('*',30);
     echo '<pre>';
     print_r($time_table);
     
     echo '<br>';
     echo $time_table[9][2];



    #array of associative array
    $cart = array();
        $item1 = array();
        $item1['itemCode'] = 123;
        $item1['itemName'] = 'PHP DEVELOPER';
        $item1['itemCost'] = 53.5;
    
    $cart[] = $item1;
        $item2 = array();
        $item2['itemCode'] = 456;
        $item2['itemName'] = 'LARAVEL DEVELOPER';
        $item2['itemCost'] = 55.5;

    $cart[] = $item2;
    echo str_repeat('*',30);
    echo '<pre>';
    print_r($cart)













?>