<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class TipsTricks extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
	       
	    }
		public function Tips_Tricks()
		{
			$this->load->view('css');
			$this->load->view('top-bar');
			$this->load->view('right-sidebar');
			$this->load->view('Tips_Tricks/Tips_Tricks');
			$this->load->view('footer');
			$this->load->view('script');
		}
		
}
?>