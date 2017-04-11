<?php
class Item extends CI_controller
{
function __construct()
	{
		parent::__construct();
		$this->load->model('detail_model');
$this->load->helper('text'); // memanggil helper text
}
function index()
{
	
	$data['data']=$this->detail_model->tampil();
	$this->load->view('movie',$data);
	}
function detail()
{
	$id=$this->uri->segment('3');
	$data['data']=$this->detail_model->per_id($id);
	$this->load->view('detail',$data);
}
function order(){
	if(isset($this->session->username)){
		$id=$this->uri->segment('3');
	$data['data']=$this->detail_model->per_id($id);
	$this->load->view('order',$data);

}else{
	redirect('login');
}
}
function prosesorder(){
 
}
}