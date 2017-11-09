<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {

public function __construct()
{
	parent :: __construct();
	$this->load->helper('url');
}

public function index()
{
	$data = array(
		"message" =>"ridwan"
	);
	$this->load->view('welcome', $data);
}

}


?>
