<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {
	function __construct()
    {
        // this is your constructor
        parent::__construct();
    }
	public function view_all_orders()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('orders/view_all_orders');
		$this->load->view('footer');
		$this->load->view('script');
	} public function refund()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('orders/refund');
		$this->load->view('footer');
		$this->load->view('script');
	}
	/*public function counter_service()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('orders/counter_service');
		$this->load->view('script');
	} */
	public function refund_des()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('orders/refund_des');
		$this->load->view('footer');
		$this->load->view('script');
	}public function orders_des()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('orders/orders_des');
		$this->load->view('footer');
		$this->load->view('script');
	}public function orders_details()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('orders/orders_details');
		$this->load->view('footer');
		$this->load->view('script');
	}public function counter_details()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('orders/counter_details');
		$this->load->view('footer');
		$this->load->view('script');
	}


}