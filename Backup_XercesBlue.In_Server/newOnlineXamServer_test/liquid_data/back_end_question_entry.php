<?php
include("database_connection.php");


    	//  imgfield
session_start();
$category_no = $_REQUEST['category_no'];
//echo "category_no=".$category_no."<br>";
$imgquestion = $_REQUEST['imgquestion'];
$imgsolution = $_REQUEST['imgsolution'];	
$imgpre_text = $_REQUEST['imgpre_text'];	

$AppId = $_SESSION['Application_Id'];
$hidden =	$_REQUEST['hidden'];
$category = $_REQUEST['category'.$category_no];
//echo "category=".$category."<br>";
$answer = $_REQUEST['answer'];
$reference = $_REQUEST['reference'];
$language = $_REQUEST['language'];
$bankname = trim($_REQUEST['bankname']);
$year = $_REQUEST['year'];
$username= $_SESSION['newonlineserver_login_id'];
$question_text = trim($_REQUEST['question_text']);
$solution = trim($_REQUEST['solution']);
$option_array = array();
$imgoption_array = array();

$pretext = $_REQUEST['pretext'];
 if(isset($_REQUEST['pretext_select']))
					{
						$pretext_select = $_REQUEST['pretext_select'];
					}
					else
					{
						$pretext_select = "null";
					}

$level = $_REQUEST['level'];

$dtObj = new DateTime("now");
$dtObj->setTimeZone( new DateTimeZone("Asia/Kolkata") );
$datetime = $dtObj->format("Y-m-d H:i:s");

for($i=1;$i<=$hidden;$i++)
{
	$option = trim($_REQUEST['option'.$i]);
	$option_array[$i]=$option;
	$imgoption =$_REQUEST['imgoption'.$i];
	$imgoption_array[$i] = $imgoption;
}
		if($pretext_select !== "")
		{
			$pretext_id = $pretext_select;
		}
        else if($pretext !== "" && $imgpre_text == "")
        {
            $sql_pretext = "INSERT INTO pretext(text)VALUES( '".mysql_real_escape_string($pretext)."')";
            mysql_query($sql_pretext);
            $pretext_id = mysql_insert_id();
        }
		else if($pretext == "" && $imgpre_text !== "")
		{
			 $sql_pretext = "INSERT INTO pretext(image)VALUES( '".mysql_real_escape_string($imgpre_text)."')";
            mysql_query($sql_pretext);
            $pretext_id = mysql_insert_id();
		}
		else if($pretext !== "" && $imgpre_text !== "")
		{
			 $sql_pretext = "INSERT INTO pretext(text, image)VALUES( '".mysql_real_escape_string($pretext)."','".mysql_real_escape_string($imgpre_text)."')";
			 
            mysql_query($sql_pretext);
            $pretext_id = mysql_insert_id();
		}
        else
        {
			
			$pretext_id = 0;
            
        }
        
        
        
		$sql_question="INSERT INTO qrecord (QuesCatId, Question, CorrectOption, Solution, LangId ,Year ,Bankname, image, solutionImage, userid, datetime,reference,level,pretext_id) VALUES(".$category.", '".mysql_real_escape_string($question_text)."', ".$answer.", '".mysql_real_escape_string($solution)."', '".$language."', '".$year."', '".mysql_real_escape_string($bankname)."', '".$imgquestion."', '".$imgsolution."', ".$username.",'".$datetime."','".$reference."',".$level.",".$pretext_id.")";
        mysql_query($sql_question);

$question_id = mysql_insert_id();
$mappingquery = "insert into qusappmapping (QuesId,AppId) values (".$question_id.",".$AppId.")";
mysql_query($mappingquery);
$option_no=1;
	foreach($option_array as $options)
	{
		
		$sql_option="INSERT INTO options (QuesId, OptionText, OptionNo ,image) VALUES(".$question_id.", '".mysql_real_escape_string($options)."', ".$option_no.",'".$imgoption_array[$option_no]."')";
		mysql_query($sql_option);
		$option_no=$option_no+1;
	}
//header('location: questionentry.php');
echo json_encode($AppId);
?>