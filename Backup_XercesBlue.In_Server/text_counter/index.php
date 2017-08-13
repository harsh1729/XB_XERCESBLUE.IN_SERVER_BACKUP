<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>text counter</title>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
    	<div class="row" style="margin-top:100px;" id="main_container">
        	<div class="col-md-4">
            </div>
            <div class="col-md-4" style="border:1px solid #000;border-radius:5px;">
            	<div class="row" style="margin-top:10px;margin-bottom:20px;">
                <form id="submit_form" method="post" action="Back_end.php">
                	<div class="col-md-12">
                    	<input type="text" class="form-control" required="required" placeholder="username" id="username" name="username">
                    </div>
                </div>
                <div class="row" style="margin-bottom:20px;">
                	<div class="col-md-12">
                    	<input type="text" class="form-control" required="required" placeholder="password" id="password" name="password">
                    </div>
                </div>
                <div class="row" style="margin-bottom:20px;">
                	<div class="col-md-12">
                    	From:<input type="date" class="form-control" required="required"  name="date_from" min="2015-01-01">
                    </div>
                </div>
                <div class="row" style="margin-bottom:20px;">
                	<div class="col-md-12">
                    	To:<input type="date" class="form-control" 	 required="required"  name="date_to" min="2015-01-01">
                    </div>
                </div>
                <div class="row" style="margin-bottom:10px;">
                	<div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                    	<input type="submit" id="submit_button" class="btn btn-lg btn-success btn-block" value="submit" >
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
                
               </form> 
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
    $('#submit_form').submit(function(e){
    	
	$('#submit_button').attr("disabled","disabled")
		                                var postData = $(this).serializeArray();
										var formURL = $(this).attr("action");
										$.ajax(
											{
												url : formURL,
												type: "POST",
												data : postData,
												dataType:"html",
												success:function(data) 
												{
                                                  $('#main_container').html(data);
                                                        console.log("success");
                                                        console.log(data);
                                                        
												},
												error: function(jqXHR, textStatus, errorThrown) 
												{
                                                 console.log(" not success");
                                                 console.log (errorThrown);
													     
												}
											});
											e.preventDefault(); 
		
	});
</script>
</body>
</html>