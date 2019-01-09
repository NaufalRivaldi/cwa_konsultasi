<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('backend/index');
	}

	public function dashboard(){
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

				$this->session->set_user($new_user);
				redirect('backend/backend/dashboard');
			}
		}else{
			redirect('backend/backend/');
		}
	}
}
