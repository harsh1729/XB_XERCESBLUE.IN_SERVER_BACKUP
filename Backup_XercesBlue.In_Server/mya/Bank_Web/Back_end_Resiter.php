<?php
include("database_connection.php");

$name = $_POST['Resiter_Name'];
$phone = $_POST['Resiter_Phone_No'];
$email = $_POST['Resiter_email'];
$username = $_POST['Resiter_Username'];
$password = md5($_POST['Resiter_password']);
 
 $check = "select * from user_information_table where username = '".$username."'";
 $result = mysql_query($check);
 if(mysql_num_rows($result) === 0)
 {

	$sql="INSERT INTO user_information_table (name, phone, email, username, password)
	VALUES ('$name', '$phone', '$email', '$username', '$password')";
	mysql_query($sql);
	echo 0;
 }
 else
 {
	 echo 1;
 }


?>