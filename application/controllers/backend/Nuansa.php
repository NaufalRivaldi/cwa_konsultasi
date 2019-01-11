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
		$this->auth_model->cek_session();

		$data['nuansa'] = $this->nuansa_model->getAll();
		$this->load->view('backend/nuansa/list', $data);
	}

	public function setColor($id){
		$this->auth_model->cek_session();
		
		$data['nuansa'] = $this->nuansa_model->getById($id);
		$this->load->view('backend/nuansa/color', $data);
	}

	public function add(){
		$this->auth_model->cek_session();

		$nuansa = $this->nuansa_model;
		$validation = $this->form_validation;
		$validation->set_rules($nuansa->rules());

		if($validation->run()){
			$nuansa->save();
			$this->session->set_flashdata('success', 'Data berhasil ditambahkan.');
			redirect('backend/nuansa');
		}

		$data['jenis'] = $this->db->get('jenis')->result();
		$this->load->view('backend/nuansa/new_form', $data);
	}

	public function edit($id = null){
		$this->auth_model->cek_session();

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
		$data['jenis'] = $this->db->get('jenis')->result();
		$this->load->view('backend/nuansa/edit_form', $data);
	}

	public function delete($id){
		$this->auth_model->cek_session();
		
		if(!isset($id)) show_404();
		$this->nuansa_model->_deleteImage($id);

		if($this->nuansa_model->delete($id)){
			$this->session->set_flashdata('success', 'Data telah dihapus.');
			redirect('backend/nuansa');
		}
	}
}
