<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

	private $_table = 'user';

	public $username;
	public $password;

	public function rules(){
		return [
			[
				'field' => 'username',
				'label' => 'username',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'password',
				'rules' => 'required'
			]
		];
	}

	public function login(){
		$post = $this->input->post();
		$username = $post['username'];
		$password = sha1($post['password']);

		return $this->db->get_where($this->_table, ['username' => $username, 'password' => $password])->row();
	}
}