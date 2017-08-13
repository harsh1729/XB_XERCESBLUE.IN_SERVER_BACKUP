<?php
session_start();
$fbPermissions = 'email,user_birthday';
 require 'facebook/facebook.php';
        Facebook::$CURL_OPTS[CURLOPT_SSL_VERIFYPEER] =false;
Facebook::$CURL_OPTS[CURLOPT_SSL_VERIFYHOST] = 2;
	$facebook = new Facebook(array(
	'appId' => '790874097633188',
	'secret' => 'e9180f51be8b2d75258b2a82157bd14b',
    'cookie' => true,
	));

 $fbuser = $facebook->getUser(); // get user
//$login = $facebook->getLoginUrl(array('scope' => $fbPermissions));

 if(!$fbuser)
 {
     $login = $facebook->getLoginUrl(array('scope' => $fbPermissions));
	 //$login = $facebook->getLoginUrl();
    //echo "<a href='".$login."'> login with facebook </a>";
    header("location:".$login);
 }
 else
 {
     
	 try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api("/me");
    //$user_permissions = $facebook->api("/me/permissions");
   $_SESSION['bank_exam_username'] = $user_profile[name];
  // print_r($user_profile);
   $facebook->destroySession();
  header('location:../index.php');
    } 
          catch (FacebookApiException $e) {
            error_log($e);
            $user = null;
          }
 
 }
?>