<?php 

class Artikel_model extends CI_Model{
	private $_table = 'artikel';

	public function get_home_artikel($per_halaman, $offset){
		return $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
						->order_by('tanggal', 'desc')
						->where('stat', 1)
						->limit($per_halaman, $offset)
						->get('artikel')->result_array();
	}
	public function get_new_artikel($limit){
		return $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
						->order_by('tanggal', 'desc')
						->where('stat', 1)
						->get('artikel',$limit)->result_array();
	}
	public function get_popular_artikel(){
		return $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
						->order_by('click', 'desc')
						->where('stat', 1)
						->get('artikel',3)->result_array();
	}
}