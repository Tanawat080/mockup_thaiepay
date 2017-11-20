<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends CI_Controller {
	function __construct()
    {
        // this is your constructor
        parent::__construct();
    }
	public function support()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('contact/support');
		$this->load->view('script');


	} public function accounting()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('contact/accounting');
		$this->load->view('script');

	}
}