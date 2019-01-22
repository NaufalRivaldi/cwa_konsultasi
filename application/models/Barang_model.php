<?php 

class Barang_model extends CI_Model{
	public function raw($nama_warna, $kd_merk){
		return $this->db->query("SELECT * FROM raw WHERE nm_barang like '%".$nama_warna."%' and kd_merk like '%".$kd_merk."%' and harga != 0 group by nm_barang")->result();
	}

	public function rawOther($nama_warna, $kd_merk){
		return $this->db->query("SELECT * FROM raw WHERE nm_barang like '%".$nama_warna."%' and harga != 0 and kd_merk NOT IN('".$kd_merk."') group by nm_barang")->result();
	}
}