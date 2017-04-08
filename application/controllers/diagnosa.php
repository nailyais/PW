<?php
class Diagnosa extends CI_Controller{
	function index(){
		$data['gejala'] = $this->m_diagnosa->get_gejala(); 
		 $this->load->view('header');
		 $this->load->view('diagnosa', $data);
		 $this->load->view('footer');
	}
	function get_penyakit($id_gejala = NULL, $id_penyakit){
		if($id_gejala != NULL && $id_penyakit){
			$data['show_penyakit'] = $this->m_diagnosa->get_penyakit($id_gejala);
			$data['show_gejala'] = $this->m_diagnosa->get_all_gejala($id_penyakit);

			$this->load->view('header');
			$this->load->view('hasil_diagnosa', $data);
			$this->load->view('footer');
		}
	}
	function get_dokter($id_penyakit = NULL){
		if($id_penyakit != NULL){
			$data['show_dokter'] = $this->m_diagnosa->get_dokdok($id_penyakit);

			$this->load->view('header');
			$this->load->view('dokter', $data);
			$this->load->view('footer');
		}
	}
}
?>