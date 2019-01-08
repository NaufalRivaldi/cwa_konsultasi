<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nuansa_model extends CI_Model {
	
	private $_table = 'nuansa';

	public $nama_nuansa;
	public $kategori;
	public $gambar;
	public $warna = "default";

	public function rules(){
		return [
			[
				'field' => 'nama_nuansa',
				'label' => 'nama_nuansa',
				'rules' => 'required'
			],
			[
				'field' => 'kategori',
				'label' => 'kategori',
				'rules' => 'required'
			]
		];
	}

	public function getAll(){
		return $this->db->get($this->_table)->result();
	}

	public function getById($id){
		return $this->db->get_where($this->_table, ['id_nuansa' => $id])->row();
	}

	public function save(){
		$post = $this->input->post();
		$this->nama_nuansa = $post['nama_nuansa'];
		$this->kategori = $post['kategori'];
		$this->gambar = $this->_uploadImage();

		$this->db->insert($this->_table, $this);
	}

	// image Upload
	private function _uploadImage(){
		$config['upload_path']		= './assets/img/upload/';
		$config['allowed_types']	= 'gif|jpg|png';
		$config['file_name']		= uniqid();
		$config['overwrite']		= true;
		$config['max_size']			= 1024;

		$this->load->library('upload', $config);
		if($this->upload->do_upload('gambar')){
			return $this->upload->data("file_name");
		}

		return 'default.jpg';
	}
}
