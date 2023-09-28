<?php
    
         
     if(isset($_POST['action'])){
        
      
        if(isset($_SESSION['isLoggedIn'])){
            $action = $_POST['action'];
            $qty = $_POST['qty'];
            $mobileInfo2 = unserialize(urldecode($_POST['data']));  
         
            $price =$mobileInfo2['price'] * $qty;
            switch($action){
    
                    case 'Add to Cart':
                        require 'cart.php';
                        break;
    
                    case 'Buy Now':
                        break;
    
            }
        }
        else{
            echo " <script>
                alert('Please Login');
                window.location.href='http://localhost:8300/SeptPHP23/Day10/Project/Pages/mobile_pages/Form_based.php?url=$url';

                 </script>";
            }
        
    }
    else if(isset($_GET['showDetails'])){
          $mobileInfo = unserialize(urldecode($_GET['showDetails']));  
          $url = $_SERVER['REQUEST_URI'];    

    }
    else{
        require 'connect.php';
        $brand = $_GET['catg'];// echo $_GET['catg'];
        $sql = "SELECT * FROM mobiles WHERE Brand='$brand'";
        $result = $conn->query($sql);
        $allMobile = $result->fetchAll();
    }
  
?>

 <?php if (isset($allMobile)):?>
      <div class="row">

           <?php foreach($allMobile as $mobile):?>

                  <div class="col-md-4">

                  <a href="index.php?query=mobile&catg=<?php echo $brand;?>&showDetails=<?php echo urlencode(serialize($mobile));?>">
                         <img class="img-fluid" src="<?php echo $mobile['image'];?>"/>
                      </a>
                      <br/><br/>
                        <h6 class="text-center text-success"><?php echo $mobile['name'];?></h6>
                        <h4 class="text-center text-danger"><?php echo number_format($mobile['price']);?></h4>
                  </div>

            <?php endforeach ;?>
          
      </div>
      

 <?php endif;?>  
 
<?php if(isset($_GET['showDetails']) && isset($mobileInfo)):?>

     <div class="row">
         <div class="offset-md-1 col-md-2  ">
                  <img  src="<?php echo $mobileInfo['image'];?>" width="300px" height="300px" />
         </div>
         <div class="offset-md-2 col-md-7 ">
                       <h2 class=" text-success"><?php echo $mobileInfo['name'];?></h6>
                       <br/>
                       <h4 class=" text-danger mb-3"><?php echo number_format($mobileInfo['price']);?></h4>
                       <small>In Stock</small>
                       </br>
                       <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post" >
                            <input class="form-control mt-5 mb-4" name="qty" type="number" placeholder="Enter quantity"/>
                            <input class="btn btn-warning mt-4" type="submit" value="Add to Cart" name="action"/>
                            &nbsp;&nbsp;
                             <input type="hidden" name="data" value="<?php echo urlencode(serialize($mobileInfo));?>"/>
                            <input class="btn btn-primary mt-4" type="submit" value="Buy Now" name="action"/>

                       </form>

         </div>
      
     </div>

<?php endif;?>




