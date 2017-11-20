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
		$this->load->view('merchant/totla_income');
		$this->load->view('script');
	} public function merchant_bank_detail()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('merchant/merchant_bank_detail');
		$this->load->view('script');
	}public function service()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('merchant/service');
		$this->load->view('script');
	}public function billing_address()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('merchant/billing_address');
		$this->load->view('script');
	}public function merchant_description()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('merchant/merchant_description');
		$this->load->view('script');
	}public function upload_doc()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('merchant/upload_doc');
		$this->load->view('script');
	}public function renew()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('merchant/renew');
		$this->load->view('script');
	}public function merchant()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('merchant/merchant');
		$this->load->view('script');
	}


}