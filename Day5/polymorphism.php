<?php

   # polymorphism => poly(many) + morphism(forms)

   # allows objects of different class to responsd differently based on the message

   # To implement polymorphism in PHP, use either abstract class or interfaces

   #Polymorphism helps us to create a generic framework that takes the different object types that hare 
      //the same interface


   #using abstract class
       #$p = new Person();#Cannot instantiate abstract class 'Person'
       
       //    abstract class Person{
                
        //                abstract public function greet();
            
        //    }

        //    class English extends Person{
            
        //         public function greet(){
        //                return 'Hello!';
        //         }
        //    }

        //    class German extends Person{
        //         public function greet(){
        //               return 'Hallo!';
        //         }
        //    }

        //    class French extends Person{
        //          public function greet(){
        //               return 'Bonjour!';
        //          }
        //    }

        //    class American extends Person{
        //           public function greet(){

        //             return  'Hi';
        //           }
        //    }

        //    function greeting($people){
        //            foreach($people as $person){
        //                echo $person->greet().'<br>';
        //            }
        //    }

        //    $people = [ new English(), new German(), new French(), new American()];

        //    greeting($people)


     
        # Using Interface

        interface Greeting{
               public function greet();
        }
        class English implements Greeting{
        
                public function greet(){
                        return 'Hello!';
                }
            }

        class German implements Greeting{
            public function greet(){
                    return 'Hallo!';
            }
        }

        class French implements Greeting{
                public function greet(){
                    return 'Bonjour!';
                }
        }

        function greeting($people){
                   foreach($people as $person){
                       echo $person->greet().'<br>';
                   }
           }

        $people = [ new English(), new German(), new French()];

        greeting($people)


         



  



  




?>