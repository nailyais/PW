<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
function __construct()
	{
		parent::__construct();
		$this->load->model('detail_model');
$this->load->helper('text'); // memanggil helper text
}
	public function index()
	{
		$data['data']=$this->detail_model->tampil();
		$this->load->view('index',$data);
	}
	
}
