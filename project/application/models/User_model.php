<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	

	public function register()
	{
		$name = $this->input->post('name');
		$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$telepone = $this->input->post('telepone');
		$address = $this->input->post('address');

		$insert =array('name' => $name,
			'id_user' => $id_user,
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'telepone' => $telepone,
			'address' => $address);

		$query = $this->db->insert('user', $insert);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->where('username', $username)
							->where('password', $password)
							->get('user');

		if ($query->num_rows() > 0){
			$array = array(
				'username' =>$username,
				'status_login' =>TRUE);
			$this->session->set_userdata( $array );
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
public function userview(){
	$query=$this->db->get('user');
		if($query ->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return array();
		}
}	

}
