<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
 <style>
 body
		{
			padding-top:50px;
		}
		
.background-check
{
	background-color:#ecf0f1;
	text-align:center;
	border-radius:10px;
    border:1px solid #1abc9c;
}
 
 
.container-fluid1{
  height:100%;
  display:table;
  width: 100%;
  padding: 0;
}
.textalign
{
	text-align:center;
}
.textfield
{


	margin-bottom:8%;
	
}
.loginbottom
{
	margin-top:13%;
margin-bottom:6%;	
 background: #1abc9c;
}
.loginbottom:hover
{
margin-top:13%;
margin-bottom:6%;	
	
 background:  #1bc6a4;
}
 
.row-fluid {height: 100%; display:table-cell; vertical-align: middle;}
.centering {
 /* float:none;
  margin:0 auto;*/
}
.loginheader
{
	background-color:#1abc9c;
	padding-top:3%;
	padding-bottom:3%;
	color:#FFF;
	border-top-left-radius:10px;
	border-top-right-radius:10px;
	
}



.background_form {
  background: #ecf0f1;
 border-radius: 5px;
 margin-top:-110px;
  padding-bottom:15px;
}


.container-fluid2{
  height:100%;
  display:table;
  width: 100%;
  padding: 0;
}

.input_size
{
	 padding: 7px 5px;
 
  width: 100%;
 font-size: 18px;
  
  border-bottom-right-radius:5px;
  border-top-right-radius:5px;
  border:solid 1px #999999;
  -webkit-transition: 0.3s linear;
  -moz-transition: 0.3s linear;
  -o-transition: 0.3s linear;
  transition: 0.3s linear;
	
}
.margin_row
{
	margin-top:30px;
}
.input_size:focus
{
	 outline: none;
	 border:none;
  box-shadow: 0 0 1px 1px #1abc9c;
}
.padding
{
	padding:0px;
}
.submit_button
{
	 background: #1abc9c;
  padding: 10px;
  font-size: 20px;
  display: block;
  width: 100%;
  border: none;
  color: #fff;
  border-radius: 5px;
}
.submit_button:hover
{
	 background: #1bc6a4;
}
 input:required:invalid, input:focus:invalid {
    background-image: url(Bank_Web/images/invalid.png);
    background-position: right center;
    background-repeat: no-repeat;
  }
  input:required:valid {
    background-image: url(Bank_Web/images/valid1.png);
    background-position: right center;
    background-repeat: no-repeat;
  }


		
 </style>
</head>

<body style="background-color:#9CF;">
<div id="Resiter_form_container" style="height:100%; width:100%;background-color:rgba(102,102,102,0.9);position:fixed;z-index:1000;display:none;	">
	<div class="row">
    	<div class="col-md-12 text-right">
       		<input type="button" id="Resiter_form_cancel_button" style="background:url(Bank_Web/images/images.jpg);background-size:cover;border:none; margin-right:10px;margin-top:5px; height:40px; width:40px;" />
        </div>
    </div>
    <div class="container-fluid2">
		<div class="row-fluid fullheight" >
        	 	<form role="form" class="form-horizontal" id="Resiterform" action="Bank_Web/Back_end_resiter.php" method="post">
                	<div class="col-lg-12 col-md-12" style="">
                    	
                    	<div class="row">
                        	<div class="col-lg-3 col-md-3">
                        	</div>
                        	<div class="col-lg-6 col-md-6 background_form" >
                            		<div class="row" style="text-align:center;background-color:#1abc9c;color:#FFF;border-top-left-radius:5px;border-top-right-radius:5px;">
                                    	<h3>SIGN UP</h3>
                                    </div>
                            
                            		<div class="input-group margin_row">
            							<span class="input-group-addon" style="border:solid 1px #999999; background-color:#1abc9c"><span style="color:#FFF;" class="glyphicon glyphicon-user"></span></span>
           									<input  class="input_size "  placeholder="Name" required name="Resiter_Name" type="text" maxlength="30" pattern=".{3,30}" title="3 characters minimum" aria-required="true" pattern="[A-Za-z-0-9]+" />
 
 
       								</div>   
                                    
                                    <div class="input-group margin_row">
            								<span class="input-group-addon" style="border:solid 1px #999999; background-color:#1abc9c"><span style="color:#FFF;" class="glyphicon glyphicon-envelope"></span></span>
           									<input required name="Resiter_email" placeholder="Email Id" class="input_size" type="email"  /><br />
       								</div> 
                                    <div class="input-group margin_row">
            								<span class="input-group-addon" style="border:solid 1px #999999; background-color:#1abc9c"><span style="color:#FFF;" class="glyphicon glyphicon-phone"></span></span>
           									<input required name="Resiter_Phone_No" placeholder="Contact Number" class="input_size" maxlength="12" pattern=".{10,}" pattern="[0-9]+" type="text" />
       								</div> 
                            		  <div class="input-group margin_row">
            								<span class="input-group-addon" style="border:solid 1px #999999; background-color:#1abc9c"><span style="color:#FFF;" class="glyphicon glyphicon-user"></span></span>
           									<input required name="Resiter_Username" placeholder="User Name" class="input_size" maxlength="20" pattern=".{4,}" title="4 characters minimum" type="text" />
       								</div> 
                                     <div class="input-group margin_row">
            								<span class="input-group-addon" style="border:solid 1px #999999; background-color:#1abc9c"><span style="color:#FFF;" class="glyphicon glyphicon-lock"></span></span>
           									<input required name="Resiter_password" id="Resiter_password" placeholder="Password" class="input_size" pattern=".{6,}" title="4 characters minimum" type="text" />
       								</div> 
                                   	<div id="error_massage_registered" style="color:#F00;"></div>
                                    <div class="row margin_row">
                                    	<div class="col-lg-4 col-md-4">
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                        	<button type="submit" id="submit" class="submit_button" style="padding:5px;" ><span class="glyphicon glyphicon-log-in"></span> Submit</button>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                        </div>
                                        
                                    </div>
                                       
                       		   	
                      		</div>
                        	
                       	 
                       	 	<div class="col-lg-3 col-md-4">
                         	</div>  
						</div>
                  
                  
               </div>
		</form> 
        </div>                            
</div>

</div>
<div id="login_form_container" style="height:100%; width:100%;background-color:rgba(102,102,102,0.9);position:fixed;z-index:1000;display:none;	">
	  <div class="row">
    	<div class="col-md-12 text-right">
       		<input type="button" id="login_form_cancel_button" style="background:url(Bank_Web/images/images.jpg);background-size:cover;border:none; margin-right:10px;margin-top:5px; height:40px; width:40px;" />
        </div>
    </div>
    <div class="container-fluid1">
  
	<div class="row-fluid fullheight" style="">
		<div class="col-md-4 col-sm-4 col-xs-2"></div>
		<div class="col-md-4 col-sm-4 col-xs-8">
        	
            	
                <div class="row" style="margin-top:-250px;">
                       <div class="col-md-1">
                       </div>
                       <div class="col-md-10 textalign">
                       			<div class="row">
                                		<div class="col-md-1 col-sm-1 col-xs-1"></div>
                                		<div class="col-md-10 col-sm-10 col-xs-10 background-check ">
                                        		<div class="row">
                                 						<div class="col-lg-12 loginheader lead">LogIn</div>
                                				</div>
                                                <div class="row">
                                                		<div class="col-lg-12 text-left ">
                                                        <span id="login_error_message" class="text-danger"></span>
                                                        </div>
                                                </div>
                                		        <form id="Longinform"  action="Bank_Web/Back_end_login.php" method="post">
                                                <input id="username" type="text" class="form-control textfield" required="required" placeholder="username"/>
            									<input id="password" type="password" class="form-control " required="required" placeholder="password"/>
				                        		<button type="submit" class="btn btn-success btn-lg loginbottom" ><span class="glyphicon glyphicon-log-in"></span> LogIn</button>
                                        		</form>
                                        </div>
                                        <div class="col-md-1 col-sm-1 col-xs-1"></div>
                       	
                                </div>
                                
                        </div>
                       <div class="col-md-1">
                       </div>
                </div>
            
		</div>
		<div class="col-md-4 col-sm-4 col-xs-2"></div>
        
	</div>
</div>
</div>
<nav class="navbar navbar-inverse navbar-fixed-top">
    	<div class="container-fluid">
        
        	<div class="navbar-header">
            	
	           	<a class="navbar-brand" style=" margin-left:100px; color:#FC3;font-weight:bold;font-size:24px;" href="">Murgi Ya Anda</a>
            </div>
            <?php
			
			if(!isset($_SESSION['bank_exam_username']))
			{
            	echo "<div class='collapse navbar-collapse' id='myNavBar'>";
            	echo "<ul id='header_list' class='nav navbar-nav navbar-right hidden-xs'>";
             	echo "<li class='active'  style='margin-right:20px;'>";
                echo "<a href='Bank_Web/Back_end_logout.php'> <span id='logout_container' >Logout</span></a>";
                echo "</li>";
                echo "	</ul>";
           		echo " </div>";
			}
			else
			{
				echo "<div class='collapse navbar-collapse' id='myNavBar'>";
            	echo "<ul id='header_list' class='nav navbar-nav navbar-right hidden-xs'>";
				echo "<li class='active'  style='margin-right:20px;'>";
                echo "<a href=''> <span id='logout_container' >".$_SESSION['bank_exam_username']."</span></a>";
                echo "</li>";
             	echo "<li class='active'  style='margin-right:20px;'>";
                echo "<a href='Bank_Web/Back_end_logout.php'> <span id='logout_container' >Logout</span></a>";
                echo "</li>";
                echo "	</ul>";
           		echo " </div>";
			}
			?>
        </div>
    </nav>
<div class="container-fluid" id="main_container" >
	<div class="row" style="margin-top:70px;">
    	<div class="col-md-1" style="margin-top:20px;">
        </div>
    	<div class="col-md-2" style="margin-top:20px;" id="bank_exam_container">
           <?php
		   session_start();
		   	if(!isset($_SESSION['bank_exam_login_id']))
		   	{
        		echo "<a href='Bank_Web/BankExam_enter_withoutlogin.php' style='text-decoration:none;'><Button type='button'  class='btn btn-lg btn-default btn-block'><span class='glyphicon glyphicon-Facebook'></span>Bank Exam </button></a> ";
			}
			else
			{
				echo "<a href='Bank_Web/BankExam_enter_withlogin.php' style='text-decoration:none;'><Button type='button'  class='btn btn-lg btn-default btn-block'><span class='glyphicon glyphicon-Facebook'></span>Bank Exam </button></a> ";
			}
			?>
        </div>	
        <div class="col-md-2" style="margin-top:20px;">
        	<input type="button" value="SCC" class="btn btn-lg btn-default btn-block"> 
        </div>	
        <div class="col-md-2" style="margin-top:20px;">
        	<input type="button" value="Gate" class="btn btn-lg btn-default btn-block"> 
        </div>	
        <div class="col-md-1" style="margin-top:20px;"></div>
        <div class="col-md-2" style="height:115px;background-color:#060; border-radius:5px;">
        	<div class="row" style="margin-top:10px;">
            	<div class="col-md-12">
                	<button id="login_button" type="button"  class="btn btn-sm btn-info btn-block"><span class="glyphicon glyphicon-log-in" style="margin-right:5px;"></span>Login</button>
                </div>
            </div>
            <div class="row" style="margin-top:10px;">
            	<div class="col-md-12">
                <a href="Bank_Web/facebook_login.php">	<button type="button" id="facebook_login_button" class="btn btn-sm btn-info btn-block"><span class="glyphicon glyphicon" style="margin-right:5px;"></span>Login with facebook</button></a>
                </div>
            </div>
            <div class="row" style="margin-top:10px;">
            	<div class="col-md-12 text-right" style="color:#FFF; font-size:16px;">
                	<span id="signup_button" style="cursor:pointer;">SignUp</span>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    
    </div>
    
</div>
<div style="width:100%; height:50px;bottom:0px;position:absolute;background-color:#fff;text-align:right;padding:20px 20px;">
           

Designed by <a href="http://xercesblue.in/">XercesBlue.in</a>
    </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
	$('#login_form_cancel_button').click(function(){
		
		$('#login_form_container').css("display","none");
	});
	$('#login_button').click(function(){
		$('#login_form_container').css("display","block");
	});
	$('#Resiter_form_cancel_button').click(function(){
		$('#Resiter_form_container').css("display","none");
	});
	$('#signup_button').click(function(){
		$('#Resiter_form_container').css("display","block");
	});
	
	
 				$('#Longinform').submit(function(e){
					var action = $('#Longinform').attr("action");
					var form_data={
						username: $('#username').val(),
						password: $('#password').val(),
					};
					
				$.ajax({
			  	type :'POST',
				url :action,
				data: form_data,
				dataType:'json',
				async:false,
				success:function(response)
				{
					
					succes=response;
					$('#login_button').attr('disabled',true);
                    $('facebook_login_button').attr('disabled,true');
					
				},
				error: function(jqXHR, textStatus, errorThrown) 
												{
													
													alert("an error acured");     
												}
					});
					if(succes!=0)
					{
						$('#username').val('');
						$('#password').val('');
						$('#error_massage').html('');
						$('#login_form_container').css("display","none");
						$("#myNavBar ul").prepend('<li class="active"><a href=""><span class="tab">'+succes+'</span></a></li>');
						$('#bank_exam_container').empty();
						var button = "<a href='Bank_Web/BankExam_enter_withlogin.php' style='text-decoration:none;'><Button type='button'  class='btn btn-lg btn-default btn-block'><span class='glyphicon glyphicon-Facebook'></span>Bank Exam </button></a>";
						$(button).appendTo('#bank_exam_container');
				
					}
					
					else
					{
						$('#login_error_message').html('wrong username or password ');
					}
					
				 e.preventDefault();
				});
	
	
  
	
	
$(document).ready(function(e) {
    
		$('#Resiterform').submit(function(e)
		{
			var sucess;
			
			var action = $('#Resiterform').attr("action");
					var form_data= $('#Resiterform').serializeArray();
					
				$.ajax({
			  	type :'POST',
				url :action,
				data: form_data,
				dataType:'json',
				async:false,
				success:function(response)
				{
					
					sucess=response;
					
					
				},
				error: function(jqXHR, textStatus, errorThrown) 
				{
								
					alert("an error acured");     
				}
				
		});
		if(sucess==1)
				{
					$('#error_massage_registered').html('username already exist ! ');
				}
				else
				{
					$('#Resiter_Name').val('');
					$('#Resiter_Phone_No').val('');
					$('#Resiter_email').val('');
					$('#Resiter_password').val('');
					$('#Resiter_username').val('');
					$('#error_massage_registered').html('');
					$('#Resiter_form_container').css("display","none");
				}
				e.preventDefault();
	});
	
});

 
</script>
</body>
</html>