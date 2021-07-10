<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    
    public function login(){
    
    if($this->user_model->logged_id()){
        //jika memang session sudah terdaftar
        if ($this->session->role == "admin"){
            redirect('admin/index');
        }else{
            redirect('home');
        }
    } else {
        //jika session belum terdaftar
        $username= $this->input->post('username');
        $password = $this->input->post('password');
        $checking = $this->user_model->login($username,$password);
        if ($checking == true) {
            foreach ($checking as $apps) {
            $session_data = array(
            'id'   => $apps->id,
            'nama' => $apps->nama,
            'username' => $apps->username,
            'password' => $apps->password,
            'role' => $apps->role
            );
            $this->session->set_userdata($session_data);
            if ($this->session->role == "admin") {
                redirect('admin/index');
            }
            else{
                redirect('home');
            }
        }
        } else {
            $this->load->view('home');
        }
    }
    }

    public function daftar()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($this->user_model->daftar($nama, $username, $password, $role = "user")) {
            redirect('home');
        }
        else{
            redirect('home');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}