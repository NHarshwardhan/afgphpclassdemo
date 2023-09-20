<?php session_start(); ?>

<?php if( isset($_SESSION['user'])):?>
      <p> Welcome <?php echo $_SESSION['user'];?></p>
<?php endif;?>    

<?php if(isset($_SESSION['roles'])):?>
    <p>Current roles:</p>
    <ul>
          <?php foreach($_SESSION['roles'] as $role):?>
                 <li><?php echo $role; ?></li>
          <?php endforeach;?>
    </ul>

<?php endif;?>

<a href="logout.php" >Logout</a>
