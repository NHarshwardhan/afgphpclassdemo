<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
       <h4>Fund Transfer</h4>
        <br/>
       <div class="mb-4">
           <label>Amount(between $1-$5000): </label>
           <input class="form-control" type="number" name="amount" value="" placeholder="Enter the transfered amount"/>
       </div>

       <div  class="mb-4">
           <label>Recipient Account: </label>
           <input class="form-control" type="number" name="recipient_account" value="" placeholder="Enter the recipient account"/>
       </div>

       <input type="hidden" name="token" value="<?php echo $_SESSION['token']?? '';?>"/>
       <input class="btn btn-primary" type="submit" value="Transfer Now"/>
</form>