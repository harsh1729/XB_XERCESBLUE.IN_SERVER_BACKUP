<?php
	
	class Demo extends CI_controller
	{
		function index()
		{
			$this->load->helper("url");
			echo base_url();
		}
	}

?>
