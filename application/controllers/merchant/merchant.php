<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Merchant extends CI_Controller {
		function __construct()
	    {
	        // this is your constructor
	        parent::__construct();
	       
	    }
		public function total_income()
		{
			$this->load->view('top-bar');
			$this->load->view('right-sidebar');
			$this->load->view('home');
			$this->load->view('script');
		}
		public function merchant_bank()
		{
			$this->load->view('top-bar');
			$this->load->view('right-sidebar');

			$this->load->view('script');
		}
		public function service_type()
		{
			$this->load->view('top-bar');
			$this->load->view('right-sidebar');

			$this->load->view('script');
		}
		public function billing_address()
		{
			$this->load->view('top-bar');
			$this->load->view('right-sidebar');

			$this->load->view('script');
		}
		public function merchant_description()
		{
			$this->load->view('top-bar');
			$this->load->view('right-sidebar');

			$this->load->view('script');
		}
		public function upload_document()
		{
			$this->load->view('top-bar');
			$this->load->view('right-sidebar');

			$this->load->view('script');
		}
}
?>