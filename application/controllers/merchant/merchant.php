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
		//$this->load->view('merchant/totla_income');
		$this->load->view('script');
	} public function merchant_bank_detail()
	{
		$this->load->view('right-sidebar');
	}
}