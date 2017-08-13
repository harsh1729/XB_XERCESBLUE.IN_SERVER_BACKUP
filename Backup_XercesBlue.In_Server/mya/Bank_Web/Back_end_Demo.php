<?php
session_start();
include("database_connection.php");

$QuesCatId1=1;$QuesCatId2=2;$QuesCatId3=3;$QuesCatId4=4;$QuesCatId5=5;
$array = array();
$query = mysql_query("select * from qrecord where  QuesCatId=". $QuesCatId1."  and LangId= '".$_SESSION['language']."'   order by QuesId asc limit 40");
$array2 = array();
$query2 = mysql_query("select * from qrecord where QuesCatId=". $QuesCatId2." and LangId= 'en' order by QuesId asc limit 40");
$array3 = array();
$query3 = mysql_query("select * from qrecord where QuesCatId=". $QuesCatId3." and LangId= '".$_SESSION['language']."' order by QuesId asc limit 40");
$array4 = array();
$query4 = mysql_query("select * from qrecord where QuesCatId=". $QuesCatId4." and LangId= '".$_SESSION['language']."' order by QuesId asc limit 40");
$array5 = array();
$query5 = mysql_query("select * from qrecord where QuesCatId=". $QuesCatId5." and LangId= '".$_SESSION['language']."' order by QuesId asc limit 40");
$array_section = array();



if(mysql_num_rows($query) !== 0)
{
	while($row = mysql_fetch_array($query))
	{
		$option_array= array();
		$id = $row['QuesId'];
		$catid =$row['QuesCatId'];
		$question = $row['Question'];
		$correctopt=$row['CorrectOption'];
		$solution =  $row['Solution'];
		$q_image = $row['image'];
		$solutionimg = $row['solutionImage'];
		$query1 = mysql_query("select * from options where QuesId=". $id);
		while($row1 = mysql_fetch_array($query1))
		{
			
			$opt['opttext'] =$row1['OptionText'];
			$opt['optimg'] =$row1['image'];
			if($opt['opttext'] !=="" || $opt['optimg'] !== "")
			{
				array_push($option_array,$opt);
			}
			
		}
		
		$array1= array();
		$array1['id']= $id;
		$array1['catid'] =$catid;
		$array1['question']=$question;
		$array1['answer']=-1;
		$array1['status']="";
		$array1['correctopt']=$correctopt;
		$array1['solution']=$solution;
		$array1['option'] =$option_array;
		$array1['q_img'] = $q_image;
		$array1['solution_img']=$solutionimg;
		array_push($array,$array1);
		
		
		
	
	}
}
array_push($array_section,$array);



if(mysql_num_rows($query2) !== 0)
{
	while($row = mysql_fetch_array($query2))
	{
		$option_array= array();
		$id = $row['QuesId'];
		$catid =$row['QuesCatId'];
		$question = $row['Question'];
		$correctopt=(int)$row['CorrectOption'];
		$solution =  $row['Solution'];
		$q_image = $row['image'];
		$solutionimg = $row['solutionImage'];
		$query1 = mysql_query("select * from options where QuesId=". $id);
		while($row1 = mysql_fetch_array($query1))
		{
			
			$opt['opttext'] =$row1['OptionText'];
			$opt['optimg'] = $row1['image'];
			if($opt['opttext'] !=="" || $opt['optimg'] !== "")
			{
				array_push($option_array,$opt);
			}
		}
		
		$array1= array();
		$array1['id']= $id;
		$array1['catid'] =$catid;
		$array1['question']=$question;
		$array1['answer']=-1;
		$array1['status']="";
		$array1['correctopt']=$correctopt;
		$array1['solution']=$solution;
		$array1['option'] =$option_array;
		$array1['q_img'] = $q_image;
		$array1['solution_img']=$solutionimg;
		array_push($array2,$array1);
		
	
	}
}
array_push($array_section,$array2);



if(mysql_num_rows($query3) !== 0)
{
	while($row = mysql_fetch_array($query3))
	{
		$option_array= array();
		$id = $row['QuesId'];
		$catid =$row['QuesCatId'];
		$question = $row['Question'];
		$correctopt=(int)$row['CorrectOption'];
		$solution =  $row['Solution'];
		$q_image = $row['image'];
		$solutionimg = $row['solutionImage'];
		$query1 = mysql_query("select * from options where QuesId=". $id);
		while($row1 = mysql_fetch_array($query1))
		{
			
			$opt['opttext'] =$row1['OptionText'];
			$opt['optimg'] = $row1['image'];
			if($opt['opttext'] !=="" || $opt['optimg'] !== "")
			{
				array_push($option_array,$opt);
			}
		}
		
		$array1= array();
		$array1['id']= $id;
		$array1['catid'] =$catid;
		$array1['question']=$question;
		$array1['answer']=-1;
		$array1['status']="";
		$array1['correctopt']=$correctopt;
		$array1['solution']=$solution;
		$array1['option'] =$option_array;
		$array1['q_img'] = $q_image;
		$array1['solution_img']=$solutionimg;
		array_push($array3,$array1);
		
	
	}
}
array_push($array_section,$array3);



if(mysql_num_rows($query4) !== 0)
{
	while($row = mysql_fetch_array($query4))
	{
		$option_array= array();
		$id = $row['QuesId'];
		$catid =$row['QuesCatId'];
		$question = $row['Question'];
		$correctopt=(int)$row['CorrectOption'];
		$solution =  $row['Solution'];
		$q_image = $row['image'];
		$solutionimg = $row['solutionImage'];
		$query1 = mysql_query("select * from options where QuesId=". $id);
		while($row1 = mysql_fetch_array($query1))
		{
			
			$opt['opttext'] =$row1['OptionText'];
			$opt['optimg'] = $row1['image'];
			if($opt['opttext'] !=="" || $opt['optimg'] !== "")
			{
				array_push($option_array,$opt);
			}
		}
		
		$array1= array();
		$array1['id']= $id;
		$array1['catid'] =$catid;
		$array1['question']=$question;
		$array1['answer']=-1;
		$array1['status']="";
		$array1['correctopt']=$correctopt;
		$array1['solution']=$solution;
		$array1['option'] =$option_array;
		$array1['q_img'] = $q_image;
		$array1['solution_img']=$solutionimg;
		array_push($array4,$array1);
		
	
	}
}
array_push($array_section,$array4);



if(mysql_num_rows($query5) !== 0)
{
	while($row = mysql_fetch_array($query5))
	{
		$option_array= array();
		$id = $row['QuesId'];
		$catid =$row['QuesCatId'];
		$question = $row['Question'];
		$correctopt=(int)$row['CorrectOption'];
		$solution =  $row['Solution'];
		$q_image = $row['image'];
		$solutionimg = $row['solutionImage'];
		$query1 = mysql_query("select * from options where QuesId=". $id);
		while($row1 = mysql_fetch_array($query1))
		{
			
		$opt['opttext'] =$row1['OptionText'];
			$opt['optimg'] = $row1['image'];
			if($opt['opttext'] !=="" || $opt['optimg'] !== "")
			{
				array_push($option_array,$opt);
			}
		}
		
		$array1= array();
		$array1['id']= $id;
		$array1['catid'] =$catid;
		$array1['question']=$question;
		$array1['answer']=-1;
		$array1['status']="";
		$array1['correctopt']=$correctopt;
		$array1['solution']=$solution;
		$array1['option'] =$option_array;
		$array1['q_img'] = $q_image;
		$array1['solution_img']=$solutionimg;
		array_push($array5,$array1);
		
	
	}
}
array_push($array_section,$array5);
echo json_encode($array_section);
?>