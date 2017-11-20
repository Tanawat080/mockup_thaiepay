<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class SystemConnection extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
	       
	    }
		public function System_Connection()
		{
			$this->load->view('top-bar');
			$this->load->view('right-sidebar');
			$this->load->view('System_Connection/System_Connection');
			$this->load->view('script');
		}
		
}
?>