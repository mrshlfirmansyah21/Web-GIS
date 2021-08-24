<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pencarian_model extends CI_Model 
{
    public function cariData()
    {
        $cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from pencarian where nik like '%$cari%' ");
		return $data->result();
    }
}