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
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/shipping_method/pickup_store');
		$this->load->view('footer');
		$this->load->view('script');
	} public function render_service()
	{
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/shipping_method/render_service');
		$this->load->view('footer');
		$this->load->view('script');
	} public function domestic_parcel()
	{
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/shipping_method/domestic_parcel');
		$this->load->view('footer');
		$this->load->view('script');
	} public function international_percel()
	{
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/shipping_method/international_parcel');
		$this->load->view('script');
	} public function tnt_inter()
	{
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/shipping_method/tnt_inter');
		$this->load->view('footer');
		$this->load->view('script');
	}  public function tnt_domestic()
	{
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/shipping_method/tnt_domestic');
		$this->load->view('footer');
		$this->load->view('script');
	}public function ups_inter()
	{
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/shipping_method/ups_inter');
		$this->load->view('footer');
		$this->load->view('script');
	}public function custom_shipping()
	{
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('productservice/shipping_method/custom_shipping');
		$this->load->view('script');
	}
	
}