<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan_model extends CI_Model {

    public function rules()
    {
        return [
            ['field' => 'nama_kecamatan',
            'label' => 'Nama_kecamatan',
            'rules' => 'required'],

            ['field' => 'jumlah_ruta',
            'label' => 'Jumlah_ruta',
            'rules' => 'required'],

            ['field' => 'jumlah_kk',
            'label' => 'Jumlah_kk',
            'rules' => 'required'],

            ['field' => 'jumlah_dtks',
            'label' => 'Jumlah_dtks',
            'rules' => 'required']
        ];
    }

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('kecamatan')
                 ->order_by('id_kecamatan')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {
        $query = $this->db->insert("kecamatan", $data);
        if($query){
            return true;
        }else{
            return false;
        }
    }

    public function edit_kecamatan($id)
    {
        return $this->db->get_where("kecamatan", ["id_kecamatan" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kecamatan = $post["id"];
        $this->nama_kecamatan = $post["nama_kecamatan"];
        $this->jumlah_ruta = $post["jumlah_ruta"];
        $this->jumlah_kk = $post["jumlah_kk"];
        $this->jumlah_dtks = $post["jumlah_dtks"];
        return $this->db->update("kecamatan", $this, array('id_kecamatan' => $post['id']));
    }

    public function hapus($id)
    {
        return $this->db->delete("kecamatan", array("id_kecamatan" => $id));
    }
}