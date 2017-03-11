<?php
class Dokter extends CI_Controller{
	function index(){
		$data['show_dokter'] = $this->m_dokter->get_dokter(); 
		 $this->load->view('header');
		 $this->load->view('dokter', $data);
		 $this->load->view('footer');
	}
}
?>