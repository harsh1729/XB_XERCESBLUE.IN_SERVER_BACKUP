<?php
 session_start();

?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Instructions</title>
<style rel="stylesheet" type="text/css">
body
{
	overflow:hidden;
	padding:0px;
	margin:0px;
}
#Exam_Name_Header
{
	
	color:#FFF;
	background-color:#283a6e;
	height:6%;
	width:100%;

	
	font-size:4vh;
}
#main_container
{
	height:100%;
	width:100%;
}
a
{
	color:#000;
	text-decoration:none;
	font-weight:bold;
}
a:hover
{
	color:#09F;
	
}
#next_button
{
	border:solid 1px #666666;
	padding:5px;
}
#next_button:hover
{
	border:solid 1px #09F;
	padding:5px;
}


</style>


</head>

<body onLoad="resize_body()">
		<div id="main_container">
					<div id="Exam_Name_Header" align="center"> 
                        	Online Bank Test 
                    </div>
					<div id="language_container" style="text-align:right; margin-right:2%;">
        				<span style="color:#F00;"> choose your language  </span> &nbsp; &nbsp; 
                    		<select id="language">
  					  			<option value="hindi" selected>hindi</option>
					  			<option value="english">english</option>
							</select>
        			</div>	
      				 <div id="language_change_container" style="width:99%; height:80%;" > 
                     </div>
       		
       				<div style="color:#F00;">
            	<input id="confirm" type="checkbox" /><span>I have read and understood the instructions. All Computer Hardwares allotted to me are in 
                        proper working condition. I agree that in case of not adhering to the instructions,I will be disqualified from giving the exam </span>
            </div>
             <div id="next_page_navigation_container " style=" width:100%; text-align:center;margin-top:10px;">
             			
             
            			<span id="next_button"><a href="Front_end_Demo.php">Began Exam >></a></span>
            </div>


		</div>
        
        
        
 
 
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">

var language="";
$(document).ready(function(e) {
	 	$(window).load(function(e) {
			$('#language_change_container').empty();
        	$('#language_change_container').load('hindi_instruction.html');
				language="hi";
				ajax_call(language);
			
    	});
	
	
        $('#language').change(function()
		{
			var lang = $('#language option:selected').text();
			
	 		if(lang == "hindi")
	 		{
				language="hi";
				
				$('#language_change_container').empty();
				$('#language_change_container').load('hindi_instruction.html');
				ajax_call(language);
	 		}
	 		else
	 		{
				language = "en";
				
				
				$('#language_change_container').empty();
		 		$('#language_change_container').load('english_instruction.html');
				ajax_call(language);
	 		}
		});
		
		
	function ajax_call(lang)
{
	
	$.ajax({
			  	type :'POST',
				url :'language_change.php',
				data: {"language":lang},
				dataType: 'json',
				async:false,
				
				success:function(response)
				{
					console.log(response);
					
				},
				error:function(jqXHR,textStatus,errorThrown)
				{
					console.log("Error:"+errorThrown);
				}
	});
}

		 $('#next_button').click(function(){
			 if($('#confirm').is(":checked"))
			 {
		        return true;
			 }
			 else
			 {
				 return false;
			 }
			 
	 });
		
	
   });
	
 

</script>     
<?php
 session_start();
 echo "<script>".$_SESSION['language']."=language;</script>";
?>   
</body>
</html>
