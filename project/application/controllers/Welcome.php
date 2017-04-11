<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tiket_model');
    }

function ganti($id){
$this->tiket_model->klik($id);
header("location:http://localhost/project/admin/dasboard");
    }
}
