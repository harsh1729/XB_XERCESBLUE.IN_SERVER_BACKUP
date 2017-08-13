$(document).ready(function($){
    var i =0;

       var images = ['image/main_screen.jpg','image/bankpo.jpg','image/np.jpg','image/xx.jpg','image/patient-at-dentist.jpg'];
      var text = [
                  'Technology Meets Art',
                  'Pocket Size Study',
                  'News On Fingers',
                  'Got My Eyes On You',
                  'Dentist App',
                  
                ];
      var sub_text = [
                  'We believe an impressive application must be crafted in an artistic way, we will bring colours to your business',
                  'A complete online examination practice app',
                  'We are offering an awesome mobile app to make your news business digital . Keep up with the pace of time.',
                  'A call tracking app to track your phone details.',
                  'A tablet app to keep track of your patients and generate reports by placing points .',
                  'We believe an impressive application must be crafted in an artistic way, we will bring colours to your business'
                  ];

      var image = $('.bg');
      var text_container = $('#main_page_text_container');
      var sub_text_container =$('#main_page_subtext_container');

                    //Initial Background image setup
                   image.data('ibg-bg',images[i]); 
                  interactive_bg_reference= image.interactive_bg();
                   $('#dot'+i).css({"background-color": "#fff"});
                  
   // image.css('background-image', 'url(image1.png)');

                    //Change image at regular intervals

        setInterval(function(){  

       image.fadeOut(1000, function () {
        i = i+1;
    //   image.css('background-image', 'url(' + images [i++] +')');
    text_container.text(text[i]);
       sub_text_container.text(sub_text[i]);
       
       $('.ibg-bg').remove();
       image.data('ibg-bg',images[i]);
       interactive_bg_reference.stop(); 
       interactive_bg_reference=image.interactive_bg();
       
       image.fadeIn(1000);

       });

        if(i == (images.length-1))
       {
           $('.slider_dot').css({"background-color": "#2DA3F6"});
        $('#dot0').css({"background-color": "#fff"});
       }
       else
       {
           $('.slider_dot').css({"background-color": "#2DA3F6"});
        $('#dot'+(i+1)).css({"background-color": "#fff"});
       }
       
       
       
       if(i == images.length-1)

        i = -1;

      }, 10000);           

        $(document).on("click",".slider_dot",function(){

        var a = $(this).attr('id');
        var index =parseInt(a.substr(a.length - 1));
         i=index;
         image.fadeOut(0, function () {

    //   image.css('background-image', 'url(' + images [i++] +')');
        
        console.log(i);
        text_container.text(text[index]);
       sub_text_container.text(sub_text[index]);
       
       $('.ibg-bg').remove();
       image.data('ibg-bg',images[index]);
       interactive_bg_reference.stop(); 
       interactive_bg_reference=image.interactive_bg();
       
       image.fadeIn(1000);

       });
       $('.slider_dot').css({"background-color": "#2DA3F6"});
        $('#dot'+(index)).css({"background-color": "#fff"});
       
       
      });   
      
      $('#user_information_form').submit(function(e)
                  {
                    
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
                          $('#username').val("");
                          $('#phonenumber').val("");
                          $('#email').val("");
                          $('#message').val("");
                          alert(data);
                         
                        },
                        error: function(jqXHR, textStatus, errorThrown) 
                        {
                          alert("not success"); 
                          console.log(errorThrown);
                          console.log(textStatus);  
                          console.log(jqXHR) ; 
                        }
                      });
                      e.preventDefault(); 
                     
                    
                  });  

});