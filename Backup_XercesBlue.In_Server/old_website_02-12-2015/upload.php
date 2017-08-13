<?php

$uid = ($_POST["user_id"]);
echo "Eco is '$uid'" . $uid;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  	$uid = ($_POST["user_id"]); 
  	echo "Eco is '$uid'" . $_POST["user_id"];
  }
  else if ($_SERVER['REQUEST_METHOD'] == 'GET'){
	$uid = ($_GET["user_id"]);
	echo "Eco is '$uid'" .$_GET["user_id"];
  }
  
  
echo "Eco is '$uid'" . $uid;

if ($_FILES["file"]["size"] > 0)
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "\n";
    echo "Type: " . $_FILES["file"]["type"] . "\n";
    echo "Size: " . ($_FILES["file"]["size"]) . " bytes\n";
    echo "Stored in: " . $_FILES["file"]["tmp_name"] . "\n";
    echo "Current Directory :". getcwd() . "\n\n";
    if (file_exists(getcwd() . "/MusicFiles/".uid. $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],getcwd() .
      "/MusicFiles/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "../MusicFiles/" . $_FILES["file"]["name"];
      }
      
    }
  }
else
  {
  echo "Invalid file";
  }
?>