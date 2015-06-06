<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->output->enable_profiler(FALSE);
	}
	public function index()
	{
		$this->load->view('index');
	}

	public function validate_reg($post)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', "First Name", 'required|trim|alpha');
		$this->form_validation->set_rules('last_name', "Last Name", 'required|trim|alpha');
		$this->form_validation->set_rules('email', "Email", 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', "Password", 'required|trim|min_length[6]|matches[confirm_password]|md5');
		$this->form_validation->set_rules('confirm_password', "Confirm Password",'required|trim|md5');

		if($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}else{
			return TRUE;
		}
	}
	public function create($userinfo){
		$query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) VALUES (?,?,?,?,NOW(),NOW())";
		$values = array($userinfo['first_name'], $userinfo['last_name'], $userinfo['email'], $userinfo['password']);
		$this->db->query($query, $values);
	}

	public function validate_login($post){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', "Email", 'required|valid_email');
		$this->form_validation->set_rules('password', "Password", 'required|trim|md5');
		$this->form_validation->set_rules('confirm_password', "Confirm Password",'required|trim|md5');

		if($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}else{
			return TRUE;
		}

	}
	public function find_user($userinfo){
		$query = "SELECT * FROM users WHERE email = ? AND password = ?";
		$values = array($userinfo['email'], $userinfo['password']);
		$result = $this->db->query($query, $values)->row_array();
		return $result;
	}

}