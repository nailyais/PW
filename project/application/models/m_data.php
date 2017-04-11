<?php 
 
class M_data extends CI_Model{
    function tampil_data(){
        return $this->db->get('antrian');
    }
 
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    function delete($no_antrian){
    	$this->db->where($no_antrian);
    	$this->db->delete('antrian');
    }

    function deleted($id_dokter){
        $this->db->where($id_dokter);
        $this->db->delete('dokter');
    }

    function deleteb($id_booking){
        $this->db->where($id_booking);
        $this->db->delete('booking');
    }

    function deleteg($id_gejala){
        $this->db->where($id_gejala);
        $this->db->delete('gejala');
    }

    function deletep($id_poli){
        $this->db->where($id_poli);
        $this->db->delete('poli');
    }

     function deleteu($NIK){
        $this->db->where($NIK);
        $this->db->delete('user');
    }


    function edit_data($where,$table){      
        return $this->db->get_where($table,$where);
    }
 
   function update_data($id){
        $no_antrian = $this->input->post('no_antrian');
        $status = $this->input->post('status');
        $id_poli = $this->input->post('id_poli');
 
        $data = array(
            
            'status' => $status,
            
            );
        $this->db->where('no_antrian', $id);
        $this->db->update('antrian', $data);
       // print_r($data);exit();
        
    }
    function update_datadokter($id){
        $id_dokter = $this->input->post('id_dokter');
        $nm_dokter = $this->input->post('nm_dokter');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $alamat = $this->input->post('alamat');
        $jk = $this->input->post('jk');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $tlp = $this->input->post('tlp');
        $hari_hadir = $this->input->post('hari_hadir');
        $jam_buka = $this->input->post('jam_buka');
        $jam_tutup = $this->input->post('jam_tutup');
        $image = $this->input->post('image');
        $deskripsi = $this->input->post('deskripsi');
 
        $data = array(
            
            'nm_dokter' => $nm_dokter,
            'username' => $username,
            'password' => $password,
            'alamat' => $alamat,
            'jk' => $jk,
            'tgl_lahir' => $tgl_lahir,
            'tlp' => $tlp,
            'hari_hadir' => $hari_hadir,
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'deskripsi' => $deskripsi,
            

            
            );
        $this->db->where('id_dokter', $id);
        $this->db->update('dokter', $data);
       // print_r($data);exit();
        
    }
    function update_databooking($id){
        $id_booking = $this->input->post('id_booking');
        $id_dokter = $this->input->post('id_dokter');
        $NIK = $this->input->post('NIK');
        $id_poli = $this->input->post('id_poli');
        $no_antrian = $this->input->post('no_antrian');
        $tgl_realisasi = $this->input->post('tgl_realisasi');
 
        $data = array(

            'id_booking' => $id_booking,
            'id_dokter' => $id_dokter,
            'NIK' => $NIK,
            'id_poli' => $id_poli,
            'no_antrian' => $no_antrian,
            'tgl_realisasi' => $tgl_realisasi,

            );
        $this->db->where('id_booking', $id);
        $this->db->update('booking', $data);
       // print_r($data);exit();
        
    }
   function update_datagejala($id){
        $id_gejala = $this->input->post('id_gejala');
        $nm_gejala = $this->input->post('nm_gejala');
        $id_penyakit = $this->input->post('id_penyakit');
 
        $data = array(

            'id_gejala' => $id_gejala,
            'nm_gejala' => $nm_gejala,
            'id_penyakit' => $id_penyakit,

            );
        $this->db->where('id_gejala', $id);
        $this->db->update('gejala', $data);
       // print_r($data);exit();
        
    }
   function update_datapoli($id){
        $id_poli = $this->input->post('id_poli');
        $nm_poli = $this->input->post('nm_poli');
        $id_dokter = $this->input->post('id_dokter');
 
        $data = array(

            'id_poli' => $id_poli,
            'nm_poli' => $nm_poli,
            'id_dokter' => $id_dokter,

            );
        $this->db->where('id_poli', $id);
        $this->db->update('poli', $data);
       // print_r($data);exit();
        
    }
    function update_datauser($id){
        $NIK = $this->input->post('NIK');
        $nm_user = $this->input->post('nm_user');
        $status = $this->input->post('status');
        $jk = $this->input->post('jk');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $tgl_register = $this->input->post('tgl_register');
        $alamat = $this->input->post('alamat');
        $hp = $this->input->post('hp');
 
        $data = array(

            'NIK' => $NIK,
            'nm_user' => $nm_user,
            'status' => $status,
            'jk' => $jk,
            'tgl_lahir' => $tgl_lahir,
            'tgl_register' => $tgl_register,
            'alamat' => $alamat,
            'hp' => $hp,

            );
        $this->db->where('NIK', $id);
        $this->db->update('user', $data);
       // print_r($data);exit();
        
    }
}