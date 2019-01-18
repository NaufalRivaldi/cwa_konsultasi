<?php 

class Barang_model extends CI_Model{
	public function raw($nama_warna){
		return $this->db->query("SELECT * FROM raw WHERE nm_barang like '%".$nama_warna."%' and harga != 0 group by nm_barang")->result();
	}
}