<?php
include("database_connection.php");

$query = mysql_query("select * from app_table");
$cat = array();
while($row=mysql_fetch_array($query))
{
    $App1['id'] = $row['id'];
	$App1['name']=$row['Name'];
	array_push($cat,$App1);
}
echo json_encode($cat);



?>