<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
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
			$this->load->view('register');
		}
	}
	public function proses(){
				if ($this->input->post('submit')){
					$this->form_validation->set_rules('id_user', 'id_user', '');
			$this->form_validation->set_rules('name', 'name', 'trim|required');
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');
			$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
			$this->form_validation->set_rules('telepone', 'no telpon', 'trim|required');
			$this->form_validation->set_rules('address', 'address', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if($this->user_model->register() == TRUE){
						redirect('login');
				}
				else {
					redirect('register');
				}
			} else {
						$data['notif'] = validation_errors('<div class="alert alert-danger">'.validation_errors().'</div>');
						$data['content_view'] = 'register';
						redirect('register');
			}
		}
	}

}