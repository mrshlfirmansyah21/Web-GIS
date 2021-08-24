<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('kecamatan_model');
        $this->load->library('form_validation');
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data = array(
            'title'     => 'Data DTKS',
            'list'      => $this->kecamatan_model->get_all(),
        );
        $this->load->view('admin/kecamatan/list', $data);
    }

    public function tambah()
    {
        $data = array(
            'title'      => 'Tambah Data'
        );
        $this->load->view('admin/kecamatan/tambah_data', $data);
    }

    public function simpan()
    {
        $data = array(
            'nama_kecamatan'    => $this->input->post("nama_kecamatan"),
            'jumlah_ruta'       => $this->input->post("jumlah_ruta"),
            'jumlah_kk'         => $this->input->post("jumlah_kk"),
            'jumlah_dtks'       => $this->input->post("jumlah_dtks"),
        );
        $this->kecamatan_model->simpan($data);
        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">Success! Data berhasil disimpan.</div>');
        redirect('admin/kecamatan/');
    }

    public function edit($id_kecamatan = null)
    {
        if (!isset($id_kecamatan)) redirect('admin/kecamatan/');

        $validation = $this->form_validation;
        $validation->set_rules($this->kecamatan_model->rules());

        if ($validation->run()) 
        {
            $this->kecamatan_model->update();
            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">Success! Data berhasil diupdate.</div>');
            redirect('admin/kecamatan/');
        }

        $data["title"] = 'Edit Data';
        $data["list"] = $this->kecamatan_model->edit_kecamatan($id_kecamatan);
        $this->load->view('admin/kecamatan/edit_data', $data);
    }

    public function hapus($id=null)
    {
        if (!isset($id)) redirect('admin/kecamatan');
        
        if ($this->kecamatan_model->hapus($id)) 
        {
            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">Success! Data berhasil dihapus.</div>');
            redirect('admin/kecamatan/');
        }
    }
}