<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		$this->load->view('frontend/index');
	}

	public function konsultasi(){
		$this->load->view('frontend/step1.php');
	}
}
