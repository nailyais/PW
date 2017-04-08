<?php
class M_Diagnosa extends CI_Model{
	function get_gejala(){
		return $this->db->get('gejala')->result_array();
	}
	function get_penyakit($id_gejala){
		$query = $this->db->query('SELECT gejala.id_gejala, penyakit.nm_penyakit, penyakit.id_penyakit FROM penyakit INNER JOIN gejala ON penyakit.id_penyakit=gejala.id_penyakit where id_gejala= ' . $id_gejala . '');
		$query_row = $query->row();
		return $query_row;
	}
	function get_all_gejala($id_penyakit){
		$query = $this->db->query("SELECT gejala.nm_gejala, penyakit.nm_penyakit from penyakit INNER JOIN gejala on penyakit.id_penyakit = gejala.id_penyakit where penyakit.id_penyakit = " . $id_penyakit . "");
		$query_row = $query->result_array();
		return $query_row;
	}
	function get_dokdok($id_penyakit){
		$query = $this->db->query("SELECT poli.id_poli, dokter.id_dokter, penyakit.id_penyakit, dokter.nm_dokter, dokter.image, dokter.hari_hadir from penyakit join poli on penyakit.id_poli = poli.id_poli join dokter on poli.id_dokter = dokter.id_dokter where penyakit.id_penyakit = " . $id_penyakit . "");
		$query_row = $query->result_array();
		return $query_row;
	}
}
?>