<?php
   
  
   if(isset($_GET['catg'])){
        session_start();
         $category = $_GET['catg'];
         $currentUrl =  explode('&',$_SERVER['REQUEST_URI']);
     
   }
   


?>
<div class="row container-fluid mt-5">
      <div class="col-md-12" >
            <div class="row">
            <div class="col-md-2 mt-2"  >
                <nav class="nav flex-column">
                            <a class="nav-link active" aria-current="page" href="index.php?query=mobile&catg=Samsung">Samsung</a>
                            <a class="nav-link" href="index.php?query=mobile&catg=Apple">Apple</a>
                            <a class="nav-link" href="index.php?query=mobile&catg=Redmi">Redmi</a>
                            
                    </nav>
                </div>
            <div class="col-md-8">
                 <?php
                     if(isset($category)){
                        switch($category){
                            case 'Samsung':                         
                                require 'mobile_pages/Samsung.php';                         
                                break;
            
                            case 'Apple':
                                require 'mobile_pages/Apple.php';
                                break;
            
                            case 'Redmi':
                                require 'mobile_pages/Redmi.php';
                                break;
                     }
                     }
                 ?>
            </div>

            </div>
      </div>
</div>
