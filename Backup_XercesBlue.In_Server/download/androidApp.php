<?php


include("../onlinexamserver/liquid_data/database_connection.php");

$id = $_REQUEST['id'];

if($id == 1)
{    // gmail
    $insertQuery = "insert into linkRedirectionGmail () values () ";
    //mysql_query($insertQuery);
     $db->query($insertQuery) or die(mysqli_error($db));
}
else if($id == 2)
{   // facebook
    $insertQuery = "insert into linkRedirectionFb () values () ";
    //mysql_query($insertQuery); 
$db->query($insertQuery) or die(mysqli_error($db));  
}
else if($id == 3)
{
    //linkRedirectionAppShareFb
    $insertQuery = "insert into linkRedirectionAppShareFb () values () ";
    //mysql_query($insertQuery);   
$db->query($insertQuery) or die(mysqli_error($db));
}
else if($id == 4)
{
    //linkRedirectionAppShareWhatsApp
    $insertQuery = "insert into linkRedirectionAppShareWhatsApp () values () ";
    //mysql_query($insertQuery); 
$db->query($insertQuery) or die(mysqli_error($db));  
}
else if($id == 5)
{
    //linkRedirectionAppShare
    $insertQuery = "insert into linkRedirectionAppShare () values () ";
    //mysql_query($insertQuery);   
$db->query($insertQuery) or die(mysqli_error($db));
}
else if($id == 6)
{
    //linkRedirectionAppShare
    $insertQuery = "insert into linkRedirectionBankersKaAdda () values () ";
    //mysql_query($insertQuery);  
$db->query($insertQuery) or die(mysqli_error($db)); 
}

else if($id == 7)
{
    //linkRedirectionAppShare
    $insertQuery = "insert into linkRedirectionBankExamPrep2014 values () ";
    //mysql_query($insertQuery);   
$db->query($insertQuery) or die(mysqli_error($db));
}

else if($id == 8)
{
    //linkRedirectionAddRichText
    $insertQuery = "insert into linkRedirectionAddRichText values () ";
   // mysql_query($insertQuery);   
$db->query($insertQuery) or die(mysqli_error($db));
}
else if($id == 9)
{
    //linkRedirectionAddBanner
    $insertQuery = "insert into linkRedirectionAddBanner values () ";
    //mysql_query($insertQuery);   
$db->query($insertQuery) or die(mysqli_error($db));
}


else if($id == 10)
{
    //linkRedirectionAddIntertial
    $insertQuery = "insert into linkRedirectionAddIntertial values () ";
   // mysql_query($insertQuery);   
$db->query($insertQuery) or die(mysqli_error($db));
}

header("location:https://play.google.com/store/apps/details?id=com.xercesblue.onlinebankexampo");

?>