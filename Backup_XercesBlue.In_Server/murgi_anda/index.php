<?php
session_start();
require_once("Facebook/FacebookSession.php");
require_once("Facebook/FacebookRedirectLoginHelper.php");
require_once("Facebook/FacebookRequest.php");
require_once("Facebook/FacebookResponse.php");
require_once("Facebook/FacebookSDKException.php");
require_once("Facebook/FacebookRequestException.php");
require_once("Facebook/FacebookAuthorizationException.php");
require_once("Facebook/GraphObject.php");
require_once("Facebook/GraphUser.php");
require_once("Facebook/GraphSessionInfo.php");

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphSessionInfo;

$id = '392419437601130';
$secrate = '0b49fb313ef623cb3aeb6fc15559ee8f';
FacebookSession::setDefaultApplication($id, $secrate);

$helper = new FacebookRedirectLoginHelper('http://xercesblue.in/murgi_anda/index.php');
$session = $helper->getSessionFromRedirect();

if(isset($session))
{
	echo "login successfull";
}
else
{
	echo "<a href= ".$helper->getLoginUrl()."> login with facebook </a>";
 
}

?>