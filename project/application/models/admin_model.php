<?php
class Admin_model extends CI_Model{
	function check_user($insert_user,$insert_pass){
		$user = $insert_user;
		$pass = $insert_pass;
		$query = $this->db->get_where('admin',array('username' => $user, 'password' => ($pass)));
		return $query->num_rows(); //mnghitung jumlah record
	}
}
