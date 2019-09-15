<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Model {

	/**
	 *Model 	 : Login_user
	 *Author     : Vikas Sharma
	 *Date       : October 12. 2017
	 *Modify     : By : Vikas On 17 Octobrt 2017
	 */
	 function __construct() {
        parent::__construct();
       // $this->load->library('database');
    }

	public function usercheck($data)
	{
		$userdetail= $this->input->post();
		$userdata = array('username' => $userdetail['uname'],
						  'password' => $userdetail['password'],
						  'desc' => $userdetail['desc'],
						  'type' => $userdetail['type'], );
		return $this->db->insert('user',$userdata);

	}
	public function logincheck($userdata)
	{
		$username = $userdata['uname'];
		$password = $userdata['password'];
		$this->db->select('*');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$this->db->from('user');
	    $data= $this->db->get();
	    //print_r($data);die();
	    if($data->num_rows() > 0)
	    {
	    $query_q = $data->row();
	    return $query_q->id;
		}
		else
		{
			return FALSE;
		}
	}
	public function login_manage()
	{
		$udata = array('u_id'=> $this->session->userdata('user_id'));
		$this->db->insert('login_detail',$udata);
	}
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get()->result(); // it will return array of objects if we need to fetch in array only then use (result_array();)
		return $query;
	}
	public function userdata($uid)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id',$uid);
		$user_rec= $this->db->get()->result();
		return $user_rec;
	}
	public function edit_user()
	{
		$u=$this->input->post();
		$user_id =$u['uid'];
		//print_r($u);die();
		$udata = array('username' => $u['uname'],
					   'password' => $u['password'],
					   'desc' => $u['desc'],
					   'type' => $u['type']);
		$this->db->where('id',$user_id);
		$this->db->update('user',$udata);
		return true;
	}
	public function delete_user($u_id)
	{
		$this->db->where('id',$u_id);
		$this->db->delete('user');
		return true;
	}
}