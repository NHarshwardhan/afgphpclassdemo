<?php

 define('ONE_WEEK',7 * 86400);

 $return_visitor = false;

 #superGlobal Array :  $_COOKIE

 if(!isset($_COOKIE['return'])){
     
       #create cookie
       setcookie('return','1',time()+ONE_WEEK,'','',true,true);
 }
 else{
        $return_visitor = true;
 }

  echo $return_visitor ? 'Welcome Back !' : ' Welcome to my website';

?>