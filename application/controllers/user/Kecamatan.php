<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kecamatan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'title'     => 'Data DTKS',
            'list'      => $this->kecamatan_model->get_all(),
        );
        $this->load->view('user/list', $data);
    }
}