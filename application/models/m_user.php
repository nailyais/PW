<?php
class M_User extends CI_Model{
	function add_user($nik, $nm_user, $status, $jk, $tgl_lahir, $alamat, $hp){
		$data = array('nik' =>$nik ,
 						  'nm_user' =>$nm_user,
 						  'status' =>$status,
 						  'jk' =>$jk,
 						  'tgl_lahir' =>$tgl_lahir,
 						  'tgl_register' => date('Y-m-d'),
 						  'alamat' =>$alamat,
 						  'hp' =>$hp
 						  );
		return $this->db->insert('user', $data);
	}
	function get_dokdokter($id_dokter){
		$query = $this->db->query("SELECT poli.id_poli, dokter.id_dokter, penyakit.id_penyakit, dokter.nm_dokter, dokter.image, dokter.hari_hadir from penyakit join poli on penyakit.id_poli = poli.id_poli join dokter on poli.id_dokter = dokter.id_dokter where dokter.id_dokter = " . $id_dokter . "");
		$query_row = $query->row();
		return $query_row;
	}
	function get_user($nik){
		$query = $this->db->get_where('user', array('nik'=> $nik));
 		return $query->num_rows();
	}
	function get_antrian($id_poli){
		$query = $this->db->query("SELECT `no_antrian` FROM antrian where id_poli = " . $id_poli ." and status = 'Aktif' LIMIT 1");
		return $query->row();
	}
	function get_book($id_dokter, $getnik, $id_poli, $get_antrian, $tgl_realisasi){
		$data = array('id_dokter' =>$id_dokter ,
 						  'nik' =>$getnik,
 						  'id_poli' =>$id_poli,
 						  'no_antrian' =>$get_antrian,
 						  'tgl_realisasi' =>$tgl_realisasi
 						  );
		return $this->db->insert('booking', $data);
	}
	function update_status($no_antrian){
		$query = $this->db->query("UPDATE `antrian` SET `status`= 'Pasif' where `no_antrian` = '" . $no_antrian . "'");
		return $query;
	}
	function report($no_antrian){
		$query = $this->db->query("SELECT dokter.id_dokter, dokter.nm_dokter, poli.nm_poli, booking.no_antrian, booking.nik, user.nm_user, booking.tgl_realisasi from booking Inner join dokter on booking.id_dokter = dokter.id_dokter Inner join poli on booking.id_poli = poli.id_poli Inner join user on booking.nik = user.nik where booking.no_antrian = '" .$no_antrian. "'");
		return $query->row();
	}
}
?>