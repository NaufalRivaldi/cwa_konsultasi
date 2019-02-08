<?php 

class Colorcard extends CI_Controller{
	public function __construct(){
		parent::__construct();

		$this->load->model('colorcard_model');
		$this->load->library('form_validation');
	}

	public function index(){
		$this->auth_model->cek_session();

		$data['cc'] = $this->colorcard_model->getAll();
		$this->load->view('backend/cc/list', $data);
	}

	public function add(){
		$this->auth_model->cek_session();

		$color_card = $this->colorcard_model;
		$validation = $this->form_validation;
		$validation->set_rules($color_card->rules());

		if($validation->run()){
			$color_card->save();
			$this->session->set_flashdata('success', 'Data berhasil di simpan.');
			redirect('backend/colorcard/');
		}


		$data['barang'] = $this->db->order_by('nm_barang', 'asc')->get('barang')->result();
		$this->load->view('backend/cc/new_form', $data);
	}

	public function addFast(){
		$this->auth_model->cek_session();

		$color_card = $this->colorcard_model;
		$validation = $this->form_validation;
		$validation->set_rules($color_card->rules());

		if($validation->run()){
			$color_card->saveFast();
			$this->session->set_flashdata('success', 'Kumpulan Data berhasil di simpan.');
			redirect('backend/colorcard/');
		}


		$data['barang'] = $this->db->order_by('nm_barang', 'asc')->get('barang')->result();
		$this->load->view('backend/cc/fast_upload', $data);
	}

	public function edit($id = null){
		$this->auth_model->cek_session();

		if(empty($id)) redirect('backend/colorcard');

		$color_card = $this->colorcard_model;
		$validation = $this->form_validation;
		$validation->set_rules($color_card->rules());

		if($validation->run()){
			$color_card->update();
			$this->session->set_flashdata('success', 'Data berhasil diedit.');
			redirect('backend/colorcard/');
		}

		$data['barang'] = $this->db->order_by('nm_barang', 'asc')->get('barang')->result();
		$data['cc'] = $this->colorcard_model->getById($id);

		$this->load->view('backend/cc/edit_form', $data);
	}

	public function delete($id){
		$this->auth_model->cek_session();
		
		if(empty($id)) show_404();

		$this->colorcard_model->_deleteImage($id);
		if($this->colorcard_model->delete($id)){
			$this->session->set_flashdata('success', 'Data berhasil di hapus.');
			redirect('backend/colorcard/');
		}
	}

	public function fetch(){
		echo $this->colorcard_model->fetchData($this->uri->segment(4));
	}
}