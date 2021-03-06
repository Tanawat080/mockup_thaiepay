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
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('merchant/totla_income');
		$this->load->view('footer');
		$this->load->view('script');
	} public function merchant_bank_detail()
	{
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('merchant/merchant_bank_detail');
		$this->load->view('footer');
		$this->load->view('script');
	}public function service()
	{
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('merchant/service');
		$this->load->view('footer');
		$this->load->view('script');
	}public function billing_address()
	{
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('merchant/billing_address');
		$this->load->view('footer');
		$this->load->view('script');
	}public function merchant_description()
	{
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('merchant/merchant_description');
		$this->load->view('footer');
		$this->load->view('script');
	}public function upload_doc()
	{
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('merchant/upload_doc');
		$this->load->view('footer');
		$this->load->view('script');
	}public function renew()
	{
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('merchant/renew');
		$this->load->view('footer');
		$this->load->view('script');
	}public function merchant()
	{
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('merchant/merchant');
		$this->load->view('footer');
		$this->load->view('script');
	}public function renew_creditCard()
	{
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('merchant/renew_creditCard');
		$this->load->view('footer');
		$this->load->view('script');
	}public function editInfo()
	{
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('merchant/edit_Info');
		$this->load->view('footer');
		$this->load->view('script');
	}public function editBank()
	{
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('merchant/edit_Bank');
		$this->load->view('footer');
		$this->load->view('script');
	}public function editLogo()
	{
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('merchant/edit_logo');
		$this->load->view('footer');
		$this->load->view('script');
	}


}