<?php

class User_model extends CI_Model
{
    private $_table ="user";

    public $user_id;
    public $username;
    public $password;
    public $role;

    public function rules()
    {
        return [
            ['field' => 'username',
            'label' => 'Name',
            'rules' => 'required'],
			
            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[3]'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["user_id" => $id])->row();
    }

    public function doLogin(){
        $post = $this->input->post();

        // cari user bedasarkan email dan username
        $this->db->where('username', $post["username"]);
        $user = $this->db->get($this->_table)->row();

        // jika user terdaftar
        if($user){
            // periksa password
            $isPasswordTrue = password_verify($post["password"], $user->password);
            $isAdmin = $user->role == "admin";

            if($isPasswordTrue && $isAdmin){
                $this->session->set_userdata(['user_logged' =>$user]);
                return true;
            }
        }

        // login gagal
        return false;
    }
    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }
}