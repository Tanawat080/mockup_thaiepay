<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productservice extends CI_Controller {
	function __construct()
    {
        // this is your constructor
        parent::__construct();
    }
	public function Addnewproduct_service()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/Addnewproduct_service');
		$this->load->view('script');
	} 
	public function customize_product()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/customize_product');
		$this->load->view('footer');
		$this->load->view('script');
	}
	public function payment_method()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/payment_method');
		$this->load->view('script');
	}
	public function shipping_method()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/shipping_method');
		$this->load->view('script');
	}public function edit_product()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/edit_product');
		$this->load->view('footer');
		$this->load->view('script');
	}public function edit_voice()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/edit_voice');
		$this->load->view('footer');
		$this->load->view('script');
	}public function product_service_des()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/product_service_des');
		$this->load->view('footer');
		$this->load->view('script');
	}

}