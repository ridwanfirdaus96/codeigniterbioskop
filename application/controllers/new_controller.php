<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class new_controller extends CI_Controller{
	public function index()
	{
		$this->load->view('new');
	}

	public function contact()
	{
		$this->load->view('contact');
	}
}
