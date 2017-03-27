<?php
class M_Diagnosa extends CI_Model{
	function get_gejala(){
		return $this->db->get('gejala')->result_array();
	}
	function get_penyakit($id_gejala){
		$query = $this->db->query('SELECT penyakit.nm_penyakit, penyakit.id_penyakit FROM penyakit INNER JOIN gejala ON penyakit.id_penyakit=gejala.id_penyakit where id_gejala= ' . $id_gejala . '');
		$query_row = $query->row();
		return $query_row;
	}
	function get_all_gejala($id_penyakit){
		$query = $this->db->query("SELECT gejala.nm_gejala, penyakit.nm_penyakit from penyakit INNER JOIN gejala on penyakit.id_penyakit = gejala.id_penyakit where penyakit.id_penyakit = " . $id_penyakit . "");
		$query_row = $query->result_array();
		return $query_row;
	}
	function get_all($id_penyakit){
		$query = $this->db->query("SELECT gejala.nm_gejala, penyakit.nm_penyakit from penyakit INNER JOIN gejala on penyakit.id_penyakit = gejala.id_penyakit where penyakit.id_penyakit = " . $id_penyakit . "");
		$query_row = $query->row();
		return $query_row;
	}
}
?>