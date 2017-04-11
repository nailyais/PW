<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Detail_model');
	}

	public function index()
	{
		$data['post'] = $this->detail_model->show();
		$data['content_view'] = 'detail_view';
		$this->load->view('template_view',$data);
	}

	public function product($id_post)
	{
		$data['post'] = $this->detail_model->detail($id_post);
		$data['content_view'] = 'detail_view';
		$this->load->view('template_view',$data);	
	}

}

/* End of file detail.php */
/* Location: ./application/controllers/detail.php */