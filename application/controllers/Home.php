<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('artikel_model');
	}
	
	public function index()
	{
		$data['artikel'] = $this->artikel_model->get_new_artikel(3);
		$this->load->view('frontend/index', $data);
	}

	public function konsultasi(){
		$this->load->view('frontend/step1.php');
	}
}
