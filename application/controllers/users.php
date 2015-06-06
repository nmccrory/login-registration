<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->output->enable_profiler(FALSE);
	}
	public function index()
	{
		$this->load->view('index');
	}

	public function create()
	{
		$this->load->model('user');
		if($this->user->validate_reg($this->input->post()) == FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
		}else{
			$this->user->create($this->input->post());
			$this->session->set_flashdata('success', 'User was created successfully!');
		}
		redirect('/');
	}
	public function login()
	{
		$this->load->model('user');
		if($this->user->validate_login($this->input->post()) === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
		}
		$user = $this->user->find_user($this->input->post());

		$this->load->view('welcome', array('user'=>$user));
	}

}