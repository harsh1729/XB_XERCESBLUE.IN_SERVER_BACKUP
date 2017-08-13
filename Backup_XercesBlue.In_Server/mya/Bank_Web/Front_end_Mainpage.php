<?php
 session_start();
 if(!isset($_SESSION['bank_exam_login_id']))
 {
 		header("location:index.php");
 }
// else
 //{
	// $_SESSION['count']=$_SESSION['count']+1;
	 //if($_SESSION['count']>1)
	 //{
		 
		//echo  "<script type='text/javascript'>";
		
	//	echo "window.close();";
		//echo 'alert("you can not refresh the page <br> login again")';
	//	echo "<script>";
		//session_destroy();
		//}
// }
 $language = $_REQUEST['language'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
<meta name="viewport" content="width=device-width,initial-scale=1"/>

<style>


*
{
	margin:0px;
	padding:0px;
}
body
{
	overflow:hidden;
}

#main_window_div
{
	
	height:100%;
	width:100%;
    margin:0px;
	overflow:hidden;
	
}
#Exam_Name_Header
{
	
	color:#FFF;
	background-color:#283a6e;
	height:6%;
	width:100%;

	
	font-size:4vh;
}
fieldset
{
	width:75%;
	
	margin-left:.4125%;
	margin-right:.3124%;
	text-align:left;
	padding-left:2.5%;
	float:left;

}

.Exam_Section
{
	width:14%;
	
	background-color:rgb(255,133,51);
	text-align:center;
	font-size:1.2vw;
	color:#FFF;

	cursor:pointer;
float:left;
margin-left:3%;
margin-bottom:1.1%;
margin-top:.3%;
margin-right:2%;
}

.Exam_Section_after_click
{
	width:14%;
	
	background-color:rgb(255,133,51);
	text-align:center;
	font-size:1.2vw;
	color:#FFF;
	border:2px solid #46a4e3;
	cursor:pointer;
float:left;
margin-left:3%;
margin-bottom:1.1%;
margin-top:.3%;
margin-right:2%;
}
legend
{
	padding-left:.2%;

	
}

#Exam_Time_Zone
{
	
	float:left;
	height:10%;
	width:21%;
	background-color:#FFF;
	
	position:relative;
	
}
#Exam_Quetion_Show
{
	height:85.5%;
	width:77.5%;

	float:left;
	position:relative;
	margin-left:.4125%;
	top:-1.6%;
	border:1px solid #CCC;

}
#Quetion_Pallete
{
	height:83.5%;
	width:21.550%;
	
	float:left;
	
}

#Quetion_Pallete_Top
{

	height:16%;
	width:100%;
	position:relative;
	background-color:#c9e3fc;
}

#Quetion_Pallete_Middle
{
	height:60%;
	width:100%;
	background-color:#c9e3fc;
	overflow:auto;
	position:relative;
	text-align:center;
}

#Quetion_Pallete_Bottom
{
	height:24%;
	width:100%;
	background-color:#c9e3fc;
	overflow:hidden;
	position:relative
	
}
.leftSpace10
{
	margin-left:2%;
	margin-bottom:1.5%;
}
#Exam_Quetion_Number
{
	
	width:20%;
	height:6%;
	background-color:#FFF;
   font-size:1vw;
	font-weight:bolder;
	
}
hr
{
	margin-left:.3%;
	margin-right:.3%;
}
#Exam_Quetion
{
	width:80%;
	margin-top:.2%;
	margin-left:.2%;
}
#Exam_Option
{
	Height:95%;
	width:100%;

	
}
#Exam_Buttons_pannale
{
	height:6.5%;
	width:78%;
	
	position:absolute;
	top:93%;
	border:1px solid #CCC;
}

.Quetion_pallete_margin
{
height:33.5px;
	width:34px;
	border-radius:7px;
	background-color:#e6e9ed;
	cursor:pointer;
	border:solid 1px #999999;
	margin-top:2%;
	margin-bottom:2%;
	margin-left:2%;
	margin-right:2%;
	
}
.Result_detail_button
{
height:33.5px;
	width:34px;
	border-radius:7px;
	background-color:#e6e9ed;
	cursor:pointer;
	border:solid 1px #999999;
	margin-top:10px;
	margin-bottom:10px;
	margin-left:20px;
	margin-right:20px;
	
}

.Un_Answered_question
{
height:33.5px;
	width:34px;
	cursor:pointer;
	border:0px;
	outline:0px;
	margin-top:2%;
	margin-bottom:2%;
	margin-left:2%;
	margin-right:2%;
	
	background:url(images/question_not_answered.png);
	background-size:cover;
	border:none;
	color:#FFF;
}

.markednotanswered_question
{
	height:33.5px;
	width:34px;
	cursor:pointer;
	border:0px;
	outline:0px;
	margin-top:2%;
	margin-bottom:2%;
	margin-left:2%;
	margin-right:2%;
background:url(images/question_marked_selected.png);
	border-radius:17px;
	background-size:cover;
	border-color:#639;
	color:#FFF;
}
.markedanswered_question
{
	height:33.5px;
	width:34px;

	cursor:pointer;
	border:0px;
	outline:0px;
	margin-top:2%;
	margin-bottom:2%;
	margin-left:2%;
	margin-right:2%;
    background:url(images/question_marked_answered.png) ;
	
	background-size:cover;
	
	color:#FFF;
}

.Answered_question
{
	height:33.5px;
	width:34px;
	cursor:pointer;
	border:0px;
	outline:0px;
	margin-top:2%;
	margin-bottom:2%;
	margin-left:2%;
	margin-right:2%;
	background:url(images/question_answered.png) no-repeat;
	background-size:cover;
	color:#FFF;
}
.button_answered_style
{
	height:150%;
	width:6.5%;
	border:0px;
	outline:none;
	background:url(images/question_answered.png) no-repeat;
	background-size:cover;
	color:#FFF;
}
.button_unanswered_style
{
   height:150%;
	width:6.5%;
	border:0px;
	outline:none;
	background:url(images/question_not_answered.png) no-repeat;
	background-size:cover;
	color:#FFF;
	
}

.button_marked_style
{
	 height:150%;
	width:6.5%;
	border:0px;
	outline:none;
	background:url(images/question_marked_selected.png) no-repeat;
	background-size:cover;
	color:#FFF;
}

.button_notvisited_style
{
 height:150%;
	width:6.5%;
	border:0px;
	outline:none;
     border-radius:3px;
	background-size:cover;
	color:#FFF;	
}

</style>

</head>

<body onload="adjust_body_size()" onresize="resize_body()">
<div id="loading_div" style="height:100%;width:100%;background-color:rgba(102,102,102,0.7);position:fixed;z-index:1200;text-align:center;"> <img src="images/ajax-loader.gif" style="margin-top:220px;"/></div>


<div id="dialog-confirm" style="z-index:500;"></div>
 <div id="virtual_result"  style=" width:450px; display:none;overflow:auto;text-align:left;padding:10px;margin-left:34%;border:1px solid black;"></div>
 			<div id="main_window_div">
            
 						<div id="Exam_Name_Header" align="center"> 
                        		Online Bank Test 
                        </div>
                        <div id="section_pannel">
                        	<div  id="disable_sections" style=" width:100%;height:50px; position:absolute;z-index:100;display:none;">
                            </div>
  						<fieldset>
                        
   								<legend> section </legend>
  								<div id="Exam_Section_Reasoning" class="Exam_Section"> 
                               			Reasoning 
                                </div>
                                                
						        <div id="Exam_Section_English" class="Exam_Section">
                               		    English
                                </div>
                                                
						        <div id="Exam_Section_Math" class="Exam_Section"> 
                               			Math 
                                </div>
											
                       		    <div id="Exam_Section_General" class="Exam_Section"> General Awareness </div>
					            <div id="Exam_Section_Computer" class="Exam_Section"> Computer </div>
  						</fieldset>
  						</div>
  						<div id="Exam_Time_Zone"> 
                        		
                                <div id="timer" style="top:35%; left:20%; position:absolute;font-size:1vw;	">
                                
                                </div>
                        </div>
  
  
					    <div id="Exam_Quetion_Show">
					    		
                                	<div id="Exam_Quetion_Number">
                                			
                                	</div>
 						
                        			<hr id="question_hr" color="#999999">
    
    								<div id="Exam_Quetion">
                                    		
                                			
                                	</div>
    
   						 			<div id="Exam_Option" style="margin-top:10px;">
                                
                                	</div>
							
                                	
                                  

						</div>
                        <div id="Exam_Buttons_pannale">
   
    										<input type="button"  value="Mark for Review and Next" style="height:80%; width:17%; margin:.5%; background-color:#283a6e; color:#FFF; cursor:pointer;" id="next_question_button"  />
   
									    	<input type="button"  value="Clear Response" style="height:80%;width:15%;background-color:#283a6e; color:#FFF;cursor:pointer;"  id="Clear_Response_button"/>
		
        							    	<input type="button"  value="Save and Next" style="float:right; height:80%; width:14%; margin:.5%;background-color:#283a6e; color:#FFF; cursor:pointer;"id="Save_next_button" />
      									<div id = 'back_button'  style="background-color:white;border:solid 1px gray;position:absolute; bottom:1px; left:0;text-align:center; display:none; width:98.4%; padding:8px"> <input type='button' value='Back' onclick='question_paper_back()'style='height:30px;width:80px; cursor:pointer;'/> </div>
										<div id = 'exam_restart_exit_div'  style="background-color:white;border:solid 1px gray;position:absolute; bottom:1px; left:0;text-align:center; display:none; width:98.4%; padding:8px"><a href="Front_end_Mainpage.php" > <input type='button' value='Restart exam' onclick="restart()" style='height:30px; cursor:pointer;padding:0px 3px; margin-right:40px;'/></a><input type='button' value='exit' id="exit_button" style='height:30px;width:80px; cursor:pointer;'/> </div>	
    					</div>
  
  						<div id="Quetion_Pallete">
                        	<div id="disable_buttons" style="height:80%;width:100%;position:absolute;z-index:100;display:none;"></div>
  
  									<div id="Quetion_Pallete_Top">
										
                                          <div id="Quetion_Pallete_Sectionname" style="font-weight:100;">
                                          
                                          </div>
										  
                                          <div style="font-weight:100; text-align:left;position:absolute;top:60%;">
                                          			Quetion_Pallete
                                           </div>  
								  	</div>
                                    
								  	<div id="Quetion_Pallete_Middle">
                                    </div>
					
                    			  	<div id="Quetion_Pallete_Bottom">
                                    
	  												<div style="font-weight:100; margin-left:1%;">
                                                    		Legend
                                                     </div>

			  										<div style="width:319px; height:13.5px;margin-left:3%; padding-top:2%;">
  								
                                							<input type="button" class="button_answered_style" /><span style="margin-left:7%;margin-right:9%;text-align:center">Answered </span>
								 
                                 							<input type="button" class="button_unanswered_style"  /><span style="margin-left:5%;">Not Answered</span>
  													</div>
                                                    
   													<div style="width:319px; height:13.5px;margin-left:3%; margin-top:4%;">
  
  															<input type="button" class="button_marked_style" /><span style="margin-left:7%;margin-right:13.5%;">Marked </span>
  				
                											<input type="button" class="button_notvisited_style"  /><span style="margin-left:5%;">Not Visited </span>
  													</div>
                                                    
  													<div id="profile_instruction_pannale" >
  						
                        									<div id="profile" title="view profile" style="height:16px; width:140px; background-color:#283a6e;margin-left:3%;margin-right:1%;margin-top:5%;text-align:center; color:#FFF;float:left;
           													font-size:14px;padding-bottom:3px; padding-top:3px;cursor:pointer;position:absolute;">
                                                            
                                                            		PROFILE 
                                                            
                                                            </div>

															<div id="instruction" title="view instructins" style="height:16px; width:140px; background-color:#283a6e;margin-left:155px;margin-right:.5%;margin-top:5%;text-align:center; color:#FFF; float:Left;font-size:14px;	padding-bottom:3px;padding-top:3px;cursor:pointer;position:absolute;"> 
                                                            		
                                                                    INSTRUCTION 
                                                             
                                                             </div>
  
  													</div>
  
  													<div id="questionpaper_submit_pannale">
  															 
                                                             <div id="question_paper" title="entire question paper" style="height:16px; width:140px; background-color:#283a6e;margin-left:3%;margin-top:41px;text-align:center; color:#FFF;float:left;
           													 font-size:14px;padding-bottom:3px; padding-top:3px;cursor:pointer;position:absolute;"> 
                                                             
                                                             		QUESTION PAPER 
                                                             
                                                              </div>

															  <div id="submit" onclick="submit_function()" title="click to submit" style="height:16px; width:140px; background-color:#283a6e;margin-left:155px;margin-right:1%;margin-top:41px;text-align:center; color:#FFF; float:left;font-size:14px; padding-bottom:3px;padding-top:3px;cursor:pointer;position:absolute;"> 
                                                              		
                                                                     SUBMIT 
                                                                    
                                                              </div>
  
  													</div>
  
  										</div>
 
 							 </div>
 
			 	</div>
 

				<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                

<script>
var response1;  var i=1,j=59,k=59; var current_id=0; var section_id=0; var IsSelected=false;
var marked_answered = "Marked_answered"; var marked_notanswered = "marked_notanswered"; var save_answered = "save_answered"; 
var save_notanswered = "save_notanswered"; var timer_timeout; restart =false;


var language = '<?php echo $_SESSION['language']; ?>';

function ajax_call(current_q,catid)
{
	
	$.ajax({
			  	type :'POST',
				url :'Back_end_seen_question.php',
				data: {"seen_question":current_q,"catid":catid},
				dataType: 'json',
				async:true,
				
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



$(document).ready(function(e) 
{
	$(window).load(function()
	{
	
		console.log("ajax called");
		$.ajax({
			  	type :'POST',
				url :'Back_end_next_question.php',
				data: "",
				dataType: 'json',
				async:true,
				success:function(response)
				{
			 		timer_timeout=setInterval("Timer()",1000);
					
						$('#loading_div').css("display","none");
						var y,x,i;
						for(y=1;y<=response[section_id].length;y++)
						{	
							var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+y+"' class='Quetion_pallete_margin' onclick='set_questionby_id(this)'> <br>";
							
							var button = "<input type='button'  id='opt"+y+"' value='"+y+"' class='Quetion_pallete_margin' onclick='set_questionby_id(this)'>";
							 if(y%4==0)
							{
								$(buttonwith_nextline).appendTo('#Quetion_Pallete_Middle');	
							}
							else
							{
								$(button).appendTo('#Quetion_Pallete_Middle');
							}
						}
												
												
						$('#opt'+(current_id+1)).addClass('Un_Answered_question');
						response1 = response;
						
						if(response1[section_id][current_id].status== "")
						{
							ajax_call(response1[section_id][current_id].id,response1[section_id][current_id].catid);
						}
						if(response1[section_id][current_id].q_img == "")
						{			
   							$('#Exam_Quetion').html(" "+response1[section_id][current_id].question);
						}
						else
						{
							$('#Exam_Quetion').html(""+response1[section_id][current_id].question+"<br><img src='"+response1[section_id][current_id].q_img+"'>");
								
						}
						$('#Exam_Quetion_Number').html("Queston No."+(current_id+1));
						$('#Exam_Option').empty();
						response1[section_id][current_id].status = save_notanswered;
						
						
							
						for(x=0;x<=response1[section_id][current_id].option.length-1;x++)
						{
							if(response1[section_id][current_id].option[x].optimg == "")
							{
								var radio = "<input type='radio' style='height:20px; width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
								"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
							
								$(radio).appendTo('#Exam_Option');			
							}
							else
							{
								var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio'  style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
								"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
							
								$(radio).appendTo('#Exam_Option');	
							}
						}
					
				},
						
				error:function(jqXHR,textStatus,errorThrown)
				{
					console.log("Error:"+errorThrown);
				}
			});
			
		});
	});
 





					//********************** GET QUESTION BY NEXT QUESTION BUTTON WITH MARK*******************************


$(document).ready(function(e) 
{

		$('#next_question_button').click(function()
		{
			
			var qcount=0;
				for(i=0;i<section_id;i++)
				{
					var qcount = qcount+response1[i].length;
				}
				
				var $selected = $('input[name="CorrectOption"]:checked');
				
				if($selected.length == 0) 
				{
   					response1[section_id][current_id].status = marked_notanswered;
				} 
				else 
				{
				    response1[section_id][current_id].status =marked_answered;	
   					var whichOne = $selected.val();
					console.log("value=" +whichOne);
					response1[section_id][current_id].answer = whichOne;
   					IsSelected=true;
				}
						
				var i; 
		 		current_id = current_id+1;
				
				console.log(current_id);
				$('#Exam_Option').empty();	
				$('#Exam_Quetion').empty();
				
				if(IsSelected)
				{
					$('#opt'+current_id).removeClass();
					$('#opt'+current_id).addClass('markedanswered_question');
					IsSelected=false;
				}
				else
				{
		   			$('#opt'+current_id).removeClass();
					$('#opt'+current_id).addClass('markednotanswered_question');
				}
				if(current_id>=response1[section_id].length)
				{
					current_id=0; 
				}
				if(response1[section_id][current_id].status == "" || response1[section_id][current_id].status == save_notanswered)
				{
					$('#opt'+(current_id+1)).removeClass();
					$('#opt'+(current_id+1)).addClass('Un_Answered_question');
				}
				if(response1[section_id][current_id].status== "")
					{
						ajax_call(response1[section_id][current_id].id,response1[section_id][current_id].catid);
					}
				
				
				$('#Exam_Quetion_Number').html("Queston No."+(qcount+current_id+1));
				if(response1[section_id][current_id].q_img == "")
				{			
   					$('#Exam_Quetion').html(" "+response1[section_id][current_id].question);
				}
				else
				{
					$('#Exam_Quetion').html(""+response1[section_id][current_id].question+"<br><img src='"+response1[section_id][current_id].q_img+"'>");
								
				}
				
				for(x=0;x<=response1[section_id][current_id].option.length-1;x++)
				{
						if(response1[section_id][current_id].answer == x)
						{
							if(response1[section_id][current_id].option[x].optimg == "")
							{
								var radio = "<input type='radio' style='height:20px; width:20px;' checked name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
								"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
							
								$(radio).appendTo('#Exam_Option');			
							}
							else
							{
								var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio'  checked style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
								"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
							
								$(radio).appendTo('#Exam_Option');	
							}
						}
						else
						{
							if(response1[section_id][current_id].option[x].optimg == "")
							{
								var radio = "<input type='radio' style='height:20px; width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
								"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
							
								$(radio).appendTo('#Exam_Option');			
							}
							else
							{
								var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio'  style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
								"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
							
								$(radio).appendTo('#Exam_Option');	
							}
						}	
				}
		
		});
    
   
});





								//********************** GET QUESTION BY DIRECT QUESTION NUMBER*******************************

function set_questionby_id(button)
{
		var i,y,x;
		
		var qcount=0;
				for(i=0;i<section_id;i++)
				{
					var qcount = qcount+response1[i].length;
				}
				
		var btn_value =button.value-1;
		current_id = btn_value - qcount;
		
					if(response1[section_id][current_id].status== "")
					{
						ajax_call(response1[section_id][current_id].id,response1[section_id][current_id].catid);
					}
		 
				$('#Exam_Option').empty();
				$('#question_hr').css("display","block");
				$('#back_button').css("display","none");
				$('#Exam_Quetion').css("display", "block");
				$('#Exam_Quetion_Number').css("display", "block");	
		$('#Exam_Quetion').empty();
		
		if(response1[section_id][current_id].status == "")
		{
			response1[section_id][current_id].status = save_notanswered;
			$('#opt'+(current_id+1)).addClass('Un_Answered_question');
		}
		
		$('#Exam_Quetion_Number').html("Queston No."+(qcount+current_id+1));			
   		if(response1[section_id][current_id].q_img == "")
		{			
   			$('#Exam_Quetion').html(" "+response1[section_id][current_id].question);
		}
		else
		{
			$('#Exam_Quetion').html(""+response1[section_id][current_id].question+"<br><img src='"+response1[section_id][current_id].q_img+"'>");
								
		}
				
		for(x=0;x<=response1[section_id][current_id].option.length-1;x++)
		{

				if(response1[section_id][current_id].answer == x)
				{
						if(response1[section_id][current_id].option[x].optimg == "")
							{
								var radio = "<input type='radio' style='height:20px; width:20px;' checked name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
								"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
							
								$(radio).appendTo('#Exam_Option');			
							}
							else
							{
								var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio'  checked style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
								"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
							
								$(radio).appendTo('#Exam_Option');	
							}
				}
				else
				{
						if(response1[section_id][current_id].option[x].optimg == "")
							{
								var radio = "<input type='radio' style='height:20px; width:20px;'  name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
								"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
							
								$(radio).appendTo('#Exam_Option');			
							}
							else
							{
								var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio'  style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
								"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
							
								$(radio).appendTo('#Exam_Option');	
							}
				}			
		}
					
			
				  
}





								//********************** CLICK BUTTON FOR SAVE AND NEXT QUESTION *******************************
								
		
$(document).ready(function(e)
{
			
			$('#Save_next_button').click(function(e)
			{
				var qcount=0;
				for(i=0;i<section_id;i++)
				{
					var qcount = qcount+response1[i].length;
				}
						var $selected = $('input[name="CorrectOption"]:checked');
						
						if($selected.length == 0) 
						{
   								response1[section_id][current_id].status = save_notanswered;			
								
						} 
						else 
						{
								response1[section_id][current_id].status = save_answered;
   								var whichOne = $selected.val();
								response1[section_id][current_id].answer = whichOne;
   								IsSelected=true;
						}
			
						
		  				current_id = current_id+1;
						$('#Exam_Option').empty();	
						$('#Exam_Quetion').empty();
		
						if(IsSelected)
						{
							$('#opt'+current_id).removeClass();
							$('#opt'+current_id).addClass('Answered_question');
							IsSelected=false;
						}
						else
						{
		   					$('#opt'+current_id).removeClass();
							$('#opt'+current_id).addClass('Un_Answered_question');
						}
			
						if(current_id >= response1[section_id].length)
						{
							current_id=0; 
						}
			
						if(response1[section_id][current_id].status== "")
						{
							ajax_call(response1[section_id][current_id].id,response1[section_id][current_id].catid);
						}
						
						if(response1[section_id][current_id].status == "" || response1[section_id][current_id].status == save_notanswered)
						{
							$('#opt'+(current_id+1)).removeClass();
							$('#opt'+(current_id+1)).addClass('Un_Answered_question');
						}
					
						if(response1[section_id][current_id].status == "")
						{
							response1[section_id][current_id].status = save_notanswered;
						}
	        	
						$('#Exam_Quetion_Number').html("Queston No."+(qcount+current_id+1));			
			   			if(response1[section_id][current_id].q_img == "")
						{			
   							$('#Exam_Quetion').html(" "+response1[section_id][current_id].question);
						}
						else
						{
							$('#Exam_Quetion').html(""+response1[section_id][current_id].question+"<br><img src='"+response1[section_id][current_id].q_img+"'>");
								
						}
						
							
						for(x=0;x<=response1[section_id][current_id].option.length-1;x++)
						{
							if(response1[section_id][current_id].answer == x)
							{
								if(response1[section_id][current_id].option[x].optimg == "")
								{
									var radio = "<input type='radio' style='height:20px; width:20px;' checked name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
									"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
								
									$(radio).appendTo('#Exam_Option');			
								}
								else
								{
									var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio'  checked style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
									"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
								
									$(radio).appendTo('#Exam_Option');	
								}
							}
							else
							{
								if(response1[section_id][current_id].option[x].optimg == "")
								{
									var radio = "<input type='radio' style='height:20px; width:20px;'  name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
									"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
								
									$(radio).appendTo('#Exam_Option');			
								}
								else
								{
									var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio' style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
									"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
								
									$(radio).appendTo('#Exam_Option');	
								}
							}
						}
				
		
		
				
			});
            
});




									//********************** CLICK BUTTON FOR CLEAR RESPONSE*******************************

$(document).ready(function(e)
{
			$('#Clear_Response_button').click(function(e)
			{
					response1[section_id][current_id].answer = -1;
					
					$('#Exam_Option').empty();	
					$('#opt'+(current_id+1)).removeClass();
					$('#opt'+(current_id+1)).addClass('Un_Answered_question');
					for(x=0;x<=response1[section_id][current_id].option.length-1;x++)
					{
						if(response1[section_id][current_id].option[x].optimg == "")
							{
								var radio = "<input type='radio' style='height:20px; width:20px;'  name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
								"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
							
								$(radio).appendTo('#Exam_Option');			
							}
							else
							{
								var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio'   style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
								"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
							
								$(radio).appendTo('#Exam_Option');	
							}			
					}
		
			});
    
});






										//********************** GET QUESTION BY CLICK REASONING SECTION*******************************

$(document).ready(function(e) 
{
	
			$('#Exam_Section_Reasoning').click(function(e)
			{
					var y,x,i;
					section_id = 0;
					current_id=0;
					if(response1[section_id][current_id].status== "")
					{
						ajax_call(response1[section_id][current_id].id,response1[section_id][current_id].catid);
					}
					$('#Exam_Section_English').removeClass('Exam_Section_after_click');
					$('#Exam_Section_Math').removeClass('Exam_Section_after_click');
					$('#Exam_Section_General').removeClass('Exam_Section_after_click');
					$('#Exam_Section_Computer').removeClass('Exam_Section_after_click');
					$('#Exam_Section_Reasoning').addClass('Exam_Section_after_click');
					$('#Exam_Option').empty();
					$('#question_hr').css("display","block");
					$('#back_button').css("display","none");
					$('#Exam_Quetion').css("display", "block");
					$('#Exam_Quetion_Number').css("display", "block");
					$('#Exam_Quetion').empty();
					$('#Quetion_Pallete_Middle').empty();
					$('#Quetion_Pallete_Sectionname').empty();
					document.getElementById("Quetion_Pallete_Sectionname").innerHTML="you are viewing <b>REASONING</b> section now";
					
					for(y=1;y<=response1[section_id].length;y++)
					{	
							if(response1[section_id][y-1].status == marked_answered)
							{
									var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+y+"' class='markedanswered_question' onclick='set_questionby_id(this)'> <br>";																 	   	   
  									
									var button = "<input type='button'  id='opt"+y+"' value='"+y+"' class='markedanswered_question' onclick='set_questionby_id(this)'>";
							}
							else if(response1[section_id][y-1].status == marked_notanswered)
							{
									var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+y+"' class='markednotanswered_question'onclick='set_questionby_id(this)'> <br>"; 						 	   	   
  													 
									var button = "<input type='button'  id='opt"+y+"' value='"+y+"' class='markednotanswered_question' onclick='set_questionby_id(this)'>";
							}
							else if(response1[section_id][y-1].status == save_answered)
							{
									var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+y+"' class='Answered_question'onclick='set_questionby_id(this)'> <br>"; 						 	   	   
  									
									var button = "<input type='button'  id='opt"+y+"' value='"+y+"' class='Answered_question' onclick='set_questionby_id(this)'>";	
							}
							else if(response1[section_id][y-1].status == save_notanswered)
							{
									 var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+y+"' class='Un_Answered_question'onclick='set_questionby_id(this)'> <br>"; 						 	   	   
  													 
									 var button = "<input type='button'  id='opt"+y+"' value='"+y+"' class='Un_Answered_question' onclick='set_questionby_id(this)'>";
							}
							else
							{
									var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+y+"' class='Quetion_pallete_margin' onclick='set_questionby_id(this)'> <br>";															  																	
  									var button = "<input type='button'  id='opt"+y+"' value='"+y+"' class='Quetion_pallete_margin' onclick='set_questionby_id(this)'>";
							}
							if(y%4==0)
							{
									$(buttonwith_nextline).appendTo('#Quetion_Pallete_Middle');	
							}
							else
							{
									$(button).appendTo('#Quetion_Pallete_Middle');
							}
					}
						
					if(response1[section_id][current_id].status == "" || response1[section_id][current_id].status == save_notanswered)
					{
							$('#opt'+(current_id+1)).addClass('Un_Answered_question');
					}
					$('#Exam_Quetion_Number').html("Queston No."+(current_id+1));			
   					if(response1[section_id][current_id].q_img == "")
					{			
   						$('#Exam_Quetion').html(" "+response1[section_id][current_id].question);
					}
					else
					{
						$('#Exam_Quetion').html(""+response1[section_id][current_id].question+"<br><img src='"+response1[section_id][current_id].q_img+"'>");
								
					}
				
					for(x=0;x<=response1[section_id][current_id].option.length-1;x++)
					{
							if(response1[section_id][current_id].answer == x)
							{
									if(response1[section_id][current_id].option[x].optimg == "")
									{
										var radio = "<input type='radio' style='height:20px; width:20px;' checked name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
									
										$(radio).appendTo('#Exam_Option');			
									}
									else
									{
										var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio'  checked style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
									
										$(radio).appendTo('#Exam_Option');	
									}
							}
							else
							{
									if(response1[section_id][current_id].option[x].optimg == "")
									{
										var radio = "<input type='radio' style='height:20px; width:20px;'  name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
									
										$(radio).appendTo('#Exam_Option');			
									}
									else
									{
										var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio'  style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
									
										$(radio).appendTo('#Exam_Option');	
									}

							}		
					}
					
		
		
			});
    
	
	
});





								//********************** GET QUESTION BY CLICK ENGLISH SECTION*******************************

$(document).ready(function(e) 
{
	
			$('#Exam_Section_English').click(function(e)
			{
					var y,x,i;
					section_id = 1;
					current_id=0;
					
					var qcount = response1[0].length;
					$('#Exam_Section_Math').removeClass('Exam_Section_after_click');
					$('#Exam_Section_General').removeClass('Exam_Section_after_click');
					$('#Exam_Section_Computer').removeClass('Exam_Section_after_click');
					$('#Exam_Section_Reasoning').removeClass('Exam_Section_after_click');
					$('#Exam_Section_English').addClass('Exam_Section_after_click');
					$('#Exam_Option').empty();
					$('#question_hr').css("display","block");
					$('#back_button').css("display","none");
					$('#Exam_Quetion').css("display", "block");
					$('#Exam_Quetion_Number').css("display", "block");	
					$('#Exam_Quetion').empty();
					$('#Exam_Quetion_Number').empty();
					$('#Quetion_Pallete_Middle').empty();
					$('#Quetion_Pallete_Sectionname').empty();
					document.getElementById("Quetion_Pallete_Sectionname").innerHTML="you are viewing <b>ENGLISH</b> section now";
				if(response1[section_id].length>1)
				{	
					if(response1[section_id][current_id].status== "")
					{
						ajax_call(response1[section_id][current_id].id,response1[section_id][current_id].catid);
					}
					for(y=1;y<=response1[section_id].length;y++)
			        {	
							if(response1[section_id][y-1].status == marked_answered)
							{
									var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(response1[0].length+y)+"' class='markedanswered_question' onclick='set_questionby_id(this)'> <br>";																 	   	   
  									
									var button = "<input type='button'  id='opt"+y+"' value='"+(response1[0].length+y)+"' class='markedanswered_question' onclick='set_questionby_id(this)'>";
							}
							else if(response1[section_id][y-1].status == marked_notanswered)
							{
									 var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(response1[0].length+y)+"' class='markednotanswered_question'onclick='set_questionby_id(this)'> <br>"; 						 	   	   
  									
									 var button = "<input type='button'  id='opt"+y+"' value='"+(response1[0].length+y)+"' class='markednotanswered_question' onclick='set_questionby_id(this)'>";
							}
							else if(response1[section_id][y-1].status == save_answered)
							{
									 var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(response1[0].length+y)+"' class='Answered_question'onclick='set_questionby_id(this)'> <br>"; 						 	   	   
  											
									 var button = "<input type='button'  id='opt"+y+"' value='"+(response1[0].length+y)+"' class='Answered_question' onclick='set_questionby_id(this)'>";	
							}
							else if(response1[section_id][y-1].status == save_notanswered)
							{
									 var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(response1[0].length+y)+"' class='Un_Answered_question'onclick='set_questionby_id(this)'> <br>"; 						 	   	   
  									
									 var button = "<input type='button'  id='opt"+y+"' value='"+(response1[0].length+y)+"' class='Un_Answered_question' onclick='set_questionby_id(this)'>";
							}
							else
							{
									 var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(response1[0].length+y)+"'  class='Quetion_pallete_margin' onclick='set_questionby_id(this)'> <br>";															  																	
  									 var button = "<input type='button'  id='opt"+y+"' value='"+(response1[0].length+y)+"' class='Quetion_pallete_margin' onclick='set_questionby_id(this)'>";
							}
							if(y%4==0)
							{
									$(buttonwith_nextline).appendTo('#Quetion_Pallete_Middle');			
							}
							else
							{
									$(button).appendTo('#Quetion_Pallete_Middle');
							}
											
												
					}
	 				
		   			$('#opt'+(current_id+1)).addClass('Un_Answered_question');
	        		$('#Exam_Quetion_Number').html("Queston No."+(qcount+current_id+1));			
   					if(response1[section_id][current_id].q_img == "")
					{			
   						$('#Exam_Quetion').html(" "+response1[section_id][current_id].question);
					}
					else
					{
						$('#Exam_Quetion').html(""+response1[section_id][current_id].question+"<br><img src='"+response1[section_id][current_id].q_img+"'>");
								
					}
				
					for(x=0;x<=response1[section_id][current_id].option.length-1;x++)
					{
						if(response1[section_id][current_id].answer == x)
							{
									if(response1[section_id][current_id].option[x].optimg == "")
									{
										var radio = "<input type='radio' style='height:20px; width:20px;' checked name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
									
										$(radio).appendTo('#Exam_Option');			
									}
									else
									{
										var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio'  checked style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
									
										$(radio).appendTo('#Exam_Option');	
									}
							}
							else
							{
									if(response1[section_id][current_id].option[x].optimg == "")
									{
										var radio = "<input type='radio' style='height:20px; width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
									
										$(radio).appendTo('#Exam_Option');			
									}
									else
									{
										var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio'  style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
									
										$(radio).appendTo('#Exam_Option');	
									}

							}				
					}
					
		
				}
		
			});
    
	
	
});






										//********************** GET QUESTION BY CLICK MATH SECTION*******************************

$(document).ready(function(e) 
{
	
			$('#Exam_Section_Math').click(function(e)
			{
					var y,x,i;
					section_id = 2;
					current_id=0;
					if(response1[section_id][current_id].status== "")
					{
						ajax_call(response1[section_id][current_id].id,response1[section_id][current_id].catid);
					}
					var qcount = response1[0].length+response1[1].length;
					$('#Exam_Section_General').removeClass('Exam_Section_after_click');
					$('#Exam_Section_Computer').removeClass('Exam_Section_after_click');
					$('#Exam_Section_Reasoning').removeClass('Exam_Section_after_click');
					$('#Exam_Section_English').removeClass('Exam_Section_after_click');
					$('#Exam_Section_Math').addClass('Exam_Section_after_click');
					$('#Exam_Option').empty();
					$('#question_hr').css("display","block");
					$('#back_button').css("display","none");
					$('#Exam_Quetion').css("display", "block");
					$('#Exam_Quetion_Number').css("display", "block");
					$('#Exam_Quetion').empty();
					$('#Quetion_Pallete_Middle').empty();
					$('#Quetion_Pallete_Sectionname').empty();
					document.getElementById("Quetion_Pallete_Sectionname").innerHTML="you are viewing <b>MATH</b> section now";
					
					for(y=1;y<=response1[section_id].length;y++)
					{	
							if(response1[section_id][y-1].status == marked_answered)
							{
									var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='markedanswered_question' onclick='set_questionby_id(this)'> <br>";																 	   	   
  													 
									var button = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='markedanswered_question' onclick='set_questionby_id(this)'>";
							}
							else if(response1[section_id][y-1].status == marked_notanswered)
							{
									 var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' 	class='markednotanswered_question'onclick='set_questionby_id(this)'> <br>"; 						 	   	   
  									
									 var button = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='markednotanswered_question' onclick='set_questionby_id(this)'>";
							}
							else if(response1[section_id][y-1].status == save_answered)
							{
									 var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' 	class='Answered_question'onclick='set_questionby_id(this)'> <br>"; 						 	   	   
  													
									 var button = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='Answered_question' onclick='set_questionby_id(this)'>";	
							}
							else if(response1[section_id][y-1].status == save_notanswered)
							{
									 var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' 	class='Un_Answered_question'onclick='set_questionby_id(this)'> <br>"; 						 	   	   
  									 var button = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='Un_Answered_question' 	onclick='set_questionby_id(this)'>";
							}
							else
							{
									 var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='Quetion_pallete_margin' onclick='set_questionby_id(this)'> <br>";															  																	
  									 var button = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='Quetion_pallete_margin' onclick='set_questionby_id(this)'>";
							}
							if(y%4==0)
							{
									 $(buttonwith_nextline).appendTo('#Quetion_Pallete_Middle');
							}
							else
							{
							    	 $(button).appendTo('#Quetion_Pallete_Middle');
							}
											
		
													
					}
				    
					
					
					$('#opt'+(current_id+1)).addClass('Un_Answered_question');
	        	    $('#Exam_Quetion_Number').html("Queston No."+(qcount+current_id+1));			
   				    if(response1[section_id][current_id].q_img == "")
					{			
   						$('#Exam_Quetion').html(" "+response1[section_id][current_id].question);
					}
					else
					{
						$('#Exam_Quetion').html(""+response1[section_id][current_id].question+"<br><img src='"+response1[section_id][current_id].q_img+"'>");
								
					}
				
				    for(x=0;x<=response1[section_id][current_id].option.length-1;x++)
				   	{
						if(response1[section_id][current_id].answer == x)
							{
									if(response1[section_id][current_id].option[x].optimg == "")
									{
										var radio = "<input type='radio' style='height:20px; width:20px;' checked name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
									
										$(radio).appendTo('#Exam_Option');			
									}
									else
									{
										var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio'  checked style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
									
										$(radio).appendTo('#Exam_Option');	
									}
							}
							else
							{
									if(response1[section_id][current_id].option[x].optimg == "")
									{
										var radio = "<input type='radio' style='height:20px; width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
									
										$(radio).appendTo('#Exam_Option');			
									}
									else
									{
										var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio' style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
									
										$(radio).appendTo('#Exam_Option');	
									}

							}				
					}
					
		
		
		
			});
    
	
	
});




									//********************** GET QUESTION BY CLICK GK SECTION*******************************

$(document).ready(function(e) 
{
	
			$('#Exam_Section_General').click(function(e)
			{
					var y,x,i;
					section_id =3;
					current_id=0;
					if(response1[section_id][current_id].status== "")
					{
						ajax_call(response1[section_id][current_id].id,response1[section_id][current_id].catid);
					}
					var qcount=response1[0].length+response1[1].length+response1[2].length;
					
					$('#Exam_Section_Computer').removeClass('Exam_Section_after_click');
					$('#Exam_Section_Reasoning').removeClass('Exam_Section_after_click');
					$('#Exam_Section_English').removeClass('Exam_Section_after_click');
					$('#Exam_Section_Math').removeClass('Exam_Section_after_click');
					$('#Exam_Section_General').addClass('Exam_Section_after_click');
					$('#Exam_Option').empty();
					$('#question_hr').css("display","block");
					$('#back_button').css("display","none");
					$('#Exam_Quetion').css("display", "block");
					$('#Exam_Quetion_Number').css("display", "block");	
					$('#Exam_Quetion').empty();
					$('#Quetion_Pallete_Middle').empty();
					$('#Quetion_Pallete_Sectionname').empty();
					document.getElementById("Quetion_Pallete_Sectionname").innerHTML="you are viewing <b>GK</b> section now";
			
					for(y=1;y<=response1[section_id].length;y++)
			        {	
					      	if(response1[section_id][y-1].status == marked_answered)
							{
								var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='markedanswered_question' onclick='set_questionby_id(this)'> <br>";																 	   	   
  							 	var button = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='markedanswered_question' onclick='set_questionby_id(this)'>";
							}
							else if(response1[section_id][y-1].status == marked_notanswered)
							{
								 var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='markednotanswered_question'onclick='set_questionby_id(this)'> <br>"; 						 	   	   
  													 
								 var button = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='markednotanswered_question' onclick='set_questionby_id(this)'>";
							}
							else if(response1[section_id][y-1].status == save_answered)
							{
								 var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' 	class='Answered_question'onclick='set_questionby_id(this)'> <br>"; 						 	   	   
  													
								 var button = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='Answered_question' onclick='set_questionby_id(this)'>";	
							}
							else if(response1[section_id][y-1].status == save_notanswered)
							{
								 var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='Un_Answered_question'onclick='set_questionby_id(this)'> <br>"; 						 	   	   
  									
								 var button = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='Un_Answered_question' onclick='set_questionby_id(this)'>";
							}
							else
							{
								 var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='Quetion_pallete_margin' onclick='set_questionby_id(this)'> <br>";															  																	
  								 var button = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='Quetion_pallete_margin' onclick='set_questionby_id(this)'>";
							}
							if(y%4==0)
							{
								 $(buttonwith_nextline).appendTo('#Quetion_Pallete_Middle');																 																	 							
							}
							else
							{
								 $(button).appendTo('#Quetion_Pallete_Middle');
							}
					}
					
					
					
					$('#opt'+(current_id+1)).addClass('Un_Answered_question');
					$('#Exam_Quetion_Number').html("Queston No."+(qcount+current_id+1));			
   					if(response1[section_id][current_id].q_img == "")
					{			
   						$('#Exam_Quetion').html(" "+response1[section_id][current_id].question);
					}
					else
					{
						$('#Exam_Quetion').html(""+response1[section_id][current_id].question+"<br><img src='"+response1[section_id][current_id].q_img+"'>");
								
					}
				
					for(x=0;x<=response1[section_id][current_id].option.length-1;x++)
					{
							if(response1[section_id][current_id].answer == x)
							{
									if(response1[section_id][current_id].option[x].optimg == "")
									{
										var radio = "<input type='radio' style='height:20px; width:20px;' checked name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
									
										$(radio).appendTo('#Exam_Option');			
									}
									else
									{
										var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio'  checked style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
									
										$(radio).appendTo('#Exam_Option');	
									}
							}
							else
							{
									if(response1[section_id][current_id].option[x].optimg == "")
									{
										var radio = "<input type='radio' style='height:20px; width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
									
										$(radio).appendTo('#Exam_Option');			
									}
									else
									{
										var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio' style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
									
										$(radio).appendTo('#Exam_Option');	
									}

							}				
					}
					
		
		
		
		});	
    
	
	
});



									//********************** GET QUESTION BY CLICK COMPUTER SECTION*******************************

$(document).ready(function(e) 
{
	
			$('#Exam_Section_Computer').click(function(e)
			{
					var y,x,i;
					section_id = 4;
					current_id=0;
					if(response1[section_id][current_id].status== "")
					{
						ajax_call(response1[section_id][current_id].id,response1[section_id][current_id].catid);
					}
					var qcount=response1[0].length+response1[1].length+response1[2].length+response1[3].length;
					$('#Exam_Section_Reasoning').removeClass('Exam_Section_after_click');
					$('#Exam_Section_English').removeClass('Exam_Section_after_click');
					$('#Exam_Section_Math').removeClass('Exam_Section_after_click');
					$('#Exam_Section_General').removeClass('Exam_Section_after_click');
					$('#Exam_Section_Computer').addClass('Exam_Section_after_click');
					$('#Exam_Option').empty();
					$('#question_hr').css("display","block");
					$('#back_button').css("display","none");
					$('#Exam_Quetion').css("display", "block");
					$('#Exam_Quetion_Number').css("display", "block");
					$('#Exam_Quetion').empty();
					$('#Quetion_Pallete_Middle').empty();
					$('#Quetion_Pallete_Sectionname').empty();
					document.getElementById("Quetion_Pallete_Sectionname").innerHTML="you are viewing <b>COMPUTER</b> section now";
					for(y=1;y<=response1[section_id].length;y++)
			        {	
						    if(response1[section_id][y-1].status == marked_answered)
							{
							      	var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='markedanswered_question' 	onclick='set_questionby_id(this)'> <br>";																 	   	   
  									
									var button = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='markedanswered_question' onclick='set_questionby_id(this)'>";
							}
							else if(response1[section_id][y-1].status == marked_notanswered)
							{
									 var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='markednotanswered_question'onclick='set_questionby_id(this)'> <br>"; 						 	   	   
  								
									 var button = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='markednotanswered_question' onclick='set_questionby_id(this)'>";
							}
							else if(response1[section_id][y-1].status == save_answered)
							{
									 var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' 	class='Answered_question'onclick='set_questionby_id(this)'> <br>"; 						 	   	   
  												
									 var button = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='Answered_question' onclick='set_questionby_id(this)'>";	
							}
							else if(response1[section_id][y-1].status == save_notanswered)
							{
									 var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='Un_Answered_question'onclick='set_questionby_id(this)'> <br>"; 						 	   	   
  									
									 var button = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='Un_Answered_question' onclick='set_questionby_id(this)'>";
							}
							else
							{
					 				 var buttonwith_nextline = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='Quetion_pallete_margin' onclick='set_questionby_id(this)'> <br>";															  																	
  									 var button = "<input type='button'  id='opt"+y+"' value='"+(qcount+y)+"' class='Quetion_pallete_margin' onclick='set_questionby_id(this)'>";
							}
							if(y%4==0)
							{
									 $(buttonwith_nextline).appendTo('#Quetion_Pallete_Middle');																 							
							}
							else
							{
									 $(button).appendTo('#Quetion_Pallete_Middle');
							}
											
					}
			
					
			
					$('#opt'+(current_id+1)).addClass('Un_Answered_question');
					$('#Exam_Quetion_Number').html("Queston No."+(qcount+current_id+1));			
   					if(response1[section_id][current_id].q_img == "")
					{			
   						$('#Exam_Quetion').html(" "+response1[section_id][current_id].question);
					}
					else
					{
						$('#Exam_Quetion').html(""+response1[section_id][current_id].question+"<br><img src='"+response1[section_id][current_id].q_img+"'>");
								
					}
				
					for(x=0;x<=response1[section_id][current_id].option.length-1;x++)
					{
							if(response1[section_id][current_id].answer == x)
							{
									if(response1[section_id][current_id].option[x].optimg == "")
									{
										var radio = "<input type='radio' style='height:20px; width:20px;' checked name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
									
										$(radio).appendTo('#Exam_Option');			
									}
									else
									{
										var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio'  checked style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
									
										$(radio).appendTo('#Exam_Option');	
									}
							}
							else
							{
									if(response1[section_id][current_id].option[x].optimg == "")
									{
										var radio = "<input type='radio' style='height:20px; width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
									
										$(radio).appendTo('#Exam_Option');			
									}
									else
									{
										var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio'  style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
									
										$(radio).appendTo('#Exam_Option');	
									}

							}				
					}
					
		
		
		
			});
    
	
	
});










								//********************** GET QUESTION BY CLICK QUESTION PAPER BUTTON *******************************
$(document).ready(function(e) 
{
			$('#question_paper').click(function(e)
			{
				var question_count =1;
				var section;
			 	var y;
				var s="";
				$('#Exam_Option').empty();
				$('#question_hr').css("display","none");
				$('#back_button').css("display","block");
				$('#Exam_Quetion').css("display", "none");
				$('#Exam_Quetion_Number').css("display", "none");
			
				for(section=0;section<=4;section++)
				{
					
					
					for(y=0;y<response1[section].length;y++)
					{
				    	var span="<br><span>Q."+question_count+"&nbsp;&nbsp;&nbsp;&nbsp;"+response1[section][y].question+"</span><br><br><hr>"
				     	s+=span;
						question_count++;
					}
				}
				var div = "<div id='question_paper_div' style='overflow-y:auto;height:95%;width:100%;'>"+s+"</div>";
				$(div).appendTo('#Exam_Option');
				
				
			});
    
});

		
		
								//********************** GO BACK AFTER CLICK QUESTION PAPER BACK BUTTON*******************************
								
function question_paper_back()
{
 				$('#Exam_Option').empty();
				$('#question_hr').css("display","block");
				$('#Exam_Quetion').css("display", "block");
				$('#back_button').css("display","none");
				$('#Exam_Quetion_Number').css("display", "block");	
				for(x=0;x<=response1[section_id][current_id].option.length-1;x++)
					{
						if(response1[section_id][current_id].answer == x)
						{
									if(response1[section_id][current_id].option[x].optimg == "")
									{
										var radio = "<input type='radio' style='height:20px; width:20px;' checked name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
									
										$(radio).appendTo('#Exam_Option');			
									}
									else
									{
										var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio'  checked style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
									
										$(radio).appendTo('#Exam_Option');	
									}
						}
						else
						{
									if(response1[section_id][current_id].option[x].optimg == "")
									{
										var radio = "<input type='radio' style='height:20px; width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<label for='opt"+x+"'  class='leftSpace10'>"+response1[section_id][current_id].option[x].opttext+"</label><br>";
									
										$(radio).appendTo('#Exam_Option');			
									}
									else
									{
										var radio = "<div style='float:left;margin-left:15px;text-align:center;'><input type='radio'  style='height:20px;width:20px;' name='CorrectOption' id='opt"+x+"'   value="+x+" class='leftSpace10'>"+
										"<div style='margin-top:5px;'><img src='"+response1[section_id][current_id].option[x].optimg+"'/></div></div>";
									
										$(radio).appendTo('#Exam_Option');	
									}

						}				
					}
}
		
	
		
		
						//********************** GET INSTRUCTIONS BY CLICK INSTRUCTION BUTTON *******************************
						
	$(document).ready(function(e) {
		
		$('#instruction').click(function(){
			
				$('#Exam_Option').empty();
				$('#question_hr').css("display","none");
				$('#back_button').css("display","block");
				$('#Exam_Quetion').css("display", "none");
				$('#Exam_Quetion_Number').css("display", "none");
			
				if(language=='hi')
				{
					$('#Exam_Option').load('hindi_instruction.html');
				}
				else
				{
					$('#Exam_Option').load('english_instruction.html');
				}
		
			
			
			
		});
		
		
		
		
		
		
	
		
		
		//********************** GET PROFILE BY CLICK PROFILE BUTTON *******************************
		
		$('#profile').click(function(){
			$('#Exam_Option').empty();
				$('#question_hr').css("display","none");
				$('#back_button').css("display","block");
				$('#Exam_Quetion').css("display", "none");
				$('#Exam_Quetion_Number').css("display", "none");
				var profile_div = "<div style='height:100%;width:100%;text-align:center'>"+
										"<h3>condidate information</h3>"+
										"<br><div style='height:auto;width:auto;border:2px solid gray;'>"+
											"<pre>"+
											"Name     :vikas sharma<br>"+
											"Roll_no. : 3676237562873<br>"+
											"id       :v344df<br>"+
											"state    :Rajasthan<br>"+
											"contact  :978290808<br>"+
											"</pre>"+
										"</div>"+
									"</div>";
						$(profile_div).appendTo('#Exam_Option');			
		});
        
    });	
	
	
	
	///////// close window popup
	
$(window).bind('beforeunload',function(e){
	if(restart)
	{
		return "To restart exam click leave page !";
	}
		
		return "";
});
		
		
		//********************** GET RESULT DETAILS BY CLICK GET DETAIL BUTTON *******************************
						
	function get_detail()
		{
			var question_count =1;
				var section;
			 	var y;
				var s="";
			$('#Exam_Option').empty();
				$('#question_hr').css("display","none");
				
				$('#Exam_Quetion').css("display", "none");
				$('#Exam_Quetion_Number').css("display", "none");
				
			for(section=0;section<=4;section++)
				{
					
					
					for(y=0;y<response1[section].length;y++)
					{
						if(response1[section][y].status != "")
						{
							
							for(x=0;x<=response1[section][y].option.length-1;x++)
							{
								if(response1[section][y].answer != -1)
								{
									if(response1[section][y].answer == (response1[section][y].correctopt-1))
									{
										if((response1[section][y].correctopt-1) == x)
										{
											if(x==0)
											{
												if(question_count<10)
												{
													var Result_opt ="<br><span style='margin-right:80px;'>Q.0"+question_count+"</span><input type='button' value='"+(x+1)+"' class='Result_detail_button' style='background-color:green;'/>";
												}
												else
												{
													var Result_opt ="<br><span style='margin-right:80px;'>Q."+question_count+"</span><input type='button' value='"+(x+1)+"' class='Result_detail_button' style='background-color:green;'/>";
												}
												s+=Result_opt;
											}
											else if(x == response1[section][y].option.length-1 )
												{
													var Result_opt ="<input type='button' value='"+(x+1)+"' class='Result_detail_button' style='background-color:green;'/><input type='button' style='padding:8px; border-radius:5px;border:solid 1px #999999;margin-left:50px;' data-section='"+section+"' data-index='"+y+"' id='view_button"+question_count+"' class='view_button' value='solution'/>";
													s+=Result_opt;
												}
											else
											{
												var Result_opt ="<input type='button' value='"+(x+1)+"' class='Result_detail_button' style='background-color:green;'/>";
												s+=Result_opt;
											}
										}
										else
										{
											if(x==0)
											{
												if(question_count<10)
												{
													var Result_opt ="<br><span style='margin-right:80px;'>Q.0"+question_count+"</span><input type='button' value='"+(x+1)+"' class='Result_detail_button'/>";
												}
												else
												{
													var Result_opt ="<br><span style='margin-right:80px;'>Q."+question_count+"</span><input type='button' value='"+(x+1)+"' class='Result_detail_button'/>";
												}
												s+=Result_opt;
											}
											else if(x == response1[section][y].option.length-1 )
												{
													var Result_opt ="<input type='button' value='"+(x+1)+"' class='Result_detail_button' /><input type='button' style='padding:8px; border-radius:5px;border:solid 1px #999999;margin-left:50px;' value='solution'  data-section='"+section+"' data-index='"+y+"' id='view_button"+question_count+"' class='view_button'/>";
													s+=Result_opt;
												}
											else
											{
												var Result_opt ="<input type='button' value='"+(x+1)+"' class='Result_detail_button'/>";
												s+=Result_opt;
											}
										}
									}
									else
									{
										if((response1[section][y].correctopt-1) == x)
										{
											if(x==0)
												{
													if(question_count<10)
													{
														var Result_opt ="<br><span style='margin-right:80px;'>Q.0"+question_count+"</span><input type='button' value='"+(x+1)+"' class='Result_detail_button' style='background-color:green;'/>";
													}
													else
													{
														var Result_opt ="<br><span style='margin-right:80px;'>Q."+question_count+"</span><input type='button' value='"+(x+1)+"' class='Result_detail_button' style='background-color:green;'/>";
													}
													s+=Result_opt;
												}
												else if(x == response1[section][y].option.length-1 )
												{
													var Result_opt ="<input type='button' value='"+(x+1)+"' class='Result_detail_button' style='background-color:green;'/><input type='button' style='padding:8px; border-radius:5px;border:solid 1px #999999;margin-left:50px;' value='solution'  data-section='"+section+"' data-index='"+y+"' id='view_button"+question_count+"' class='view_button'/>";
													s+=Result_opt;
												}
												else
												{
													var Result_opt ="<input type='button' value='"+(x+1)+"' class='Result_detail_button' style='background-color:green;'/>";
													s+=Result_opt;
												}
										}
										else if(response1[section][y].answer == x)
										{
											if(x==0)
												{
													if(question_count<10)
													{
														var Result_opt ="<br><span style='margin-right:80px;'>Q.0"+question_count+"</span><input type='button' value='"+(x+1)+"' class='Result_detail_button' style='background-color:red;'/>";
													}
													else
													{
														var Result_opt ="<br><span style='margin-right:80px;'>Q."+question_count+"</span><input type='button' value='"+(x+1)+"' class='Result_detail_button' style='background-color:red;'/>";
													}
													s+=Result_opt;
												}
												else if(x == response1[section][y].option.length-1 )
												{
													var Result_opt ="<input type='button' value='"+(x+1)+"' class='Result_detail_button' style='background-color:red;'/><input type='button' style='padding:8px; border-radius:5px;border:solid 1px #999999;margin-left:50px;' value='solution'  data-section='"+section+"' data-index='"+y+"' id='view_button"+question_count+"' class='view_button'/>";
													s+=Result_opt;
												}
												else
												{
													var Result_opt ="<input type='button' value='"+(x+1)+"' class='Result_detail_button' style='background-color:red;'/>";
													s+=Result_opt;
												}
										}
										else
										{
											if(x==0)
												{
													if(question_count<10)
													{
														var Result_opt ="<br><span style='margin-right:80px;'>Q.0"+question_count+"</span><input type='button' value='"+(x+1)+"' class='Result_detail_button'/>";
													}
													else
													{
														var Result_opt ="<br><span style='margin-right:80px;'>Q."+question_count+"</span><input type='button' value='"+(x+1)+"' class='Result_detail_button'/>";
													}
													s+=Result_opt;
												}
												else if(x == response1[section][y].option.length-1 )
												{
													var Result_opt ="<input type='button' value='"+(x+1)+"' class='Result_detail_button'/><input type='button' style='padding:8px; border-radius:5px;border:solid 1px #999999;margin-left:50px;' value='solution'  data-section='"+section+"' data-index='"+y+"' id='view_button"+question_count+"' class='view_button'/>";
													s+=Result_opt;
												}
												else
												{
													var Result_opt ="<input type='button' value='"+(x+1)+"' class='Result_detail_button'/>";
													s+=Result_opt;
												}
										}
									}
									
							}
							else
							{
							if(x==0)
								{
									if(question_count<10)
									{
										var Result_opt ="<br><span style='margin-right:80px;'>Q.0"+question_count+"</span><input type='button' value='"+(x+1)+"' class='Result_detail_button'/>";
									}
									else
									{
										var Result_opt ="<br><span style='margin-right:80px;'>Q."+question_count+"</span><input type='button' value='"+(x+1)+"' class='Result_detail_button'/>";
									}
									s+=Result_opt;
								}
								else if(x == response1[section][y].option.length-1 )
								{
									var Result_opt ="<input type='button' value='"+(x+1)+"' class='Result_detail_button'/><input type='button' style='padding:8px; border-radius:5px;border:solid 1px #999999;margin-left:50px;' value='solution'  data-section='"+section+"' data-index='"+y+"' id='view_button"+question_count+"' class='view_button'/>";
									s+=Result_opt;
								}
								else
								{
									var Result_opt ="<input type='button' value='"+(x+1)+"' class='Result_detail_button'/>";
									s+=Result_opt;
								}
							}
						}
						}
						question_count++;
					}
				}
				var div = "<div id='Result_detail_div' style='overflow-y:auto;height:93.3%;text-align:center;border:1px solid black;'><div style='border:1px solid black;'><h3>Exam Details</h3></div><br>"+s+"</div>";
				$(div).appendTo('#Exam_Option');
					
		}		
		
		
	
	
	
	
		//********************** GET answer with solution after submit BUTTON ******************************
		
	$(document).ready(function(e) {
		
		$(document).on('click','.view_button',function(){
			var id = $(this).attr("id");
			var section = $(this).data("section");
			var index = $(this).data("index");
			var correctopt = response1[section][index].correctopt-1;
			if(response1[section][index].q_img == "" && response1[section][index].option[correctopt].optimg == "")
			{
				var div = "<div style=' width:100%;height:100% ;'>"+
								"Question :"+response1[section][index].question+"<br><br>"+
								"Answer :"+response1[section][index].option[correctopt].opttext+"<br><br>"+
								"Solution :"+response1[section][index].solution+"<br>"+
							"</div>";
			}
			if(response1[section][index].q_img != "" && response1[section][index].option[correctopt].optimg == "")
			{
				var div = "<div style=' width:100%;height:100% ;'>"+
								"Question :"+response1[section][index].question+"<br><img src='"+response1[section][index].q_img+"' style='margin-left:30px;'><br>"+
								"Answer :"+response1[section][index].option[correctopt].opttext+"<br><br>"+
								"Solution :"+response1[section][index].solution+"<br>"+
							"</div>";
			}
			if(response1[section][index].q_img != "" && response1[section][index].option[correctopt].optimg != "")
			{
				var div = "<div style=' width:100%;height:100% ;'>"+
								"Question :"+response1[section][index].question+"<br><img src='"+response1[section][index].q_img+"' style='margin-left:30px;'><br>"+
								"Answer :"+response1[section][index].option[correctopt].opttext+"<img src='"+response1[section][index].option[correctopt].optimg+"' style='margin-left:10px;'><br><br>"+
								"Solution :"+response1[section][index].solution+"<br>"+
							"</div>";
			}
			
				$('#virtual_result').empty();		
			   $(div).appendTo('#virtual_result');
			   
			   $('#virtual_result').insertAfter('#'+id);
			   $('#virtual_result').css("display","block");
		});
        
    });	
	
	
	

		
	//********************** confirmation popup when window close ******************************
	
	$(document).ready(function(e) {
        $(document).on('click','#exit_button',function(){
			restart = false;
   			 var txt;
			
    		var r = confirm("Are you sure to exit ");
    		if (r == true)
			{
					window.close();			
			} 
			else 
			{
        		
    		}
    

		});
    });
	
			
			
			//********************** function for adjust body size *******************************
		
function adjust_body_size()
{ 
     
    resize_body();
  	
	document.getElementById("Quetion_Pallete_Sectionname").innerHTML="you are viewing <b>REASONING</b> section now";
	
}

					
		
		
			//********************** function for resize body *******************************
						
function resize_body()
{
	var W = window.innerWidth;
	var H = window.innerHeight;
	var body = window.document.body;
	body.style.height=H+"px";
	body.style.width=W+"px";
	
}

			
			
			//********************** function for timer () *******************************

   function Timer()
{
	
	
	k=k-1;
	if(k<0)
	{
		j=j-1;
		k=59;
	}
	if(j<0)
	{
		i=i-1;
		j=59;
	}
	if(j<16 && i==0)
	{
		$('#timer').css("color","red");
	}
	
	if(j>9 && k<10)
	{
		document.getElementById("timer").innerHTML="Time Left :0"+i+":"+j+":0"+k;
	}
	if(j<10 && k>9)
	{
		document.getElementById("timer").innerHTML="Time Left :0"+i+":0"+j+":"+k;
	}
	if(j<10 && k<10)
	{
		document.getElementById("timer").innerHTML="Time Left :0"+i+":0"+j+":0"+k;
	}
	if(k>9 && k>9)
	{
		document.getElementById("timer").innerHTML="Time Left :0"+i+":"+j+":"+k;
	}
	
	
	if(i==0 && j==0 && k==0 )
	{
		submit_function();
	}
}



		// //////////// //////  submit function ..........

function submit_function(){
			restart = true;
			clearInterval(timer_timeout);
			$('#disable_buttons').css("display","block");
			$('#disable_sections').css("display","block");
			$('#exam_restart_exit_div').css("display","block");
			var count_marked_answered1=0 ; var count_marked_notanswered1=0; var count_save_answered1=0; var count_save_notanswered1=0 ;var notvisited1 = 0;
			var count_marked_answered2=0 ; var count_marked_notanswered2=0; var count_save_answered2=0; var count_save_notanswered2=0 ;var notvisited2 = 0;
			var count_marked_answered3=0 ; var count_marked_notanswered3=0; var count_save_answered3=0; var count_save_notanswered3=0 ;var notvisited3 = 0;
			var count_marked_answered4=0 ; var count_marked_notanswered4=0; var count_save_answered4=0; var count_save_notanswered4=0 ;var notvisited4 = 0;
			var count_marked_answered5=0 ; var count_marked_notanswered5=0; var count_save_answered5=0; var count_save_notanswered5=0 ;var notvisited5 = 0;
			var qcount1=0;var qcount2=0;var qcount3=0;var qcount4=0;var qcount5=0; var qtotal=0;
			var total_save_answered=0; var total_save_notanswered=0; var total_marked_answered=0;var total_notvisited=0;
			var marks1=0; var marks2=0; var marks3=0; var marks4=0; var marks5=0; var total_marks=0;
			for(y=0;y<response1[0].length;y++)
					{
						qcount1++;
				    	
						if(response1[0][y].status == marked_answered)
						{
							count_marked_answered1++;
							if((response1[0][y].correctopt-1) == response1[0][y].answer)
							{
								marks1 =marks1+1;
							}
							else
							{
								marks1 = marks1-(1/2);
							}
						}
						else if(response1[0][y].status == marked_notanswered)
						{
							count_save_notanswered1++;
						}
						else if(response1[0][y].status == save_answered)
						{
							count_save_answered1++;
							if((response1[0][y].correctopt-1) == response1[0][y].answer)
							{
								marks1 =marks1+1;
							}
							else
							{
								marks1 = marks1-(1/2);
							}
						}
						else if(response1[0][y].status == save_notanswered)
						{
							count_save_notanswered1++;
						}
						else 
						{
							notvisited1++;
						}
					}
					for(y=0;y<response1[1].length;y++)
					{
				    	qcount2++;
						if(response1[1][y].status == marked_answered)
						{
							count_marked_answered2++;
							if((response1[1][y].correctopt-1) == response1[1][y].answer)
							{
								marks2 =marks2+1;
							}
							else
							{
								marks2 = marks2-(1/2);
							}
						}
						else if(response1[1][y].status == marked_notanswered)
						{
							count_save_notanswered2++;
						}
						else if(response1[1][y].status == save_answered)
						{
							count_save_answered2++;
							if((response1[1][y].correctopt-1) == response1[1][y].answer)
							{
								marks2 =marks2+1;
							}
							else
							{
								marks2 = marks2-(1/2);
							}
						}
						else if(response1[1][y].status == save_notanswered)
						{
							count_save_notanswered2++;
						}
						else 
						{
							notvisited2++;
						}
					}
					
					for(y=0;y<response1[2].length;y++)
					{
				    	qcount3++;
						if(response1[2][y].status == marked_answered)
						{
							count_marked_answered3++;
							if((response1[2][y].correctopt-1) == response1[2][y].answer)
							{
								marks3 =marks3+1;
							}
							else
							{
								marks3 = marks3-(1/2);
							}
						}
						else if(response1[2][y].status == marked_notanswered)
						{
							count_save_notanswered3++;
						}
						else if(response1[2][y].status == save_answered)
						{
							count_save_answered3++;
							if((response1[2][y].correctopt-1) == response1[2][y].answer)
							{
								marks3 =marks3+1;
							}
							else
							{
								marks3 = marks3-(1/2);
							}
						}
						else if(response1[2][y].status == save_notanswered)
						{
							count_save_notanswered3++;
						}
						else 
						{
							notvisited3++;
						}
					}
					
					for(y=0;y<response1[3].length;y++)
					{
						qcount4++;
				    	
						if(response1[3][y].status == marked_answered)
						{
							count_marked_answered4++;
							if((response1[3][y].correctopt-1) == response1[3][y].answer)
							{
								marks4 =marks4+1;
							}
							else
							{
								marks4 = marks4-(1/2);
							}
						}
						else if(response1[3][y].status == marked_notanswered)
						{
							count_save_notanswered4++;
						}
						else if(response1[3][y].status == save_answered)
						{
							count_save_answered4++;
							if((response1[3][y].correctopt-1) == response1[3][y].answer)
							{
								marks4 =marks4+1;
							}
							else
							{
								marks4 = marks4-(1/2);
							}
						}
						else if(response1[3][y].status == save_notanswered)
						{
							count_save_notanswered4++;
						}
						else 
						{
							notvisited4++;
						}
					}
					
					for(y=0;y<response1[4].length;y++)
					{
				    	qcount5++;
						if(response1[4][y].status == marked_answered)
						{
							count_marked_answered5++;
							if((response1[4][y].correctopt-1) == response1[4][y].answer)
							{
								marks5 =marks5+1;
							}
							else
							{
								marks5 = marks5-(1/2);
							}
						}
						else if(response1[4][y].status == marked_notanswered)
						{
							count_save_notanswered5++;
						}
						else if(response1[4][y].status == save_answered)
						{
							count_save_answered5++;
							if((response1[4][y].correctopt-1) == response1[4][y].answer)
							{
								marks5 =marks5+1;
							}
							else
							{
								marks5 = marks5-(1/2);
							}
						}
						else if(response1[4][y].status == save_notanswered)
						{
							count_save_notanswered5++;
						}
						else 
						{
							notvisited5++;
						}
					}
				
					qtotal = qcount1+qcount2+qcount3+qcount4+qcount5;
					total_save_answered =count_save_answered1+count_save_answered2+count_save_answered3+count_save_answered4+count_save_answered5;
					total_save_notanswered= count_save_notanswered1+count_save_notanswered2+count_save_notanswered3+count_save_notanswered4+count_save_notanswered5; 
					total_marked_answered=count_marked_answered1+count_marked_answered2+count_marked_answered3+count_marked_answered4+count_marked_answered5; ;
					total_notvisited=notvisited1+notvisited2+notvisited3+notvisited4+notvisited5;
					total_marks =marks1+marks2+marks3+marks4+marks5;
				$('#Exam_Option').empty();
				$('#question_hr').css("display","none");
				
				$('#Exam_Quetion').css("display", "none");
				$('#Exam_Quetion_Number').css("display", "none");
				var result_table = "<table style='border:1px solid ;border-collapse:collapse;margin-left:10%;margin-top:20px;'>"+
										"<tr>"+
											"<th style='border:1px solid ;padding:10px 15px;'>"+
												"Section Name"+
											"</th>"+
											"<th style='border:1px solid ;padding:10px 15px;'>"+
												"No.of Question"+
											"</th>"+
											"<th style='border:1px solid ;padding:10px 15px;'>"+
												"Aswered"+
											"</th>"+
											"<th style='border:1px solid ;padding:10px 15px;'>"+
												"Not Answered"+
											"</th>"+
											"<th style='border:1px solid ;padding:10px 15px;'>"+
												"Marked for Review"+
											"</th>"+
											"<th style='border:1px solid ;padding:10px 15px;'>"+
												"Not visited"+
											"</th>"+
											"<th style='border:1px solid ;padding:10px 15px;'>"+
												"markes"+
											"</th>"+
										"</tr>"+
										
										"<tr>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												"Reasoning"+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												qcount1+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												count_save_answered1+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												count_save_notanswered1+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												count_marked_answered1+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												notvisited1+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												marks1+
											"</td>"+
										"</tr>"+
										"<tr>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												"English"+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												qcount2+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												count_save_answered2+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												count_save_notanswered2+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												count_marked_answered2+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												notvisited2+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												marks2+
											"</td>"+
										"</tr>"+
										
										"<tr>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												"Math"+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												qcount3+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												count_save_answered3+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												count_save_notanswered3+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												count_marked_answered3+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												notvisited3+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												marks3+
											"</td>"+
										"</tr>"+
										
										"<tr>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												"General Awareness"+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												qcount4+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												count_save_answered4+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												count_save_notanswered4+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												count_marked_answered4+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												notvisited4+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												marks4+
											"</td>"+
										"</tr>"+
										
										"<tr>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												"computer"+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												qcount5+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												count_save_answered5+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												count_save_notanswered5+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												count_marked_answered5+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												notvisited5+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												marks5+
											"</td>"+
										"</tr>"+
										"<tr>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												"Total"+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												qtotal+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												total_save_answered+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												total_save_notanswered+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												total_marked_answered+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												total_notvisited+
											"</td>"+
											"<td align='center' style='border:1px solid ;padding:10px 15px;'>"+
												total_marks+
											"</td>"+
										"</tr>"+
										
									"</table>"+
									"<table style='width:100%; border:1px;margin-top:20px;'>"+
										"<tr>"+
											"<th>"+
												"<input type='button' id='get_detail_button'  value='Get Details' style='padding:10px;' onclick='get_detail()'/>"+
											"</th>"+
										"</tr>"+
									"</table>";
									
									
			$(result_table).appendTo('#Exam_Option');
		}
		

</script>
 
	 </body>

</html>