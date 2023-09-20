<?php
    # ^ - at the begining , $ - at the end
    
    // $pattern = "/^abc$/";
    // $input = 'ab';

    #character class
        # [a-z] :  only match single  lowercase a to z  character
        # [A-Z] :  only match single  match uppercase A to Z character
        # [0-9] :  match only single digit 

        // $pattern = "/^[a-z]$/";
        // $pattern = "/^[a-zA-Z]$/";
        // $pattern = "/^[a-zA-Z0-9]$/";
        // $pattern = "/^[a-zA-Z0-9]+$/";
        // $input = 'John123';

    #pre-define character class
         # \d : [0-9]
         # \w : [a-zA-Z0-9_]
        
        // $pattern = "/^\d+$/";
        // $pattern = "/^\w+$/";
        // $input = 'avWer2323_';

    #Repetition Qunatifiers
        # p+ : one or more occurances of letter p
        # p* : zero or more ouccurances of letter p
        # p? : zero or one occurnances of letter p
        # p{2}: exactly two occurance of letter p

        // $pattern = "/^[a-zA-Z]{3}$/";
        // $pattern = "/^[0-9]{6}$/";
        // $input = '1234567';

        // if(preg_match($pattern,$input)){
        //     echo 'Matched';
        // }
        // else{
        //     echo 'Not Matched';
        // }

    # Create a pattern for below email id
        # john@gmail.com
        # john_cena@gmail.com
        # john7766_cena878@gmail.com
        # john.cena@gmail.com

        $pattern = "/^[a-zA-Z0-9]+(_|\.)?[a-zA-Z0-9]+@(gmail|outlook|yahoo)\.(com|in|org)$/";
        $input = 'john.....cena@gmail.com';
        if(preg_match($pattern,$input)){
            echo 'Matched';
        }
        else{
            echo 'Not Matched';
        }
    

     



?>