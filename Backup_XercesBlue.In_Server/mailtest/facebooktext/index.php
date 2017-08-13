<?php
 
	require 'facebook.php';
        Facebook::$CURL_OPTS[CURLOPT_SSL_VERIFYPEER] = false;
Facebook::$CURL_OPTS[CURLOPT_SSL_VERIFYHOST] = 2;
	$facebook = new Facebook(array(
	'appId' => '790874097633188',
	'secret' => 'e9180f51be8b2d75258b2a82157bd14b',
    'oauth' => true,
	));

 
 if($facebook->getUser() == 0)
 {
	 $login = $facebook->getLoginUrl();
    //echo "<a href='".$login."'> login with facebook </a>";
    header("location:".$login);
 }
 else
 {
     
	 try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
    echo "<pre>";
     print_r($user_profile);
    echo "</pre>";
    

        } 
          catch (FacebookApiException $e) {
            error_log($e);
            $user = null;
          }
 
 }
?>