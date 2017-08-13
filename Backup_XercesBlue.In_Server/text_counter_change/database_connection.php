<?php

	$hostname = "newXamdata.db.11839441.hostedresource.com";
	$username = "newXamdata";
	$password = "Xerces@1985";
	$database_name = "newXamdata";
	
	mysql_connect($hostname,$username,$password);
	mysql_select_db($database_name)	or die("Database not Found!");
?>