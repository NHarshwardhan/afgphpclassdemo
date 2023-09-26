<?php

    $token = filter_input(INPUT_POST,'token',FILTER_SANITIZE_STRING);

    if(!$token || $token !== $_SESSION['token']){
         
        # show Error Message
          echo '<p> Invalid For Submission</p>';

        # return 405 http status code
        header($_SERVER['SERVER_PROTOCOL'].' 405 Method not Allowed');
        exit;
    }

    # Validate Amount

    $amount = filter_input(INPUT_POST,'amount',FILTER_SANITIZE_NUMBER_INT);
    $inputs['amount'] = $amount;


    #validate account
    $recipient_account = filter_input(INPUT_POST,'recipient_account',FILTER_SANITIZE_NUMBER_INT);
    $inputs['recipient_account'] = $recipient_account;
    

?>
  
<?php  if(!$errors):?>
      
       <h1>You have transfered</h1>
       <h2><?php echo $amount;?></h2>

       <a href="<?php echo $_SERVER['PHP_SELF'];?>">Done</a>
    
 <?php endif ;?>   