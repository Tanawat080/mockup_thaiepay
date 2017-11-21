<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class exchangerate extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
	       
	    }
		public function exchange_rate()
		{
			$this->load->view('top-bar');
			$this->load->view('right-sidebar');
			$this->load->view('exchange_rate/exchange_rate');
			$this->load->view('footer');
			$this->load->view('script');
		}
		
}
?>