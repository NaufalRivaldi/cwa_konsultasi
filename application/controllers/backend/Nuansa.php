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

	public function setColor($id){
		
		
		$data['nuansa'] = $this->nuansa_model->getById($id);
		$this->load->view('backend/nuansa/color', $data);
	}

	public function add(){
		$nuansa = $this->nuansa_model;
		$validation = $this->form_validation;
		$validation->set_rules($nuansa->rules());

		if($validation->run()){
			$nuansa->save();
			$this->session->set_flashdata('success', 'Data berhasil ditambahkan.');
			redirect('backend/nuansa');
		}

		$this->load->view('backend/nuansa/new_form');
	}

	public function edit($id = null){
		if(!isset($id)) redirect('backend/nuansa/');

		$nuansa = $this->nuansa_model;
		$validation = $this->form_validation;
		$validation->set_rules($nuansa->rules());

		if($validation->run()){
			$nuansa->update();
			$this->session->set_flashdata('success', 'Data berhasil diedit.');
			redirect('backend/nuansa');
		}

		$data['nuansa'] = $nuansa->getById($id);
		$this->load->view('backend/nuansa/edit_form', $data);
	}

	public function delete($id){
		if(!isset($id)) show_404();
		$this->nuansa_model->_deleteImage($id);

		if($this->nuansa_model->delete($id)){
			$this->session->set_flashdata('success', 'Data telah dihapus.');
			redirect('backend/nuansa');
		}
	}
}
