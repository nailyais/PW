<?php
class Diagnosa extends CI_Controller{
	function index(){
		$data['gejala'] = $this->m_diagnosa->get_gejala(); 
		 $this->load->view('header');
		 $this->load->view('diagnosa', $data);
		 $this->load->view('footer');
	}
}
?>