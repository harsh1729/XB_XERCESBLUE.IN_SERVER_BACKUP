<?php
session_start();

if(!isset($_SESSION['data_login_id']))
{
    header("location:../onlinexamserver/");
}

//linkRedirectionFb

include("../onlinexamserver/liquid_data/database_connection.php");

$mailQuery = "select * from linkRedirectionGmail";
//$mailResult = mysql_query($mailQuery);
$mailResult= $db->query($mailQuery) or die(mysqli_error($db));
$mailDownloads = mysqli_num_rows($mailResult);


$fbQuery = "select * from linkRedirectionFb";
//$fbResult = mysql_query($fbQuery);
$fbResult= $db->query($fbQuery) or die(mysqli_error($db));
$fbDownloads = mysqli_num_rows($fbResult);

$AppShareFbQuery = "select * from linkRedirectionAppShareFb";
//$AppShareFbResult = mysql_query($AppShareFbQuery);
$AppShareFbResult = $db->query($AppShareFbQuery ) or die(mysqli_error($db));
$AppShareFbDownloads = mysqli_num_rows($AppShareFbResult);

$AppShareWhatsAppQuery = "select * from linkRedirectionAppShareWhatsApp";
//$AppShareWhatsAppResult = mysql_query($AppShareWhatsAppQuery);
$AppShareWhatsAppResult= $db->query($AppShareWhatsAppQuery) or die(mysqli_error($db));
$AppShareWhatsAppDownloads = mysqli_num_rows($AppShareWhatsAppResult);

$AppShareQuery = "select * from linkRedirectionAppShare";
//$AppShareResult = mysql_query($AppShareQuery);
$AppShareResult= $db->query($AppShareQuery) or die(mysqli_error($db));
$AppShareDownloads = mysqli_num_rows($AppShareResult);

//linkRedirectionBankersKaAdda

$BKaAddaQuery = "select * from linkRedirectionBankersKaAdda";
//$BKaAddaResult = mysql_query($BKaAddaQuery);
$BKaAddaResult= $db->query($BKaAddaQuery) or die(mysqli_error($db));
$BKaAddaDownloads = mysqli_num_rows($BKaAddaResult);

//Bank Exam Preparation 2014


$BEPQuery = "select * from linkRedirectionBankExamPrep2014";
//$BEPResult = mysql_query($BEPQuery);
$BEPResult = $db->query($BEPResult) or die(mysqli_error($db));
$BEPDownloads = mysqli_num_rows($BEPResult);

$rtAdvtQuery = "select * from linkRedirectionAddRichText";
//$rtAdvtResult = mysql_query($rtAdvtQuery);
$rtAdvtResult= $db->query($rtAdvtQuery) or die(mysqli_error($db));
$rtAdvtDownloads = mysqli_num_rows($rtAdvtResult);


$BannerAdvtQuery = "select * from linkRedirectionAddBanner";
//$BannerAdvtResult = mysql_query($BannerAdvtQuery);
$BannerAdvtResult= $db->query($BannerAdvtQuery ) or die(mysqli_error($db));
$BannerAdvtDownloads = mysqli_num_rows($BannerAdvtResult);


$IntertialAdvtQuery = "select * from linkRedirectionAddIntertial";
//$IntertialAdvtResult = mysql_query($IntertialAdvtQuery);
$IntertialAdvtResult= $db->query($IntertialAdvtQuery) or die(mysqli_error($db));
$IntertialAdvtDownloads = mysqli_num_rows($IntertialAdvtResult);

?>
<html>
    <head>
    </head>
    <body>
        <p>Downloads from email : <?php echo $mailDownloads; ?></p>
        <p>Downloads from facebook : <?php echo $fbDownloads; ?></p>
        <p>Downloads from App Share Fb : <?php echo $AppShareFbDownloads; ?></p>
        <p>Downloads from App Share WhatsApp : <?php echo $AppShareWhatsAppDownloads; ?></p>
        <p>Downloads from App Share : <?php echo $AppShareDownloads; ?></p>
        <p>Downloads from Bankers Ka Adda : <?php echo $BKaAddaDownloads ?></p>
         <p>Downloads from Bank Exam Prepartion 2014: <?php echo $BEPDownloads ?></p>
         <p>Downloads from rich text Advt: <?php echo $rtAdvtDownloads ?></p>
         <p>Downloads from Banner Advt: <?php echo $BannerAdvtDownloads ?></p>
         <p>Downloads from Intertial Advt: <?php echo $IntertialAdvtDownloads ?></p>
    </body>
</html>