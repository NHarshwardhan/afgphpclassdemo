<?php

        //   class User{

        //        public readonly string $username;

        //        public function setUsername(string $username){
        //            $this->username = $username;
        //        }

        //   }

        // //   $user = new User();

        // // //   $user->username = 'Mike'; Error
        // //   $user->setUsername('Jack');
        // //   $user->setUsername('Mike'); //Error


    #------------------Mutability---------------------------
    
    # A readonly properties does not ensure the immutability of objects.

    class UserProfile{
           public function __construct(private string $name, private string $phone){}

           public function changePhone(string $phone){
                $this->phone = $phone;
           }
    }

    class User{
           private readonly string $username;
           private readonly UserProfile $profile;

           public function __construct(string $username){
               $this->username = $username;
           }

           public function setProfile(UserProfile $profile){
              $this->profile = $profile;
           }

           public function profile():UserProfile{
             return $this->profile;
           }
          
    }

    $user = new User('Jack');
    $user->setProfile(new UserProfile('Rose Dawson','9083-93839-9393'));

    $user->profile()->changePhone('1232-44-22-44');
    echo '<pre>';
    var_dump($user->profile())



?>