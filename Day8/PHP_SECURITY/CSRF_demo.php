<?php

 session_start();

 $_SESSION['token'] = md5(uniqid(mt_rand(),true));

 
?>

<form action="checkToken.php" method="post">
     <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?? '';?>"/>

      <input type="submit" value="send"/>
</form>



