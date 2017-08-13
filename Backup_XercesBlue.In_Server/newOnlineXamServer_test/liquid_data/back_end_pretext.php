<?php
include("database_connection.php");
session_start();
  $querystring ="select * from pretext order by id desc limit 8";
$query = mysql_query($querystring);
$all_pretext = array();
while($row = mysql_fetch_array($query))
{
    $array = array();
    $id = $row['id'];
    $text = mb_substr($row['text'],0,40,'UTF-8');
    $array['id']= $id;
    $array['text']= $text." ...";
    $array['full_text']=$row['text'];
    array_push($all_pretext,$array);
    
}

echo json_encode($all_pretext);

?>