<?php 
 
 
class Crud extends CI_Controller{
 
    function __construct(){
        parent::__construct();      
        $this->load->model('m_data');
                $this->load->model('m_cancel');
        $this->load->helper('url');
 
    }
 
    function index(){
        $data['antrian'] = $this->m_data->tampil_data()->result();

        $this->load->view('a_antrian',$data);
    }
 
    function tambah(){
        $data['show_poli'] = $this->Detail_model->tampilp()->result_array();
        $this->load->view('a_addantrian', $data);
    }
 
    function tambah_aksi(){
        $no_antrian = $this->input->post('no_antrian');
        $status = 'Aktif';
        $id_poli = $this->input->post('id_poli');
       
        
        $data = array(
            'no_antrian' => $no_antrian,
            'status' => $status,
            'id_poli' => $id_poli,
           
            );
        $this->m_data->input_data($data,'antrian');
        redirect('admin/antrian');
    }
    //function tambah_dokter(){
     //   $id_dokter = $this->input->post('id_dokter');
       // $nm_dokter = $this->input->post('nm_dokter');
//        $username = $this->input->post('username');
 //       $password = $this->input->post('password');
 //       $alamat = $this->input->post('alamat');
 //       $jk = $this->input->post('username');
 //       $tgl_lahir = $this->input->post('id_dokter');
 //       $tlp = $this->input->post('nm_dokter');
 //       $hari_hadir = $this->input->post('username');
 //       $jam_buka = $this->input->post('id_dokter');
 //       $jam_tutup = $this->input->post('nm_dokter');
 //       $image = $lala['orig_name'];
  //      $deskripsi = $this->input->post('deskripsi');
  //     
   //     $data = array(
     //       'id_dokter' => $id_dokter,
       //     'nm_dokter' => $nm_dokter,
         //   'username' => $username,
           // 'password' => $password,
          //  'alamat' => $alamat,
           // 'jk' => $jk,
  //          'tgl_lahir' => $tgl_lahir,
    //        'tlp' => $tlp,
      //      'hari_hadir' => $hari_hadir,
        //    'jam_buka' => $jam_buka,
         //   'jam_tutup' => $jam_tutup,
          //  'image' => $image,
        //    'deskripsi' => $deskripsi,
        //   
        //    );
       // $this->m_data->input_data($data,'dokter');
       // redirect('admin/dokter');
    //}
  //  }
    function tambah_user(){
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
        $this->m_data->input_data($data,'user');
        redirect('admin/user');
    }
    function tambah_booking(){
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
        $this->m_data->input_data($data,'booking');
        redirect('admin/booking');
    }

    function tambah_gejala(){
        $id_gejala = $this->input->post('id_gejala');
        $nm_gejala = $this->input->post('nm_gejala');
        $id_penyakit = $this->input->post('id_penyakit');
 
        $data = array(
            'id_gejala' => $id_gejala,
            'nm_gejala' => $nm_gejala,
            'id_penyakit' => $id_penyakit,
           
            );
        $this->m_data->input_data($data,'gejala');
        redirect('admin/gejala');
    }

    function tambah_poli(){
        $id_poli = $this->input->post('id_poli');
        $nm_poli = $this->input->post('nm_poli');
        $id_dokter = $this->input->post('id_dokter');
 
        $data = array(
            'id_poli' => $id_poli,
            'nm_poli' => $nm_poli,
            'id_dokter' => $id_dokter,
           
            );
        $this->m_data->input_data($data,'poli');
        redirect('admin/poli');
    }
    function delete($no_antrian){
        $data = array('no_antrian' => $no_antrian, );
        $this->m_data->delete($data,'antrian');
        redirect('admin/antrian');
    }
    function deletedokter($id_dokter){
        $data = array('id_dokter' => $id_dokter, );
        $this->m_data->deleted($data,'dokter');
        redirect('admin/dokter');
    }

     function deletebooking($id_booking){
        $data = array('id_booking' => $id_booking, );
        $this->m_data->deleteb($data,'booking');
        redirect('admin/booking');
    }

    function deletegejala($id_gejala){
        $data = array('id_gejala' => $id_gejala, );
        $this->m_data->deleteg($data,'gejala');
        redirect('admin/gejala');
    }

    function deletepoli($id_poli){
        $data = array('id_poli' => $id_poli, );
        $this->m_data->deletep($data,'poli');
        redirect('admin/poli');
    }

     function deleteuser($NIK){
        $data = array('NIK' => $NIK, );
        $this->m_data->deleteu($data,'user');
        redirect('admin/user');
    }

    function update($no_antrian){
        $data = array('no_antrian' => $id, );
    }

    function cancel($id_book){
$data = array('id_book' => $id_book,'id_post' => $id_post, );
       $this->m_booking->delete($data);
       $this->m_booking->cancel($id_book,$id_post);
    }
 
}