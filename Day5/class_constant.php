<?php
     # a constant is defined per class, not per instance of the class.

        //  class Circle{

        //       const PI = M_PI;

        //       private $radius;

        //       public function __construct($radius){

        //             $this->radius = $radius;
        //       }

        //       public function area(){
        //           return self::PI * $this->radius ** 2;
        //       }
        //  }

        //  echo Circle::PI;



        #----class constant and Inheritance-----------

        class Model{
               protected const TABLE_NAME = '';

               public static function all(){

                   return 'SELECT * FROM '. static::TABLE_NAME;
               }
        }

        class User extends Model{

               protected const TABLE_NAME = 'users';
        }
        class Role extends Model{

            protected const TABLE_NAME = 'roles';
       }
    
       echo User::all();
       echo '<br>';
       echo Role::all();


?>