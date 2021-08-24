<?php

defined('BASEPATH') OR exit('No direct script allowed');
class Peta extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('peta_model');
        $this->load->model('hitung_model');
    }

    public function index()
    {
        $data = array(
            'title' =>'Peta DTKS',
            'index' => $this->peta_model->all_data(),
            'isi' => 'peta'
        );
        $data['jumlah_kk'] = $this->hitung_model->jmlkk();
        $data['jumlah_kecamatan'] = $this->hitung_model->jmlkec();
        $data['jumlah_ruta'] = $this->hitung_model->jmlruta();
        $data['jumlah_jiwa'] = $this->hitung_model->jmljiwa();
        $this->load->view("user/peta", $data, FALSE);
    }
}

