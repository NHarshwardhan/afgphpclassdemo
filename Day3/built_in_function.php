<?php
   
   # built-in function =  array_sum(), array_product()
     $result = (mt_rand(0,1)==1)? 'array_sum':'array_product';

     $values = array(4,9,16);

    //  echo '<br>'.$result;

    //  echo " $result = ".$result($values);


     #callback :  a function that is passed as a parameter to another function

     function is_at_least_18($number){
         return $number >=18;
     }

     function is_less_then_62($number){
         return $number <=62;
     }

     function validate($data,$callbackArray){
           foreach($callbackArray as $c){
              $valid = $c($data);
           }

           echo $valid ? 'True': 'False';
     }

     $age = 25;
     $callback = array('is_numeric','is_at_least_18','is_less_then_62');
     
    //  validate($age,$callback);



    #Anonymous function or function expression: A function without name

     # store function in variable
        $mutliply =  function($x,$y){
                return $x* $y;
        };

        // echo $mutliply(10,20);

     # Pass it to a function

        // function double_it($element){
        //         return $element * 2;
        // }

        $list = array(10,20,30);
        // $double_list = array_map('double_it',$list);
        $double_list = array_map(function($element){
            return $element * 2;
        },$list);

        echo '<pre>';
        // print_r($double_list);


    # return anonoymous function from another function
        
       function multiplier2(){
           return function(){
                echo 'inner function printed';
           };
       }

       #$double = multiplier2();
       #echo $double();


    # closure
      function multiplier3($x){ //outer function
             
        return function() use($x){ //inner function
            echo 'inner function <br>';
            echo 'value of $x ='.$x;

        };
      } 

      $res = multiplier3(10);
      echo $res();




   





?>