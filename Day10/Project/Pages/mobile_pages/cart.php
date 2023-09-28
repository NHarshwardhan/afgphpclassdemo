<?php if($_POST['action']==='Add to Cart'):?>

    <div class="row">
         <div class="offset-md-1 col-md-2  ">
                  
                 <div class="row mb-3">
                       <div class="col-md-12">
                            <img  src="<?php echo $mobileInfo2['image'];?>" width="300px" height="300px" />
                       </div>
                 </div>
                 <div class="row">
                       <div class="col-md-12 text-end">
                       </div>
                 </div>
         </div>
         <div class="offset-md-2 col-md-7 ">
                       <h2 class=" text-success"><?php echo $mobileInfo2['name'];?></h6>
                       <br/>
                       <h4 class=" text-danger  "><?php echo number_format($mobileInfo2['price']);?></h4>
                       <strong >Qty : <small><?php echo $qty;?></small></strong>

                       </br>
                       <form action="purchaseProcess.php" method="post" >                            
                             <h3 class="mt-5">Payable Amount : <span ><?php echo $price;?></span></h3>
                            <input class="btn btn-primary mt-4" type="submit" value="Place Order" name="action"/>

                       </form>

         </div>
      
     </div>
<?php endif ;?>