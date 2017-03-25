<?php
class M_Diagnosa extends CI_Model{
	function get_gejala(){
		return $this->db->get('gejala')->result_array();
	}
}
?>