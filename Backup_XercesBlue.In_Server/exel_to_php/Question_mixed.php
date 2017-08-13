<?php
	$db11 = "xamdb";
	$db22 = "bankpodb";
	$db1= mysql_connect("localhost","root","");
	$db2 =mysql_connect("localhost","root","",true);
	mysql_select_db($db11,$db1)or die("unable to select database");
	mysql_select_db($db22,$db2)or die("unable to select database");

	set_time_limit(0);

	$exitquestion = "select OldQuesId from qrecord";
	$exitquestionresult = mysql_query($exitquestion,$db2);
	$exitarray =array();
	while($exitrow = mysql_fetch_array($exitquestionresult))
	{
		array_push($exitarray,$exitrow['OldQuesId']);
	}
	if(count($exitarray)==0)
	{
		$QuesIdquery = "select QuesId from qrecord";
	}
	else
	{
		$QuesIdquery = "select QuesId from qrecord where QuesId not in (".implode(',', $exitarray).")";
	}

	$QuesIdqueryresult = mysql_query($QuesIdquery,$db1);
	$QuesIdarray =array();
	while($QuesIdrow = mysql_fetch_array($QuesIdqueryresult))
	{
		 array_push($QuesIdarray,$QuesIdrow['QuesId']);
	}
	echo $QuesIdarray[7];
	while(count($QuesIdarray)>0)
	{
		$randomindex = array_rand($QuesIdarray);
		$randomvalue = $QuesIdarray[$randomindex];
	
		$query ="SELECT * FROM qrecord where QuesId=".$randomvalue;
		$result= mysql_query($query,$db1);
 		while($row = mysql_fetch_array($result))
 		{
		 	echo $row['QuesId']."<br>";
		 	$oldQuesId = trim($row['QuesId']);
		 	$QuesCatId = trim($row['QuesCatId']);
		 	$Question = trim($row['Question']);
		 	$CorrectOption = trim($row['CorrectOption']);
		 	$Solution = trim($row['Solution']);
		 	$solutionImage = trim($row['solutionImage']);
		 	$LangId = trim($row['LangId']);
		 	$image = trim($row['image']);
		 	$bankName = trim($row['bankName']);
		 	$Year = trim($row['Year']);
		}
	 	$inserquery ="insert into qrecord (OldQuesId,QuesCatId,Question,CorrectOption,Solution,solutionImage,LangId,image,bankName,Year) values(".$oldQuesId.",".$QuesCatId.",'".mysql_real_escape_string($Question)."',".$CorrectOption.",'".mysql_real_escape_string($Solution)."','".mysql_real_escape_string($solutionImage)."','".mysql_real_escape_string($LangId)."','".mysql_real_escape_string($image)."','".mysql_real_escape_string($bankName)."','".mysql_real_escape_string($Year)."')";
		mysql_query($inserquery,$db2);
		$question_id = mysql_insert_id();
		$option = mysql_query("select * from options where QuesId=".$question_id);
		while()
		unset($QuesIdarray[$randomindex]); 
	
	}
?>