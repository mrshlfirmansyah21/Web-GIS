<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Peta_model extends CI_Model 
{
    public function all_data()
    {
        $this->db->select('*');
        $this->db->from('kecamatan');
        return $this->db->get()->result();
    }
}