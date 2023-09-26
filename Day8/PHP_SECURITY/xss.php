<?php
     
       # Insecure code
        //    $string = $_GET['string'];

        //    echo $string

      
       # Secure code  : Escape(Encoding) data before using it as output

            # Encoding :  Html Characters are converted into HTMl ENtities

            # htmlspecialchars() , htmlentities()

                $string = $_GET['string'];

                echo htmlspecialchars($string, ENT_QUOTES,'utf-8');   



?>