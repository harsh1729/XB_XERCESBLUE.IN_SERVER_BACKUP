

<?php
//Variables for connecting to your database.
//These variable values come from your hosting account.
$hostname = "demoes.db.11839441.hostedresource.com";
$username = "demoes";
$dbname = "demoes";

//These variable values need to be changed by you before deploying
$password = "Xerces@1985";
$usertable = "message_data";
$yourfield = "message";

//Connecting to your database
mysql_connect($hostname, $username, $password) OR DIE ("Unable to
connect to database! Please try again later.");
mysql_select_db($dbname);

//Fetching from your database table.

$message = $_REQUEST['message'];
echo $message;
$sql="INSERT INTO message_data (message) VALUES ('$message')";

mysql_query($sql);
?>