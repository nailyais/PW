<?php
class User extends CI_Controller{
	function user_get($id_dokter = NULL){
		if($id_dokter != NULL){
			$data['show_dokter'] = $this->m_user->get_dokdokter($id_dokter);
			$this->load->view('header');
		 	$this->load->view('reg_user', $data);
		 	$this->load->view('footer');
		}
	}
	function add_user($id_dokter = NULL){
		if($id_dokter != NULL){
		$nik = $this->input->post('nik');
		$nm_user = $this->input->post('nm_user');
		$status = $this->input->post('status');
		$jk = $this->input->post('jk');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$hp = $this->input->post('hp');

		$this->m_user->add_user($nik, $nm_user, $status, $jk, $tgl_lahir, $alamat, $hp);
		$userdata = array(
					'nik'=> $nik,
					'logged_in' => TRUE
		);
		$this->session->set_userdata($userdata);
		$data['show_dokter'] = $this->m_user->get_dokdokter($id_dokter);
		$this->load->view('header');
		$this->load->view('tanggal', $data);
		$this->load->view('footer');
		}
	}
	function viaNIK($id_dokter = NULL){
		if($id_dokter != NULL){
			$data['show_dokter'] = $this->m_user->get_dokdokter($id_dokter);

			$this->load->view('header');
			$this->load->view('via_nik', $data);
			$this->load->view('footer');

			$nik = $this->input->post('nik');
			$nim = $this->m_user->get_user($nik);
			if($nim == 1){
				$userdata = array(
					'nik'=> $nik,
					'logged_in' => TRUE);
				//redirect(base_url('user/check_session'));
				$this->session->set_userdata($userdata);
			}
		}
		else{
			echo "Tidak berhasil";
		}
	}
	function tanggal_re($id_dokter = NULL){
		if($id_dokter != NULL){
			$data['show_dokter'] = $this->m_user->get_dokdokter($id_dokter);
			$this->load->view('header');
			$this->load->view('tanggal', $data);
			$this->load->view('footer');
		}
	}
	function booking($id_poli = NULL){
		if ($id_poli != NULL) {
			$nik = $this->session->userdata('nik');	
			$tgl_realisasi = $this->input->post('tgl_realisasi');
			$id_dokter = $this->input->post('id_dokter');
			$id_poli = $this->input->post('id_poli');
			$get_dok = $this->m_user->get_dokdokter($id_dokter);
			$get_poli = $get_dok->id_poli;
			$get_ant = $this->m_user->get_antrian($id_poli);
			//$data['show_antrian'] = $this->m_user->get_antrian($id_poli);

			if ($get_ant == 0){
				echo "<script type='text/javascript'>
                      alert('GAGAL Mengambil No Antrian, Antrian Sedang Penuh');</script>";
	                redirect(base_url('home'),'refresh');

			}
			else {
				$no_antrian = $get_ant->no_antrian;
				$this->m_user->get_book($id_dokter, $nik, $id_poli, $no_antrian, $tgl_realisasi);
				$this->m_user->update_status($no_antrian);
				redirect(base_url() . 'user/reportt/' . $no_antrian);
			}
		}
	}
	function reportt($no_antrian = NULL){
		if ($no_antrian != NULL) {

			$data['show_book'] = $this->m_user->report($no_antrian);

			$this->load->view('header');
			$this->load->view('report', $data);
			$this->load->view('footer');
		}
	}
}
?>