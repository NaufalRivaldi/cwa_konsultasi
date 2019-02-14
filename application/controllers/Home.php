<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('artikel_model');
		$this->load->model('nuansa_model');
		$this->load->model('warna_model');
		$this->load->model('barang_model');
	}
	
	public function index()
	{
		$data['artikel'] = $this->artikel_model->get_new_artikel(3);
		$this->load->view('frontend/index', $data);
	}

	public function konsultasi($pilih = null, $id = null, $kd_merk = null, $collapse = null){
		if(!empty($pilih)){
			$data['nuansa'] = $this->nuansa_model->viewNuansa($pilih);
			if(!empty($id)){
				$cc = $this->db->get_where('cc', ['id_cc' => $id])->row();
				$data['barang'] = $this->barang_model->raw($cc->nama_warna, $kd_merk);
				$data['barang_lain'] = $this->barang_model->rawOther($cc->nama_warna, $kd_merk);
				$data['gambar_cc'] = $cc->gambar;
			}
			$data['id'] = $id;
			$data['pilih'] = $pilih;
			$data['collapse'] = $collapse;

			$this->load->view('frontend/step2.php', $data);
		}else{
			$this->load->view('frontend/step1.php');
		}
	}

	public function showArtikel($page=null){
		$per_halaman = 6;
		//menghitung offset (data dalam table)
		if($page == null) {
			$offset = 0;
		} else {
			$offset = ($page * $per_halaman) - $per_halaman;
		}

		$data['artikel'] = $this->artikel_model->get_home_artikel($per_halaman, $offset);
		$art = $this->db->where_not_in('id_kategori', 1)->get('artikel')->num_rows();
		$data['paginate'] = $this->artikel_model->pagination_artikel($art);
		$this->load->view('frontend/artikel', $data);
	}

	public function artikel($key){
		$data['artikel'] = $this->artikel_model->get_artikel($key);
		$data['popular_artikel'] = $this->artikel_model->get_popular_artikel();
		$this->artikel_model->click($key);
		
		$this->load->view('frontend/show_artikel.php', $data);
	}
}
