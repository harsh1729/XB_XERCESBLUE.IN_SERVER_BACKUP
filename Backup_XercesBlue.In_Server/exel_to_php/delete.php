<?php

$ds          = DIRECTORY_SEPARATOR;  //1
 
$storeFolder = 'uploads';   //2
 

  $file_name= $_REQUEST['file_name'];
 echo  unlink($storeFolder."/".$file_name);
  
?>