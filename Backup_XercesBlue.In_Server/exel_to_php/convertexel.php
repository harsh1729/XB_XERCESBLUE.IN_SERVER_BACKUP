<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="Add_css_script/dropzone.css" rel="stylesheet">
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

<style>
.dropzone .dz-preview .dz-details,
.dropzone-previews .dz-preview .dz-details {
  width: 300px;
  height: 200px;
}
.dropzone .dz-preview .dz-details img,
.dropzone-previews .dz-preview .dz-details img {
  width: 200px;
  height: 200px;
}

.dropzone .dz-default.dz-message {
  background-image: url(Add_css_script/images/spritemap_small.png);
  background-size:contain;
  background-position:center;
}
#loading_container	
{
	background:rgba(102,102,102,0.9);
	display:none;
}
</style>
</head>

<body>
<div style="height:100%;width:100%;position:fixed; z-index:1000;" class="text-center" id="loading_container">
    			<img src="MnyxU.gif" style="margin-top:220px;"/>
    	
    </div>
	<div class="container-fluid">
    
    
    	<div class="row">
        	<div class="col-md-12" style="margin-top:30px;">
            	<form  id="upload_form" action="index.php" method="post">
                <div class="row">
					<div id="my-dropzone" class="dropzone text-center" name="my-dropzone" action="Back_end_upload.php" style="height:200px;width:500px; background:#999; margin:auto auto auto auto;">
					</div>
					<input type="hidden" id="hiddenvalue" name="hiddenvalue"/>
                </div>
                <div class="row" style="margin-top:5px;">
                	<div class="col-md-5">
                    </div>
                    <div class="col-md-2">
                    	<button type="submit" class="btn btn-lg btn-success btn-block"> show data</button>
                    </div>
                    <div class="col-md-5">
                    </div>
                    
                </div>    
					
				</form>

            </div>
		</div>            
		<div class="row" style="margin-top:50px;display:none;" id="header">
        	 <div class="col-md-12" id="question_cell">
             	 <div class="row" style="margin-bottom:20px;">
                    	<div class="col-md-1">
                        	<input type="button" value="select all" class="btn btn-sm" id="all_select"/>
                        </div>
                        <div class="col-md-2">
                        	<select class="form-control" id="language" name="language" form="submit_form">
                            	<option value="choose">choose language</option>
                                  <option value="en">English</option>
                                  <option value="hi">Hindi</option>
                            </select>
                        </div>
                    </div>
             	<div class="row" style="margin-bottom:20px;">
                	<form id="submit_form" action="save.php" method="post">
                        <div class="col-md-1 text-center" style="font-weight:bold;">
                            s.no.
                        </div>
                        <div class="col-md-2 text-center" style="font-weight:bold;">
                            question
                        </div>
                        <div class="col-md-1 text-center" style="font-weight:bold;">
                            answer
                        </div>
                        <div class="col-md-2 text-center" style="font-weight:bold;">
                            solution
                        </div>
                        <div class="col-md-1 text-center" style="font-weight:bold;">
                            option1
                        </div>
                        <div class="col-md-1 text-center" style="font-weight:bold;">
                            option2
                        </div>
                        <div class="col-md-1 text-center" style="font-weight:bold;">
                            option3
                        </div>
                        <div class="col-md-1 text-center" style="font-weight:bold;">
                            option4
                        </div>
                        <div class="col-md-1 text-center" style="font-weight:bold;">
                            option5
                        </div>
                        <div class="col-md-1 text-center" style="font-weight:bold;">
                            category
                        </div>
				                     
                    </div>
                   
                    <div class="row" id="submit_btn_container" style="margin-top:40px;">
                        <div class="col-md-5">
                        </div>
                        <div class="col-md-2">
                        	<input type="hidden" name="hidden" id="countquestion" />
                            <button type="submit"  id="submit_btn" class="btn btn-lg btn-success btn-block" style="display:none;" >submit</button>
                        </div>
                        <div class="col-md-5">
                        </div>
                    </div>
				</form>            	
           
			</div>
       
    </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="Add_css_script/dropzone.js"></script>
<script src="Add_css_script/jquery.autosize.js"></script>
<script>
function textAreaAdjust(o) {
    o.style.height = "1px";
    o.style.height = (25+o.scrollHeight)+"px";
}
		var deletefile;
		var _thisDropZone;
		var all_select = false;
		var data_length;
		Dropzone.options.myDropzone = {
											addRemoveLinks: true,
											parallelUploads: 1,
											acceptedFiles: '.xlsx',
											thumbnailWidth: 200,
											thumbnailHeight: 200,
											maxFiles: 1,
											uploadMultiple: false,
											init: function() {
																_thisDropZone = this;
																this.on("addedfile", function(file) {
																									}); 
																this.on("success", function(files, response) {
																												
																												console.log(response);
																												$('#hiddenvalue').val(response);
																												deletefile=response;
																											});
																this.on("removedfile",function(file){	
																										$.ajax({
																													type: 'POST',
																													url: 'delete.php',
																													data: "file_name="+deletefile,
																													dataType: 'html',
																													success:function(data)
																													{
																													},
																												});
																										$('#hiddenvalue').val("");
																									});
																this.on("maxfilesexceeded", function(file){
																											this.removeAllFiles();
																											this.addFile(file);
																											});
															},			
									};
									
									
									
									$("#upload_form").submit(function(e)
									{
										$('#loading_container').css("display","block");
										var postData = $(this).serializeArray();
										var formURL = $(this).attr("action");
										$.ajax(
											{
												url : formURL,
												type: "POST",
												data : postData,
												dataType:"json",
												success:function(data) 
												{
													
													if(data!=0)
													{
														data_length=data.length;
														for(i=0;i<data.length;i++)
														{
															
															console.log(data[i].category);
															console.log(data[i].bankname);
															console.log(data[i].year);
															
															$('#countquestion').val(data.length);
															var data1 ="<div class='row' id='single_container"+(i+1)+"' style='margin-top:20px;'>"+
																			"<div class='col-md-1 text-center'>"+(i+1)+"&nbsp;&nbsp;<input type='checkbox' checked id='check"+(i+1)+"' name='check"+(i+1)+"' form='submit_form'/></div>"+
																			"<div class='col-md-2 text-center' >"+
																				"<textarea style='width:100%;overflow:hidden;resize:none;' class='t1' name='question"+(i+1)+"'  form='submit_form'>"+data[i].question+"</textarea>"+
																			"</div>"+
																			
																			
																			"<div class='col-md-1 text-center' >"+
																				"<textarea style='width:100%;overflow:hidden;resize:none;' class='t1' form='submit_form' name='answer"+(i+1)+"'>"+data[i].answer+"</textarea>"+
																			"</div>"+
																			
																			"<div class='col-md-2 text-center' >"+
																				"<textarea style='width:100%;overflow:hidden;resize:none;' class='t1' form='submit_form' name='solution"+(i+1)+"'>"+data[i].solution+"</textarea>"+
																			"</div>"+
																			"<div class='col-md-1 text-center' >"+
																				"<textarea style='width:100%;overflow:hidden;resize:none;' class='t1' form='submit_form' name='option1"+(i+1)+"'>"+data[i].option1+"</textarea>"+
																			"</div>"+
																			"<div class='col-md-1 text-center' >"+
																				"<textarea style='width:100%;overflow:hidden;resize:none;' class='t1' form='submit_form' name='option2"+(i+1)+"'>"+data[i].option2+"</textarea>"+
																			"</div>"+
																			"<div class='col-md-1 text-center' >"+
																				"<textarea style='width:100%;overflow:hidden;resize:none;' class='t1' form='submit_form' name='option3"+(i+1)+"'>"+data[i].option3+"</textarea>"+
																			"</div>"+
																			"<div class='col-md-1 text-center' >"+
																				"<textarea style='width:100%;overflow:hidden;resize:none;' class='t1' form='submit_form' name='option4"+(i+1)+"'>"+data[i].option4+"</textarea>"+
																			"</div>"+
																			"<div class='col-md-1 text-center' >"+
																				"<textarea style='width:100%;overflow:hidden;resize:none;' class='t1' form='submit_form' name='option5"+(i+1)+"'>"+data[i].option5+"</textarea>"+
																			"</div>"+
																			"<div class='col-md-1 text-center' >"+
																				"<textarea style='width:100%;overflow:hidden;resize:none;' class='t1' form='submit_form' name='category"+(i+1)+"'>"+data[i].category+"</textarea>"+
																				"<input type='hidden' form='submit_form' name='bankname"+(i+1)+"' value='"+data[i].bankname+"'>"+
																				"<input type='hidden' form='submit_form' name='year"+(i+1)+"' value='"+data[i].year+"'>"+
																			"</div>"+
																		"</div>";
																		$(data1).insertBefore('#submit_btn_container');
																		
																
														}
														
													   
														
														$('#header').css("display","block");
														$('.t1').autosize();	
														$('#submit_btn').css("display","block");
														$('#loading_container').css("display","none");
													   
														_thisDropZone.removeAllFiles();
													}
													else
													{
														alert("first choose a file"+data);
													}
													
												},
												error: function(jqXHR, textStatus, errorThrown) 
												{
													//if fails      
												}
											});
											e.preventDefault(); //STOP default action
											 //unbind. to stop multiple form submit.
									});
									
									
									
									
									$('#submit_form').submit(function(e)
									{
										if($('#language').val() == "choose")
										{
											alert("choose a language first");
											return false;
											
										}
										var postData = $(this).serializeArray();
										var formURL = $(this).attr("action");
										$.ajax(
											{
												url : formURL,
												type: "POST",
												data : postData,
												dataType:"json",
												success:function(data) 
												{
													
													for(i=0;i<data.length;i++)
													{
														$('#single_container'+data[i]).remove();
													}
												
													alert(+data.length+"row inserted successfully");
												},
												error: function(jqXHR, textStatus, errorThrown) 
												{
													alert("not success");     
												}
											});
											e.preventDefault(); 
										 //STOP default action
											 //unbind. to stop multiple form submit.
										
									});
						$('#all_select').click(function()
						{
							if(all_select)
							{
								all_select=false;
								$("input[type='checkbox']").prop('checked',false);
								
							}
							else
							{
								all_select=true;
								$("input[type='checkbox']").prop('checked',true);
								
							}
						});			
									
</script>
</body>
</html>