<?php
class Diagnosa extends CI_Controller{
	function index(){
		$data['gejala'] = $this->m_diagnosa->get_gejala(); 
		 $this->load->view('header');
		 $this->load->view('diagnosa', $data);
		 $this->load->view('footer');
	}
	function get_penyakit($id_gejala = NULL){
		if($id_gejala != NULL){
			$data['show_penyakit'] = $this->m_diagnosa->get_penyakit($id_gejala);
			//$penyakit= $this->m_diagnosa->get_all_gejala($id_penyakit);
			//$id = 'id_penyakit' . $penyakit->id_gejala;
			//$id_penyakit = $this->input->post($id);
			$this->load->view('header');
			$this->load->view('hasil_diagnosa', $data);
			$this->load->view('footer');
		}
	}
	function get_gejala($id_penyakit = NULL){
		if($id_penyakit != NULL){
			$data['show_gejala'] = $this->m_diagnosa->get_all_gejala($id_penyakit);
			$data['show_penyakitt'] = $this->m_diagnosa->get_all($id_penyakit);
			$this->load->view('header');
			$this->load->view('hasil_gejala', $data);
			$this->load->view('footer');
		}
	}
}
?>