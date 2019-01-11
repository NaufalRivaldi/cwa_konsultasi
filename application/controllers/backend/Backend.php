<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->auth_model->cek_session_kosong();
		$this->load->view('backend/index');
	}

	public function dashboard(){
		$this->auth_model->cek_session();
		$this->load->view('backend/dashboard');
	}


	// login method
	public function login(){
		$user = $this->user_model;
		$validation = $this->form_validation;
		$validation->set_rules($user->rules());

		if($validation->run()){
			$data['user'] = $user->login();

			if(count($data['user']) > 0){
				$new_user = array(
					'username' => $data['user']->username,
					'logged_in' => true
				);

				$this->session->set_userdata($new_user);
				redirect('backend/backend/dashboard');
			}else{
				$this->session->set_flashdata('danger', 'Username dan password tidak ditemukan.');
				redirect('backend/backend/');
			}
		}else{
			redirect('backend/backend/');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('backend/backend');
	}
}
