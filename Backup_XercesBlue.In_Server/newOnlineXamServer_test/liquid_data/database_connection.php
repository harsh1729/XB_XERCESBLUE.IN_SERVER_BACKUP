<?php

	$hostname = "GKdatabase.db.11839441.hostedresource.com";
	$username = "GKdatabase";
	$password = "Xerces@1985";
	$database_name = "GKdatabase";
	
	mysql_connect($hostname,$username,$password);
	mysql_select_db($database_name)	or die("Database not Found!");
	

?>