<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class download extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
	       
	    }
		public function down_load()
		{
			$this->load->view('top-bar');
			$this->load->view('right-sidebar');
			$this->load->view('down_load/down_load');
			$this->load->view('script');
		}
		
}
?>