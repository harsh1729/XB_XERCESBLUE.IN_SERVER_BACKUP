<html>
  <head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <title>jQuery Example</title>
    <script>
      $(document).ready(function() {
		
			$.ajaxSetup({ cache: true });
		  $.getScript('http://connect.facebook.net/en_US/all.js', function(){
		    FB.init({
		      appId: '392419437601130',
		      status:true,
		      cookie:true
		    });     
		    $('#loginbutton,#feedbutton').removeAttr('disabled');
		    FB.getLoginStatus(updateStatusCallback);
		    //FB.login(); 
		  });
		  function updateStatusCallback(response)
		  {
		  	console.log(response);
		  	console.log("called!!!!");
		  }
      });
    </script>
  </head>
  <body>
  	<div id="fb-root"></div>
  </body>
  </html>