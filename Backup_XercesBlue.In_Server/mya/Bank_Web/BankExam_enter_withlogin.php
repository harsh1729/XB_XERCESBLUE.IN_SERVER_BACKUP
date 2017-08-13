<?php
session_start();
if(!isset($_SESSION['bank_exam_login_id']))
 	header('location:index.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
 <style>
 body
		{
			padding-top:70px;
		}
 </style>
</head>

<body style="background-color:#9CF;">
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
                echo "<a href='Back_end_logout.php'> <span id='logout_container' >Logout</span></a>";
                echo "</li>";
                echo "	</ul>";
           		echo " </div>";
			}
			else
			{
				echo "<div class='collapse navbar-collapse' id='myNavBar'>";
            	echo "<ul id='header_list' class='nav navbar-nav navbar-right hidden-xs'>";
				echo "<li class='active'  style='margin-right:20px;'>";
                echo "<a href='Back_end_logout.php'> <span id='logout_container' >".$_SESSION['bank_exam_username']."</span></a>";
                echo "</li>";
             	echo "<li class='active'  style='margin-right:20px;'>";
                echo "<a href='Back_end_logout.php'> <span id='logout_container' >Logout</span></a>";
                echo "</li>";
                echo "	</ul>";
           		echo " </div>";
			}
			?>
        </div>
    </nav>
<div class="container-fluid" id="main_container" >
	<div class="row" style="margin-top:50px;">
    	<div class="col-md-5">
        </div>
        <div class="col-md-2">
        	<div id="bank_exam_button" class="btn btn-block btn-lg btn-default well">Take Exam</div>
        </div>
        <div class="col-md-5">
        </div>
    
    </div>
    <div class="row" >
    	<div class="col-md-4">
        </div>
        <div class="col-md-4" style="color:#F00;">
         	<p>if you take a exam than clicked the button Take Exam.
            </p>
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
 var W = window.innerWidth;
 var H = window.innerHeight;
 $('#bank_exam_button').click(function()
 {
	window.open('Front_end_instruction.php','mywindow','"menubar=1,resizable=1,width='+W+',height='+H+'"');
 });
</script>
</body>
</html>