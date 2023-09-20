<?php

  #----------------------
  function coin_toss(){
        $coin = (mt_rand(0,1)==0)?'heads':'tails';
        echo $coin;
  }

  #calling the function
  coin_toss(); 

  #----Function with Parameter

  function display_error($error){
      echo '<p>'.$error.'</p>';
  }
  echo '<br><br>';
  display_error('Value out of range');
  display_error('username is required');

  #----Function with 3 parameter

        //   function avg_of_3($x,$y,$z){
        //        $avg = ($x+$y+$z)/3;
        //        echo '<br> Average of 5,2,8 = '.$avg; 
        //   }

        //   avg_of_3(5,2,8);

 #----Function with return keyword
  
 function avg_of_3($x,$y,$z){
    $avg = ($x+$y+$z)/3;
    return $avg;
   
}

$result = avg_of_3(5,2,8);
echo '<br> Average of 5,2,8 = '.$result; 

#----Pass argument by value: copy of value
    // function add_3_by_val($value){
    //      $value+=3;
    //      echo '<br><p>Inside function Number ='. $value.'</p>';

    // }
    // $number = 5;
    // echo '<p>Before Original Value number ='. $number;
    // add_3_by_val($number);
    // echo '<p>After Original Value number ='. $number;

#------pass argument by reference----------
    // function add_3_by_val(& $value){
    //     $value+=3;
    //     echo '<br><p>Inside function Number ='. $value.'</p>';

    // }
    // $number = 5;
    // echo '<p>Before Original Value number ='. $number;
    // add_3_by_val($number);
    // echo '<p>After Original Value number ='. $number;


#-------scope of variable----------------
        $a = 20; #global scope

            // function showInfo(){
            //     //  echo 'value of a = '.$a; #error

            //     # access global variable inside function
            //     global $a;
            //     echo '<br><br>value of a = '.$a;

            // }

            // showInfo();

        #another way to access global variable

        function showInfo(){
            //  echo 'value of a = '.$a; #error

            # access global variable inside function
            $a = $GLOBALS['a'];
            echo '<br><br>value of a = '.$a;

        }

        showInfo();

#----------Local scope-------------
        function displayInfo(){
             $b = 20;
             echo $b;
        }
        displayInfo();
        // echo $b; #Error



#---------Function with Default value--------------
        
        function printName($name = 'Rose'){
              echo '<br><br>My Name is  = '.$name;
        }

        printName('Peter Parker');
        printName();


#------variable length parameter list
 # func_get_args(): return an array that contain the arguments passed to function.
 # func_num_args(): return the number of arguments
 # func_get_arg($i): return the argument at the specified index

        function findTotal(){
                # func_get_args()
                    // $numbers =  func_get_args();
                    // $total = 0;
                    // foreach($numbers as $num){
                    //      $total+=$num;
                    // }
                    // echo '<br>Total Sum(10,20,30,40) = '.$total;

                #func_num_args(),func_get_arg()
                    $count = func_num_args();
                    $total = 0;
                    for($i=0;$i<$count;$i++){
                        $total+=func_get_arg($i);
                    }
                    echo '<br>Total Sum(10,20,30,40) = '.$total;
        }

        findTotal(10,20,30,40)





?>