<?php
    
include("../database_connection.php");

$QuesId = $_REQUEST['QuesId'];
$from = $_REQUEST['from'];
$to = $_REQUEST['to'];
$query = "delete from qrecord where QuesId =".$QuesId;
 mysql_query($query);
$oquery = "delete from options where QuesId =".$QuesId;
mysql_query($oquery);
header("location:../show_newonlineserver_data.php?from=".$from."&to=".$to); 

?>