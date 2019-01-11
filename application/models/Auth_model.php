<?php 

class Auth_model extends CI_Model{
	public function cek_session(){
		if($this->session->userdata('logged_in') != true){
			$this->session->set_flashdata('danger', 'Harap melakukan login terlebih dahulu.');
			redirect('backend');
		}
	}

	public function cek_session_kosong(){
		if($this->session->userdata('logged_in') == true){
			redirect('backend/backend/dashboard');
		}
	}
}