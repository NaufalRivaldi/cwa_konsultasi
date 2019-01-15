<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('artikel_model');
	}
	
	public function index()
	{
		$data['artikel'] = $this->artikel_model->get_new_artikel(3);
		$this->load->view('frontend/index', $data);
	}

	public function konsultasi(){
		$this->load->view('frontend/step1.php');
	}

	public function artikel($page=null){
		$per_halaman = 6;
		//menghitung offset (data dalam table)
		if($page == null) {
			$offset = 0;
		} else {
			$offset = ($page * $per_halaman) - $per_halaman;
		}

		$data['artikel'] = $this->artikel_model->get_home_artikel($per_halaman, $offset);
		$art = $this->db->get('artikel')->num_rows();
		$data['paginate'] = $this->artikel_model->pagination_artikel($art);
		$this->load->view('frontend/artikel', $data);
	}
}
