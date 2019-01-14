<?php 

class Colorcard_model extends CI_Model{
	private $_table = 'cc';

	public $nama_warna;
	public $gambar;
	public $id_barang;

	public function rules(){
		return [
			[
				'field' => 'nama_warna',
				'label' => 'nama_warna',
				'rules' => 'required'
			],
			[
				'field' => 'id_barang',
				'label' => 'id_barang',
				'rules' => 'required'
			]
		];
	}

	public function getAll(){
		$this->db->select('*');
		$this->db->from($this->_table);
		$this->db->join('barang', 'barang.id_barang = cc.id_barang', 'inner');
		return $this->db->get()->result();
	}

	public function fetchData($query){
		$this->db->select('*');
		$this->db->from($this->_table);
		$this->db->join('barang', 'barang.id_barang = cc.id_barang', 'inner');
		$this->db->like('nama_warna', $query);
		$query = $this->db->get();

		if($query->num_rows() > 0){
			foreach ($query->result_array() as $key => $row) {
				$output[] = array(
					'nama_warna' => $row['nama_warna'],
					'gambar' => $row['gambar']
				);
			}
			echo json_encode($output);
		}
	}

	public function getById($id){
		return $this->db->get_where($this->_table, ['id_cc' => $id])->row();
	}

	public function save(){
		$post = $this->input->post();
		$this->nama_warna = $post['nama_warna'];
		$this->gambar = $this->_uploadImage();
		$this->id_barang = $post['id_barang'];

		return $this->db->insert($this->_table, $this);
	}

	public function update(){
		$post = $this->input->post();
		$this->nama_warna = $post['nama_warna'];
		
		if(!empty($_FILES['gambar']['name'])){
			$this->_deleteImage($post['id_cc']);
			$this->gambar = $this->_uploadImage();
		}else{
			$this->gambar = $post['gambar_lama'];
		}
		$this->id_barang = $post['id_barang'];

		return $this->db->update($this->_table, $this, array('id_cc' => $post['id_cc']));
	}

	public function delete($id){
		$this->_deleteImage($id);
		return $this->db->delete($this->_table, array('id_cc' => $id));
	}

	private function _uploadImage(){
		$config['upload_path']		= './assets/img/upload/cc/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['file_name']		= uniqid();
		$config['overwrite']		= true;
		$config['max_size']			= 1024;

		$this->load->library('upload', $config);
		if($this->upload->do_upload('gambar')){
			return $this->upload->data("file_name");
		}
		echo $config['file_name'];
		die();

		return 'default.jpg';
	}

	public function _deleteImage($id){
		$cc = $this->getById($id);

		unlink('assets/img/upload/cc/'.$cc->gambar);
	}
}