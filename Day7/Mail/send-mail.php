<?php
  
  if(isset($_POST['button']) && isset($_FILES['attachment'])){
        $from_email = 'a.thakral399@gmail.com';
        $recipient_email = 'gtrainerforttt@gmail.com';

        # Load Post Data from HTML Form
        $sender_name = $_POST['sender_name'];
        $reply_to_email = $_POST['sender_email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
          
        # Get uploaded file data using $_FILES Array
        $tmp_name = $_FILES['attachment']['tmp_name'];
        $name = $_FILES['attachment']['name'];
        $size = $_FILES['attachment']['size'];
        $type = $_FILES['attachment']['type'];
        $error = $_FILES['attachment']['error'];


        # validate form field for attaching file
        if($error > 0){ die('Upload Error or No Files Uploaded'); }

        #read from the uploaded file & base64_encode content

        $handle = fopen($tmp_name,"r");
        $content = fread($handle,$size);
        fclose($handle);

        $encoded_content = chunk_split(base64_encode($content));
        $boundary = md5('random');

        # header
        $header = "MIME_Version: 1.0 \r\n";
        $header.= "From:".$from_email."\r\n";
        $header.= "Reply-To:".$reply_to_email."\r\n";
        $header.= "Content-Type: multipart/mixed;";
        $header.= "boundary = $boundary\r\n";

        # plain text
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain: charset= ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= chunk_split(base64_encode($message));

        # attachment
        $body .= "--$boundary\r\n";
        $body .= "Content-Type: $type; name=".$name."\r\n";
        $body .= "Content-Disposition: attachment; filename=".$name."\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n";
        $body .= "X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
        $body .= $encoded_content;
        

        $sentMailResult = mail($recipient_email,$subject,$body,$header);

        if($sentMailResult){
              echo '<h3>File Sent Successfully with Email</h3>';
            //   unlink($name); # delete the file after attachment sent
        }
        else{
                die('Sorry but the email could not be sent, Pleae try again');
        } 



   }


?>