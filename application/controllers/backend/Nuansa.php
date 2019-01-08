<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nuansa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('nuansa_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['nuansa'] = $this->nuansa_model->getAll();
		$this->load->view('backend/nuansa/list', $data);
	}

	public function add(){
		$nuansa = $this->nuansa_model;
		$validation = $this->form_validation;
		$validation->set_rules($nuansa->rules());

		if($validation->run()){
			$nuansa->save();
			redirect('backend/nuansa');
			// $this->session->set_flashdata('success', 'Data berhasil ditambahkan.');
		}

		$this->load->view('backend/nuansa/new_form');
	}
}
