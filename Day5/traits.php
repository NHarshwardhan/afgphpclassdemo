<?php
       
       # Trait :  Used to share functionality across independent classes.

       # A trait is similar to a class,but it is only for grouping methods in a fine-grained and consistent way.

       # PHP does not allow to create an instance of a Trait like an instance of a class.


    //    trait Logger{
    //          public function log($msg){
    //              echo '<pre>';
    //              echo date('Y-m-d h:i:s'). ':'.'('.__CLASS__.')'.$msg.'<br/>';
    //          }
    //    }

    //    class BankAccount{
    //           use Logger;

    //           private $accountNumber;

    //           public function __construct($accountNumber){
    //               $this->accountNumber = $accountNumber;
    //               $this->log("A new $accountNumber bank account created");
    //           }


    //    }

    //    $account1 = new BankAccount('1232883248980001');

    //    class User{

    //           use Logger;

    //           public function __construct(){
    //                $this->log(' A new User Created');
    //           }
    //    }

    //    $u = new User();


       #-------- Mutliple Trait------------------

    //    trait Preprocessor{
    //         public function preprocess(){
    //               echo 'Preprocess....done'.'<br>';

    //         }
    //    }

    //    trait Compiler{
    //          public function compile(){
    //                 echo 'Compile Code .... done'.'<br>';
    //          }
    //    }

    //    trait Assembler{
    //           public function createObjCode(){
    //               echo 'create the object code files...done.'.'<br>';
    //           }
    //    }

    //    trait Linker{

    //            public function createExec(){
    //                 echo 'Create the executable file....done'.'<br>';
    //            }
    //    }

    //    class IDE{
    //            use Preprocessor, Compiler, Assembler, Linker;

    //            public function run(){
    //                    $this->preprocess();
    //                    $this->compile();
    //                    $this->createObjCode();
    //                    $this->createExec();
    //                    echo 'Execute the file...done'.'<br>';
    //            }
    //    }

    //    $ide = new IDE();
    //    $ide->run();


    // ----------Composing multiple Traits--------------

        // trait Reader{
        //       public function read($source){
        //            echo 'Read from <br>'.$source;
        //       }
        // }

        // trait Writer{
        //        public function write($destination){
        //           echo 'Write to <br>'.$destination;
        //        }
        // }

        // trait Copier{

        //         use Reader, Writer;

        //         public function copy($source,$destination){
        //                $this->read($source);
        //                $this->write($destination);
        //         }

        // }

        // class FileUtil{
        //       use Copier;

        //       public function copyFile($source, $destination)
        //       {
        //         $this->copy($source,$destination);
        //       }
        // }



    #-------Override trait method------------------

    trait FileLogger{
          public function log($msg){
              echo 'File Logger ='. date('Y-m-d h:i:s'). ':'.$msg.'<br/>';
          }
    }

    trait DatabaseLogger{
           public function log($msg){
                echo 'Database Logger ='. date('Y-m-d h:i:s'). ':'.$msg.'<br/>';

           }
    }


    // class Logger{

    //          use FileLogger, DatabaseLogger{
    //                FileLogger::log insteadof DatabaseLogger;
    //          }

             
    // }

    // $logger = new Logger();
    // $logger->log('This is a test message #1');
    // $logger->log('This is a test message #2');


    #--------Access log method from Both trait ------------------
      # Aliasing trait method: as keyword

      class Logger{

        use FileLogger, DatabaseLogger{
              DatabaseLogger::log as logToDatabase;
              FileLogger::log insteadof DatabaseLogger;
        }

        
        }

        $logger = new Logger();
        $logger->log('This is a test message #1');
        $logger->logToDatabase('This is a test message #2');
?>