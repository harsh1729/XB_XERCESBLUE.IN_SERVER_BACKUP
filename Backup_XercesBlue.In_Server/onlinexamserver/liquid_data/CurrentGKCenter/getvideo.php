<?php

//      Link with complete date based
//      http://xercesblue.in/onlinexamserver/liquid_data/CurrentGKCenter/getGKQuestions.php?QuestionNo=3&langCode=hi&date=11&month=08&year=2014

include("../database_connection.php");
$LangCode = $_REQUEST['langCode'];
$date = $_REQUEST['date'];
if($date!=''){
$dateBack = date('Y-m-d', strtotime($date .' -20 day'));
$selectQuery = "select * from video where datetime between '".$dateBack."' and '".$date."' order by datetime desc";
//echo $selectQuery;
//langid = '".$LangCode."' and
}else{
    //where Langid = '".$LangCode."' 
	$selectQuerydate = "select datetime from video order by datetime desc limit 1";
    $dateTime = $db1->query( $selectQuerydate );
     while( $QuestionSelectRow = mysqli_fetch_array( $dateTime ) )
    {
         $date = $QuestionSelectRow['datetime'];

    }
     //echo $selectQuerydate;
   // echo $selectQuerydate;
    //langid = '".$LangCode."'
    $dateBack = date('Y-m-d', strtotime($date .' -20 day'));
    $selectQuery = "select * from video where datetime between '".$dateBack."' and '".$date."' order by datetime desc";
   // echo $selectQuery;
}

//echo $selectQuery;
$jsonArrayMain = array();
//$QuestionSelectResult = mysql_query( $selectQuery );
$QuestionSelectResult = $db1->query( $selectQuery );
$rowCount = mysqli_num_rows($QuestionSelectResult) ;
 if( $rowCount > 0 )
{
    
    foreach ($QuestionSelectResult as $key => $QuestionSelectRow){
        $jsonArray = array();
        $jsonArray['id'] = $QuestionSelectRow['id'];
        $jsonArray['date'] = $QuestionSelectRow['datetime'];
        $jsonArray['name'] = $QuestionSelectRow['video_name'];
        $jsonArray['langCode'] = $QuestionSelectRow['langid'];
        $jsonArray['des'] = $QuestionSelectRow['video_discription'];
        $jsonArray['youtube_key'] = $QuestionSelectRow['youtube_key'];
        $jsonArray['catid'] = $QuestionSelectRow['catid'];
        $jsonArray['image'] = "http://www.examkabila.com/admin_docs/upload_video/".$QuestionSelectRow['image'];
        array_push($jsonArrayMain, $jsonArray);
    }
}
// if not match video of specific date

if(sizeof($jsonArray)==0){
    //where Langid = '".$LangCode."' 
    $selectQuerydate = "select datetime from video order by datetime desc limit 1";
    $dateTime = $db1->query( $selectQuerydate );
     while( $QuestionSelectRow = mysqli_fetch_array( $dateTime ) )
    {
         $date = $QuestionSelectRow['datetime'];

    }
     //echo $selectQuerydate;
   // echo $selectQuerydate;
    //langid = '".$LangCode."' and
    $dateBack = date('Y-m-d', strtotime($date .' -20 day'));
    $selectQuery = "select * from video where datetime between '".$dateBack."' and '".$date."' order by datetime desc";
//echo $selectQuery;
    $QuestionSelectResult = $db1->query( $selectQuery );
   $rowCount = mysqli_num_rows($QuestionSelectResult) ;
 if( $rowCount > 0 )
{
    
    foreach ($QuestionSelectResult as $key => $QuestionSelectRow){
        $jsonArray = array();
        $jsonArray['id'] = $QuestionSelectRow['id'];
        $jsonArray['date'] = $QuestionSelectRow['datetime'];
        $jsonArray['name'] = $QuestionSelectRow['video_name'];
        $jsonArray['langCode'] = $QuestionSelectRow['langid'];
        $jsonArray['des'] = $QuestionSelectRow['video_discription'];
        $jsonArray['youtube_key'] = $QuestionSelectRow['youtube_key'];
        $jsonArray['catid'] = $QuestionSelectRow['catid'];
        $jsonArray['image'] = "http://www.examkabila.com/admin_docs/upload_video/".$QuestionSelectRow['image'];
        array_push($jsonArrayMain, $jsonArray);
    }
}
}
$arrayvideo = array();
$arrayvideo['video'] = $jsonArrayMain;
echo json_encode($arrayvideo);

?>