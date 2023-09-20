<?php
 require_once './namespace_demo.php';


//  folder1\showInfo();

//  echo '<br>';

//  folder2\showInfo();

# create alias of namespace
  use folder1\subfolder1\subfolder2\subfolder3 as myNamespace;

  myNamespace\showInfo();





?>