<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index()
	{
		
		if(isset($this->session->username)){
			redirect(base_url());
		}else{
			$this->load->view('login');
		}
	}
	public function proses(){
		if($this->input->post('submit')){
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');

				if ($this->form_validation->run() == TRUE) {
				if($this->user_model->login() == TRUE){
						redirect('http://localhost/project/#service');
				}
				else {
					$data['notif'] ='<div class="alert alert-danger">Username / Password Salah</div>';
						$data['content_view'] = 'login';
						$this->load->view('login',$data);
						header('location:http://localhost/project/login');
				}
			} else {
						$data['notif'] = validation_errors('<div class="alert alert-danger">'.validation_errors().'</div>');
						$data['content_view'] = 'login';
						$this->load->view('login',$data); 
			}
		
	}
}
	public function logout(){
		$this->session->unset_userdata('username');
		header('location:http://localhost/project');
	}
}
