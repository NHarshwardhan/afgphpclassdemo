<?php
  # Enum is new data type that was introduced in 8.1
  # An Enum , short for "enumeration"
  # It is a set of named constants that represent distinct values that a variable of the enum type can take.

  #Enum is useful when you have a set of values that are related and need to be group together under a single type
  
//   enum CoffeeSize {
//        SMALL,
//        MEDIUM,
//        LARGE
//   };
  

# Enum
    //    enum Status{
    //        case DRAFT;
    //        case PUBLISHED;
    //        case ARCHIVED;
    //    };

    //    class BlogPost{
    //         public function __construct(public Status $status){}
        
    //    }

    //    $post  = new BlogPost(Status::ARCHIVED);
    //    echo '<pre>';
    //    print_r($post);


# Enum methods

        // enum Status{
        //        case DRAFT;
        //        case PUBLISHED;
        //        case ARCHIVED;

        //        public function color(){
        //              return match($this){
        //                    Status::DRAFT => 'grey',
        //                    Status::PUBLISHED => 'green',
        //                    Status::ARCHIVED => 'red',

        //              };
        //        }
        // };

        // $status = Status::DRAFT;
        // echo  $status->color();


# Enum Interface

   interface HasColor{
      public function color();
   }

   enum Status implements HasColor{
            case DRAFT;
           case PUBLISHED;
           case ARCHIVED;
            public function color(){
                             return match($this){
                                   Status::DRAFT => 'grey',
                                   Status::PUBLISHED => 'green',
                                   Status::ARCHIVED => 'red',

                             };
                       }
   }

  
 $status = Status::PUBLISHED;
        echo  $status->color();


?>