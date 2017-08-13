<?php
include("db_connection.php");
//$db = "xamdb";
//mysql_connect("localhost","root","");
//mysql_select_db($db)or die("unable to select database");


$array = array();

for($i=1;$i<=250;$i++)
{
	if(isset($_REQUEST['check'.$i]))
	{
		$question = mysql_real_escape_string($_REQUEST['question'.$i]);
		$answer = mysql_real_escape_string($_REQUEST['answer'.$i]);
		$solution = mysql_real_escape_string($_REQUEST['solution'.$i]);
		$category = $_REQUEST['category'.$i];
		$language = mysql_real_escape_string($_REQUEST['language']);
		$bankname = mysql_real_escape_string($_REQUEST['bankname'.$i]);
		$year = mysql_real_escape_string($_REQUEST['year'.$i]);
		if($question!=="" && $answer!=="")
		{	
			$query ="insert into qrecord (Question,CorrectOption,Solution,QuesCatId,LangId,bankName,Year,image,solutionImage) values('".$question."', ".$answer.",'".$solution."',".$category.",'".$language."','".$bankname."','".$year."','','')";
			mysql_query($query);
			//$query1 = "SELECT MAX(question_id) from question_table";
				$question_id = mysql_insert_id();
			
            $queryAppId ="insert into qusappmapping (QuesId,AppId) values(".$question_id.",1)";
            mysql_query($queryAppId);
            $Oarray = array();
			$option1 = mysql_real_escape_string($_REQUEST['option1'.$i]);
            array_push($Oarray,$option1);
			$option2 = mysql_real_escape_string($_REQUEST['option2'.$i]);
            array_push($Oarray,$option2);
			$option3 = mysql_real_escape_string($_REQUEST['option3'.$i]);
            array_push($Oarray,$option3);
			$option4 = mysql_real_escape_string($_REQUEST['option4'.$i]);
            array_push($Oarray,$option4);
			$option5 = mysql_real_escape_string($_REQUEST['option5'.$i]);
            array_push($Oarray,$option5);
			if($option1!=="" && $option2!=="" && $option3!=="" && $option4!=="")
			{
                for($j=0;$j<5;$j++)
                {
                        $query2 = "insert into options (QuesId,OptionText,OptionNo,image) values(".$question_id.",'".$Oarray[$j]."',".($j+1).",'')";
                        mysql_query($query2);
                }
			   
			}
	
		array_push($array,$i);
		}
		
	}
}

echo json_encode($array);



?>