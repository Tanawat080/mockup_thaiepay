<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('css');
		$this->load->view('top-bar');
		$this->load->view('right-sidebar');
		$this->load->view('home');
		$this->load->view('footer');
		$this->load->view('script');

	}public function signIn()
	{
		$this->load->view('css');
		$this->load->view('sign-in');
		$this->load->view('script');

	}
}
