 <link href="<?=base_url()?>plugins/dropzone/dropzone.css" rel="stylesheet">
<style type="text/css">

#blogdropzone.dropzone {

  padding: 1.3em;
  
}
.dropzone {

  padding:0px;
  padding-left:25px;
  padding-top:2px;
}

#blogdropzone.dropzone .dz-preview .dz-details,
#blogdropzone.dropzone-previews .dz-preview .dz-details{
  width: 130px;
  height: 100px;
}
#blogdropzone.dropzone .dz-preview .dz-details img,
#blogdropzone.dropzone-previews .dz-preview .dz-details img {
  width: 130px;
  height: 100px;
}

#blogdropzone.dropzone .dz-default.dz-message {
  background-image: url(<?=base_url()?>'plugins/dropzone/images/spritemap_small.png');
  background-size:contain  ;
  background-position:right;
}
p

{

    color:#fff;

}

p:hover{

 color:#59a1ff;

}

			body

			{

				/*background-color:#bbb;*/

				padding-left:15vw;

				/*padding-top:100px;*/

				padding-top:50px;

			}

			/* 	LEFT NAVIGATION MENU STYLE STARTS*/

			#left-navigation-container

			{

				background-color:#59a1ff;



				width:15vw;

				 height:100vh;

 				position:fixed;

 				margin-left:-15vw;

 				/*margin-top:-100px;*/

 				margin-top:-50px;

 			}

 			



			 .left-navigation-header>div>a

			 {

 				text-decoration:none;

			 }

			 .left-navigation-footer

			 {

                         

                             width:100%;

 				height:4vh;

			}

 			.left-navigation-content-container

			 {

  				background-color:#59a1ff;

				height:96vh;;

				width:100%;

				overflow:auto;

				



			}

			 .left-navigation-content-container>a

			{

				text-decoration:none;

			}

			.left-navigation-content-container>a>p

			{

				padding:10px 5px 10px 10px;

				margin-bottom:0px;

			}

			.left-navigation-content-container>a>p:hover

			{

				background-color:#fff;

			}

			/* 	LEFT NAVIGATION MENU STYLE END*/

			.navbar

			{

				border:none;

			}

			ul.nav a { color: #000!important; }

			ul.nav a { color: #59a1ff !important; }



			.dropdown-toggle:active, .open .dropdown-toggle {background-color:#F2F2F2 !important; color:#59a1ff !important;}

			

			.menu-active

			{

				/*background-color:#356199;*/

				background-color:#fff;

				color:#59a1ff;

			}







.center-cropped

{

  object-fit: cover; /* Do not scale the image */

  object-position: center; /* Center the image within the element */

  height: auto;

  width: 100%;

}
	body
	{
		padding-top:110px;
	}
	#left-navigation-container
	{
		margin-top:-110px;
	}
</style>