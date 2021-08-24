<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Hitung_model extends CI_Model
{
  
  public function jmlkk()
  {
     $this->db->select_sum('jumlah_kk');
     $query = $this->db->get('kecamatan');
     if($query->num_rows()>0)
     {
        return $query->row()->jumlah_kk;
     }
  }


  public function jmlruta()
  {
     $this->db->select_sum('jumlah_ruta');
     $query = $this->db->get('kecamatan');
     if($query->num_rows()>0)
     {
        return $query->row()->jumlah_ruta;
     }
  }


  public function jmlkec()
  {
    $query = $this->db->get('kecamatan');
    if($query->num_rows()>0)
    {
        return $query->num_rows();
    }
   
  }

  public function jmljiwa()
  {
     $this->db->select_sum('jumlah_dtks');
     $query = $this->db->get('kecamatan');
     if($query->num_rows()>0)
     {
        return $query->row()->jumlah_dtks;
     }
  }


}
