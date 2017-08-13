<?php
define("APPID","xxxxxxxxxxxxxxx");
define("SECRET","xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");

require 'facebook/facebook.php';

$facebook = new Facebook(array(
  'appId'  => APPID,
  'secret' => SECRET,
));


?>
