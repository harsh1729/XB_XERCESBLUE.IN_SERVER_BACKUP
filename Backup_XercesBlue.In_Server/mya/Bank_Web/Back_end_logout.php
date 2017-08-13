<?php
 require 'facebook/facebook.php';
include("database_connection.php");
session_start();
if(isset($_SESSION['bank_exam_login_id']))
{
  unset($_SESSION['bank_exam_login_id']);
  
}
if(isset($_SESSION['bank_exam_username']))
{
    unset($_SESSION['bank_exam_username']);
}
       
        Facebook::$CURL_OPTS[CURLOPT_SSL_VERIFYPEER] = false;
        Facebook::$CURL_OPTS[CURLOPT_SSL_VERIFYHOST] = 2;
    $facebook = new Facebook(array(
	'appId' => '790874097633188',
	'secret' => 'e9180f51be8b2d75258b2a82157bd14b',
    'oauth' => true,
	));
    
$facebook->destroySession();
header('location:../index.php');
?>