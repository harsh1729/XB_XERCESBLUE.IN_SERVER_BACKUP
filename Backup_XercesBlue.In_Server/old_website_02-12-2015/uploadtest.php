<?php

$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$uid = ($_POST['uid']);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  	$uid = ($_POST['uid']); 
  }
  else if ($_SERVER['REQUEST_METHOD'] == 'GET'){
	$uid = ($_GET['uid']);
  }
  
$dir = getcwd() . "/MusicFiles/" . $uid ;

echo "dire -- >". $dir ."\n";
if (!file_exists($dir)) {
    mkdir($dir, 0777, true);
    echo "Directory Created\n" ;
}

if ($_FILES["file"]["size"] > 0)
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "\n";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "\n";
    echo "Type: " . $_FILES["file"]["type"] . "\n";
    echo "Size: " . ($_FILES["file"]["size"]) . " bytes\n";
    echo "Stored in: " . $_FILES["file"]["tmp_name"] . "\n";
    echo "Current Directory :". getcwd() . "\n\n";
    if (file_exists($dir . "/" . $_FILES["file"]["name"] ))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],$dir . "/" . $_FILES["file"]["name"]);
      echo "Stored in: " . $dir . "/" . $_FILES["file"]["name"];
      }
      
    }
  }
else
  {
  echo "Invalid file";
  }
?>