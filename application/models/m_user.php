<?php
class M_User extends CI_Model{
	function get_dokter(){
		return $this->db->get('dokter')->result_array();
	}
	function get_detail($id_dokter){
		return $this->db->where('dokter.id_dokter', $id_dokter)->limit(1)->get('dokter')->row();
	}
}
?>