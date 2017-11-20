<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System_system extends CI_Controller {
	function __construct()
    {
        // this is your constructor
        parent::__construct();
    }
	public function smsAlert()
	{
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('system/smsAlert');
		$this->load->view('script');
	} 


}