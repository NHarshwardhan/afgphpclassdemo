<?php

 $to_email = 'gtrainerforttt@gmail.com';
 $subject = "PHP Developer Training Program";
 $body = 'Hi Everyone, The is schedule of PHP Training';
 $headers = "From: Ansh Thakral";


 if(mail($to_email,$subject,$body,$headers)){

       echo 'Email successfully send to '.$to_email;
 }
 else{
       echo 'Email sending Faild....!';
 }


?>