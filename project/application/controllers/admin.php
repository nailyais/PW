<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		$this->load->model('user_model');
		$this->load->model('penyakit_model');
		$this->load->model('admin_model');
	}   
	
	public function index(){
		
				
		if($this->session->userdata('adlog') == TRUE ){
			header('location:http://localhost/project/admin/dasboard');
		}else{
			$this->load->view('admin');
			
		}
		
	}

	public function login(){
		$user= $this->input->post('username');
		$pass= $this->input->post('password');
		$num_rows = $this->admin_model->check_user($user,$pass);
	 		//echo $num_rows;
		if($num_rows==1){
			echo "berhasil";
			$ses = array('admin' => 'ok' , 'adlog' => TRUE );
			$this->session->set_userdata($ses);
			header('location:http://localhost/project/admin/dasboard');
		}else{ 
			echo "tidak berhasil";
			echo '<meta http-equiv="Refresh" content="1; URL=http://localhost/project/admin/"/></center>';

		}

	}
	public function dasboard(){
		
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			$data['data']=$this->penyakit_model->tampil();
			$this->load->view('admindas',$data);
			
		}

	}

	public function order(){
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			
			header('location:http://localhost/project/admin/dasboard');
		}
		
	}
	public function antrian(){
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			$data['data']=$this->detail_model->tampil();
			$this->load->view('a_antrian',$data);
			
		}
		
	}

	public function dokter(){
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			$data['data']=$this->detail_model->tampild();
			$this->load->view('a_dokter',$data);
			
		}
		
	}

	public function booking(){
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			$data['data']=$this->detail_model->tampilb();
			$this->load->view('a_booking',$data);
			
		}
		
	}

	public function gejala(){
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			$data['data']=$this->detail_model->tampilg();
			$this->load->view('a_gejala',$data);
			
		}
		
	}

	public function poli(){
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			$data['data']=$this->detail_model->tampilp();
			$this->load->view('a_poli',$data);
			
		}
		
	}

	public function user(){
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			$data['data']=$this->detail_model->tampilu();
			$this->load->view('a_user',$data);
			
		}
		
	}
	public function addantrian(){
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			$this->load->view('a_addantrian');
			
		}
		
	}
	public function adddokter(){
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			$this->load->view('a_adddokter');
			
		}	
	}

	public function addgejala(){
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			$this->load->view('a_addgejala');
			
		}	
	}

	public function addbooking(){
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			$this->load->view('a_addbooking');
			
		}
		
	}

	public function addpoli(){
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			$this->load->view('a_addpoli');
			
		}
		
	}

	public function adduser(){
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			$this->load->view('a_adduser');
			
		}
		
	}
		public function editantrian($no_antrian){
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			//echo $id_post;exit();
			$id=$this->uri->segment('3');
	$data['data']=$this->detail_model->per_id($id);
	

			$this->load->view('a_editantrian',$data);
			
			
		}
		
	}
	public function editdokter($id_dokter){
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			//echo $id_post;exit();
			$id=$this->uri->segment('3');
	$data['data']=$this->detail_model->ped_id($id);
	

			$this->load->view('a_editdokter',$data);		
		}	
	}

		public function editbooking($id_booking){
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			//echo $id_post;exit();
			$id=$this->uri->segment('3');
	$data['data']=$this->detail_model->peb_id($id);
	

			$this->load->view('a_editbooking',$data);
			
			
		}
		
	}

	public function editgejala($id_gejala){
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			//echo $id_post;exit();
			$id=$this->uri->segment('3');
	$data['data']=$this->detail_model->peg_id($id);
	

			$this->load->view('a_editgejala',$data);
			
			
		}
		
	}

	public function editpoli($id_poli){
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			//echo $id_post;exit();
			$id=$this->uri->segment('3');
	$data['data']=$this->detail_model->pep_id($id);
	

			$this->load->view('a_editpoli',$data);
			
			
		}
		
	}
	public function edituser($NIK){
		if($this->session->userdata('adlog') == FALSE ){
			header('location:http://localhost/project/admin/');
		}else{
			//echo $id_post;exit();
			$id=$this->uri->segment('3');
	$data['data']=$this->detail_model->peu_id($id);
	

			$this->load->view('a_edituser',$data);
			
			
		}
		
	}
	function update($id){
 
    $this->m_data->update_data($id);
    redirect('admin/antrian');
}
	function updatedokter($id){
 
    $this->m_data->update_datadokter($id);
    redirect('admin/dokter');
}

	function updatebooking($id){
 
    $this->m_data->update_databooking($id);
    redirect('admin/booking');
}

	function updategejala($id){
 
    $this->m_data->update_datagejala($id);
    redirect('admin/gejala');
}

	function updatepoli($id){
 
    $this->m_data->update_datapoli($id);
    redirect('admin/poli');
}
	
	function updateuser($id){
 
    $this->m_data->update_datauser($id);
    redirect('admin/user');
}

	public function logout(){
		$this->session->unset_userdata('admin');
		$this->session->unset_userdata('adlog');
		header('location:http://localhost/project/admin/');
	}
}
?>