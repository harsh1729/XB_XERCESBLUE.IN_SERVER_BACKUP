<?php
include("database_connection.php");

$query = mysql_query("select * from qrecord where QuesId in (select QuesId from qusappmapping where AppId=1)");

while($row=mysql_fetch_array($query))
{
    echo $row['QuesId']."<br>";
    echo $row['Question']."<br>";
    echo $row['Solution']."<br>";
    echo $row['bankname']."<br>";
    
}
?>