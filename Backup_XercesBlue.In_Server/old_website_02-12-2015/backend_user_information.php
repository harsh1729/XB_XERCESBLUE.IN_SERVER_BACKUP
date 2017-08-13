<?php
    $hostname = "xblueDB.db.11839441.hostedresource.com";
	$username = "xblueDB";
	$password = "Xerces@1985";
	$database_name = "xblueDB";
	
	mysql_connect($hostname,$username,$password);
	mysql_select_db($database_name)	or die("Database not Found!");

	$user_name = $_REQUEST['user_name'];
	$user_phone = $_REQUEST['user_phone'];
	$user_email = $_REQUEST['user_email'];
	$user_message = $_REQUEST['user_message'];

   $sql = "INSERT INTO user_information(name,phone_number,email,message) VALUES('".mysql_real_escape_string($user_name)."','".mysql_real_escape_string($user_phone)."','".mysql_real_escape_string($user_email)."','".mysql_real_escape_string($user_message)."')";
    mysql_query($sql);
    echo "success";

?>