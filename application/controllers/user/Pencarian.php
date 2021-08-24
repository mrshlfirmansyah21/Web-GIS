<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pencarian extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pencarian_model');
    }

    public function index()
    {
        $this->load->view('user/search');
    }

    public function hasil()
    {
        $data['cari'] = $this->pencarian_model->cariData();
		$this->load->view('user/result', $data);
    }
}