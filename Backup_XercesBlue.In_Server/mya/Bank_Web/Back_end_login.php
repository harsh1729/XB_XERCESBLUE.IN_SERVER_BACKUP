<?php
include("database_connection.php");

$loginusername = $_REQUEST['username'];
$loginpassword = md5($_REQUEST['password']);
$query = "select * from user_information_table where username ='".$loginusername ."' and password ='" .$loginpassword."'";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	$id = $row['userid'];
	$name = $row['name'];
}

 $rows = mysql_num_rows($result);
 if($rows==1)
 {
   	session_start();
	$_SESSION['bank_exam_login_id']=$id;
	$_SESSION['bank_exam_username'] =$name;
	$_SESSION['language']='hi';
	
	echo  json_encode($name);
	

	
 }
 else
 {
	   
		echo json_encode(0);


 }


?>