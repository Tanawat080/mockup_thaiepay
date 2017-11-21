<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shipping_method extends CI_Controller {
	function __construct()
    {
        // this is your constructor
        parent::__construct();
    }
	public function pickup_store()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/shipping_method/pickup_store');
		$this->load->view('footer');
		$this->load->view('script');
	} public function render_service()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/shipping_method/render_service');
		$this->load->view('footer');
		$this->load->view('script');
	} public function domestic_parcel()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/shipping_method/domestic_parcel');
		$this->load->view('footer');
		$this->load->view('script');
	} 
	
}