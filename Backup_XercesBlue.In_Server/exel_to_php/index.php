<?php
/************************ YOUR DATABASE CONNECTION START HERE   ****************************/
include("db_connection.php");
//$db = "xamdb";
//mysql_connect("localhost","root","");
//mysql_select_db($db)or die("unable to select database");

/************************ YOUR DATABASE CONNECTION END HERE  ****************************/


set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
include 'PHPExcel/IOFactory.php';

$file = $_REQUEST['hiddenvalue'];
if($file!=="")
{
	// This is the file path to be uploaded.
	$inputFileName = "uploads/".$file; 

	try 
	{
		$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
	}
	catch(Exception $e)
	{
		die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
	}

	$worksheetNames = $objPHPExcel->getSheetNames($inputFileName);
	$alldata = array();
	$category =1;
	foreach($worksheetNames as $key => $sheetName)
	{
		
		
		if(trim($sheetName) === "Reasioning" || trim($sheetName) === "reasioning" || trim($sheetName) === "Reasoning" || trim($sheetName) === "reasoning")
		{
			$category =1;
		}
		
	else if(trim($sheetName) === "English" || trim($sheetName) === "english" || trim($sheetName) === "English Language" || trim($sheetName) === "english language") 
		{
			$category =2;
		}
	else if(trim($sheetName) === "math" || trim($sheetName) === "Math" || trim($sheetName) === "Numerical" || trim($sheetName) === "numerical" || trim($sheetName) === "Numeric" || trim($sheetName) === "numeric") 
		{
			$category = 3;
		}
	else if(trim($sheetName)==="General Awareness" || trim($sheetName)==="general awareness" || trim($sheetName)==="Genral Awareness" || trim($sheetName)==="genral awareness" || trim($sheetName) ==="General awareness" || trim($sheetName) ==="GK" || trim($sheetName) === "gk" || trim($sheetName)==="Genral awareness")
		{
			
			$category=4;
		}
		else if(trim($sheetName)==="Computer" || trim($sheetName)==="computer" || trim($sheetName)==="Computer Awareness" || trim($sheetName)==="computer awareness" || trim($sheetName)==="Computer Knowledge" || trim($sheetName)==="computer knowledge")
		{
			$category =5;
		}
		
		
		$objPHPExcel->setActiveSheetIndexByName($sheetName);
		$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

		//$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
		$arrayCount = count($allDataInSheet); 
 		// Here get total count of row in that Excel sheet


		for($i=3;$i<=$arrayCount;$i++)
		{
			$question =trim($allDataInSheet[$i]["B"]);
			$answer = trim($allDataInSheet[$i]["C"]);
			$solution = trim($allDataInSheet[$i]["D"]);
			$option1 = trim($allDataInSheet[$i]["E"]);
			$option2 = trim($allDataInSheet[$i]["F"]);
			$option3 = trim($allDataInSheet[$i]["G"]);
			$option4 = trim($allDataInSheet[$i]["H"]);
			$option5 = trim($allDataInSheet[$i]["I"]);
			$year = trim($allDataInSheet[$i]["J"]);
            $BankName = trim($allDataInSheet[$i]["K"]);
			
			if($question!=="")
			{
				$array1= array();
				$array1['question']= $question;
				$array1['answer']=$answer;
				$array1['solution']=$solution;
				$array1['option1']=$option1;
				$array1['option2']=$option2;
				$array1['option3'] =$option3;
				$array1['option4'] =$option4;
				$array1['option5'] =$option5;
				$array1['category'] = $category;
				$array1['bankname'] = $BankName;
				$array1['year'] = $year;
				array_push($alldata,$array1);
				//$query ="insert into question_table (Question_text,Answer,solution,option1,option2,option3,option4,option5) values('".$question."', '".$answer."','".$solution."','".$option1."','".$option2."','".$option3."','".$option4."','".$option5."')";
				//mysql_query($query);
			}
		}

	}

echo json_encode($alldata);
}
else
{
	echo "0";
}

?>