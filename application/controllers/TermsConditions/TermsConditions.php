<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class TermsConditions extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
	       
	    }
		public function Terms_Conditions()
		{
			$this->load->view('css');
			$this->load->view('top-bar');
			$this->load->view('right-sidebar');
			$this->load->view('terms_conditions/TermsConditions');
			$this->load->view('footer');
			$this->load->view('script');
		}
}
?>