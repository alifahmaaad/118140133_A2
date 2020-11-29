<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('auth/login.php');
        }
    }
    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $this->load->model('auth_model');
            $query = $this->auth_model->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $param = array(
                    'id' => $row->id,
                    'role' => $row->role,
                    'name' => $row->name,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($param);
                echo "<script>alert('Login Berhasil');window.location='" . base_url() . "';
                </script>";
            } else {
                echo "<script>alert('Login Gagal');window.location='" . site_url('login') . "';
                </script>";
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        echo "<script>alert('Sukses! Anda berhasil logout.');window.location='" . site_url('login') . "';
        </script>";
    }
}
