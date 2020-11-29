<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('Fungsi');
        check_not_login();
        $this->load->model('user_model');
    }

    public function index()
    {
        $data['semua_user'] = $this->user_model->semua();

        //   $this->load->view('layouts/header');
        $this->load->view('daftar_user', $data);
        //    $this->load->view('layouts/footer');
    }
    public function edit($id)
    {
        $data['user'] = $this->user_model->lihat($id)->row();
        // $this->load->view('layouts/header');
        $this->load->view('edit_user', $data);
        //$this->load->view('layouts/footer');
    }
    public function edit_simpan($id)
    {
        $data = array(
            'name' => $this->input->post('nama'),
            'role' => $this->input->post('role'),

        );

        if ($this->user_model->update($data, $id) == TRUE) {
            $this->session->set_flashdata('edit', true);
        } else {
            $this->session->set_flashdata('edit', false);
        }

        redirect('user');
    }
    public function tambah()
    {
        //$this->load->view('layouts/header');
        $this->load->view('tambah_user');
        //$this->load->view('layouts/footer');
    }
    public function tambah_simpan()
    {
        $data = array(
            'name' => $this->input->post('nama'),

        );

        if ($this->user_model->tambah($data) == TRUE) {
            $this->session->set_flashdata('tambah', true);
        } else {
            $this->session->set_flashdata('tambah', false);
        }

        redirect('user');
    }
    public function hapus($id)
    {
        if ($this->user_model->hapus($id) == TRUE) {
            $this->session->set_flashdata('hapus', true);
        } else {
            $this->session->set_flashdata('hapus', false);
        }

        redirect('user');
    }
}
