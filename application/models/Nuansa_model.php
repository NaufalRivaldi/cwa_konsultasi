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

	public function update(){
		$post = $this->input->post();
		$this->id_nuansa = $post['id_nuansa'];
		$this->nama_nuansa = $post['nama_nuansa'];
		$this->kategori = $post['kategori'];
		
		if(!empty($_FILES['gambar']['name'])){
			$this->gambar = $this->_uploadImage();
			$this->_deleteImage($post['id_nuansa']);
			$this->warna = "default";
		}else{
			$this->gambar = $post['gambar_lama'];
		}

		$this->db->update($this->_table, $this, array('id_nuansa' => $post['id_nuansa']));
	}

	public function delete($id){
		return $this->db->delete($this->_table, array('id_nuansa' => $id));
	}

	// image Upload & delete
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

	public function _deleteImage($id){
		$nuansa = $this->getById($id);

		unlink('assets/img/upload/'.$nuansa->gambar);
	}
}
