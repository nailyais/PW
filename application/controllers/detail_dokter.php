<?php
class Detail_dokter extends CI_Controller{
	public function index(){
		 $this->load->view('header');
		 $this->load->view('detail_dokter');
		 $this->load->view('footer');
	}
	function detail($id_dokter = NULL){
			if ($id_dokter != NULL){
				$data['detail_dokter'] = $this->m_dokter->get_detail($id_dokter);
				//$data['show_price'] = $this->model_show->get_price($id_show);
				//$data['ticket'] = $this->model_show->ticket_detail($id_show);
				//$data['venue'] = $this->model_show->get_venue($id_show);
				//$data['detail'] = $this->model_show->get_show_detail($id_show);

				$this->load->view('header');
				$this->load->view('detail_dokter', $data);
				$this->load->view('footer');
			}	
			else{
				redirect('home');
			}
		}
}
?>