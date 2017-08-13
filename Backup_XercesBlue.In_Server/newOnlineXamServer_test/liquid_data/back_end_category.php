<?php
include("database_connection.php");
session_start();
$parentId=0;
$AppId=$_SESSION['Application_Id'];
$query_empty=1;
$cat_all = array();
function repeat()
{
    global $parentId,$AppId,$query_empty,$cat_all;
    $cat = array();
    $query = mysql_query("select * from category_table where parentId=".$parentId." and AppId=".$AppId);
   $query_empty = mysql_num_rows($query);
    while($row=mysql_fetch_array($query))
    {
        $cat1['id'] = $row['id'];
        $cat1['name']=$row['category'];
    	array_push($cat,$cat1);
    }
    array_push($cat_all,$cat);
    $parentId = $cat[0]['id'];
}
while( $query_empty !== 0 )
{
   
    repeat();
}


echo json_encode($cat_all);

?>