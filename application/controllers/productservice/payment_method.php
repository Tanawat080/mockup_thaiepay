<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_method extends CI_Controller {
	function __construct()
    {
        // this is your constructor
        parent::__construct();
    }
	public function payment_card()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/payment_method/payment_card');
		$this->load->view('footer');
		$this->load->view('script');
	} 
	public function payment_data()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/payment_method/payment_data');
		$this->load->view('footer');
		$this->load->view('script');
	}public function sendEmail_product()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/sendEmail_product');
		$this->load->view('footer');
		$this->load->view('script');
	}
	
}