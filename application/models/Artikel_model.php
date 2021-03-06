<?php 

class Artikel_model extends CI_Model{
	private $_table = 'artikel';

	public function get_home_artikel($per_halaman, $offset){
		return $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
						->order_by('tanggal', 'desc')
						->where('stat', 1)
						->limit($per_halaman, $offset)
						->where_not_in('artikel.id_kategori', 1)
						->get('artikel')->result_array();
	}
	public function get_new_artikel($limit){
		return $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
						->order_by('tanggal', 'desc')
						->where('stat', 1)
						->where_not_in('artikel.id_kategori', 1)
						->get('artikel',$limit)->result_array();
	}
	public function get_popular_artikel(){
		return $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
						->order_by('click', 'desc')
						->where('stat', 1)
						->where_not_in('artikel.id_kategori', 1)
						->get('artikel',3)->result_array();
	}

	public function get_artikel($key){
		return $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
						->where('stat', 1)
						->where('link', $key)
						->get('artikel')->row();
	}

	public function click($link){
		$click = $this->db->select('click')->get_where($this->_table, ['link' => $link])->row();
		$click->click += 1;
		
		return $this->db->set('click', $click->click)->where('link', $link)->update($this->_table);
	}

	public function pagination_artikel($totRows){
		$config['base_url'] = base_url('home/showartikel/');
		$config['total_rows'] = $totRows;
		$config['per_page'] = 6;
		$config['use_page_numbers'] = true;

		$config['num_tag_open'] = "<li class='page-item'><div class='page-link'>";
		$config['num_tag_close'] = "</div></li>";
		$config['cur_tag_open'] = "<li class='page-item active'><div class='page-link'>";
		$config['cur_tag_close'] = "</div></li>";
		$config['next_tag_open'] = "<li class='page-item'><div class='page-link'>";
		$config['next_tag_close'] = "</div></li>";
		$config['prev_tag_open'] = "<li class='page-item'><div class='page-link'>";
		$config['prev_tag_close'] = "</div></li>";
		$config['last_tag_open'] = "<li class='page-item'><div class='page-link'>";
		$config['last_tag_close'] = "</div></li>";
		$config['first_tag_open'] = "<li class='page-item'><div class='page-link'>";
		$config['first_tag_close'] = "</div></li>";


		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}
}