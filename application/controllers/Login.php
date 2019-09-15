<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 *Controller : Login
	 *Author     : Vikas Sharma
	 *Date       : October 12. 2017
	 *Modify     : By : Vikas On 17 Octobrt 2017
	 */
	 function __construct() {
        parent::__construct();
        $this->load->model('login_user');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$this->load->view('Login/login');
	}
	public function register()
	{
		$this->load->view('register');
	}

	public function Check()
	{
		$this->form_validation->set_rules('uname', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		 if ($this->form_validation->run() == TRUE){
		$user_data = $this->input->post();
		$login_check = $this->login_user->logincheck($user_data);
		if ($login_check) {
			$this->session->set_userdata('user_id',$login_check);
			$this->login_user->login_manage(); // This fun is for insert data in login_details table.
			redirect('useraction/listing');
		}
		else
		{
			$this->session->set_flashdata('failed','Sorry you have entred wrong credentials please check');
			$this->load->view('Login/login');
		}
	}
else{
	$this->session->set_flashdata('failed','Please make sure you have enter right credentials');
	$this->load->view('Login/login');
	}
	}
	public function register_user()
	{
		$this->form_validation->set_rules('uname', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('desc', 'Description', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
		if($this->form_validation->run() == TRUE)
		{
		$data = $this->input->post();
		$usr_data = $this->login_user->usercheck($data);
		if($usr_data)
		{
			$this->session->set_flashdata('usercheck','data has been successfully inserted');
			$this->load->view('register', $usr_data);
		}
		else
		{
			$this->session->set_flashdata('usercheck','There is some problem in inserting a data');
			$this->load->view('register', $usr_data);
		}
	}
	else{
			$this->session->set_flashdata('usercheck','Please make sure you have filled all details');
			$this->load->view('register');
	}	
	}
	public function logout()
	{
		$this->session->unset_userdata('user_id');
		redirect('login');
	}

	
}