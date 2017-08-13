<?php

	$hostname = "xamDB.db.11839441.hostedresource.com";
	$username = "xamDB";
	$password = "Xerces@1985";
	$database_name = "xamDB";
	
	mysql_connect($hostname,$username,$password);
	mysql_select_db($database_name)	or die("Database not Found!");
	

?>