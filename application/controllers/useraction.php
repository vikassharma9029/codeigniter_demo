<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Useraction extends CI_Controller {

	/**
	 *Controller : Useraction
	 *Author     : Vikas Sharma
	 *Date       : October 12. 2017
	 *Modify     : By : Vikas On 17 Octobrt 2017
	 */
	 function __construct() {
        parent::__construct();
        $this->load->model('login_user');
        $this->load->helper('form');
    }

    public function listing()
	{
		if(empty($this->session->userdata('user_id')))
		{
			redirect('login');
		}
		else{
		$data['listing'] = $this->login_user->listing();
		$this->load->view('Login/listing',$data);
		}
	}
	public function userdata($user_id)
	{
		//echo $user_id;exit();
		$user_info['user_rec']=$this->login_user->userdata($user_id);
		$this->load->view('edit_user',$user_info);
	}
	public function edit_user()
	{
	$da= $this->login_user->edit_user();
	$this->session->set_flashdata('msg','Your data has been successfully updated!..');
	redirect('listing');
	}
	public function userdelete($u_id)
	{
		//print_r($u_id);exit();
		$del['user_delete'] = $this->login_user->delete_user($u_id);
		redirect('listing');
	}
}