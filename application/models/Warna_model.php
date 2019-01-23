<?php 

class Warna_model extends CI_Model{
	private $_table = 'warna';

	public $id_nuansa;
	public $id_cc;

	public function rules(){
		return [
			[
				'field' => 'id_nuansa',
				'label' => 'id_nuansa',
				'rules' => 'required'
			]
		];
	}

	public function setColor(){
		$post = $this->input->post();		
		
		for ($i=0; $i < count($post['nama_warna']); $i++) { 
			$row = explode('-', $post['nama_warna'][$i]);
			$this->id_nuansa = $post['id_nuansa'];
			$this->id_cc = $this->changeId($row[1]);

			$this->db->insert($this->_table, $this);
		}

		return true;

	}

	public function changeId($data){
		$id_cc = $this->db->get_where('cc', ['nama_warna' => $data])->row();
		return $id_cc->id_cc;
	}

	public function getById($id){
		$this->db->select('*');
  		$this->db->from('warna');
  		$this->db->join('cc', 'warna.id_cc = cc.id_cc', 'inner');
  		return $this->db->where(['warna.id_nuansa' => $id])->get()->result();
	}
}