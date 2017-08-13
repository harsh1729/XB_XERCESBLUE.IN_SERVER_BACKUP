<?php
include("database_connection.php");

$query = mysql_query("select * from language");
$lang = array();
while($row=mysql_fetch_array($query))
{
	$lang1['name'] = $row['Lang'];
	$lang1['code'] = $row['Code'];
	
	array_push($lang,$lang1);
}
echo json_encode($lang);



?>