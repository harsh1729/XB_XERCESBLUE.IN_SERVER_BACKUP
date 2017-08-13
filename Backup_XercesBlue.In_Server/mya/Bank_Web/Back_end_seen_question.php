<?php

session_start();
include("database_connection.php");

$seen_question = $_REQUEST['seen_question'];
$catid = $_REQUEST['catid'];

   $query="select * from old_question_table where QuesId=".$seen_question." and userid=".$_SESSION['bank_exam_login_id'];
   $result = mysql_query($query);
   if(mysql_num_rows($result) === 0)
   {
	
	$sql = "INSERT INTO old_question_table (QuesId, userid, QuesCatId) VALUES (".$seen_question.",".$_SESSION['bank_exam_login_id'].",".$catid.")";
           mysql_query($sql);
   }
   else
   {
	   $attempt=0;
	 while($row = mysql_fetch_array($result))
	 {
		  $attempt= $row['attempt'];
		 $attempt = $attempt + 1;
	 }
	 $insert_query = "update old_question_table SET attempt = ".$attempt." where QuesId=".$seen_question;
	 mysql_query($insert_query);
   }
	

echo json_encode(mysql_num_rows($result));
?>