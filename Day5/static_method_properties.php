<?php
  
   # PHP allows us to access the method and properties in the context of a class rather than an object
   # such method and properties are class method and properties
   # class method and properties are called static method and properties


    //    class HttpRequest{

    //          public static $url = "http://www.example.com";

    //          public static function uri(){  
    //              return strtolower($_SERVER['REQUEST_URI']);
    //          }
    //    }


    //    echo HttpRequest::uri();
    //    echo '<br>';
    //    echo HttpRequest::$url;



    #---------Access static propeties inside method , use self keyword --------------------
    class App{
           private static $app = null;

           public function __construct(){}

           public static function get(){
                 
                 if(!self::$app){
                       self::$app = new App();
                 }

                 return self::$app;
           }
           public function bootstrap(){
               echo 'App is bootstrapping.....';
           }

    }

    $app = App::get();
    $app->bootstrap();








?>