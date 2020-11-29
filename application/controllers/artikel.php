<?php
defined('BASEPATH') or exit('No direct script access allowed');

class artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('Fungsi');
        $this->load->library('fungsi');
        check_not_login();
        $this->load->model('artikel_model');
    }

    public function index()
    {
        $data['semua_artikel'] = $this->artikel_model->semua();
        // $user_data['user_artikel'] = $this->artikel_model->yourartikel($id);
        //   $this->load->view('layouts/header');
        $this->load->view('daftar_artikel', $data);
        //    $this->load->view('layouts/footer');
    }
    public function artikel()
    {
        $data['semua_artikel'] = $this->artikel_model->yourartikel();
        // $user_data['user_artikel'] = $this->artikel_model->yourartikel($id);
        //   $this->load->view('layouts/header');
        $this->load->view('daftar_artikel', $data);
        //    $this->load->view('layouts/footer');
    }
    public function lihat($id_artikel)
    {
        $data['artikel'] = $this->artikel_model->lihatt($id_artikel)->row();
        // $user_data['user_artikel'] = $this->artikel_model->yourartikel($id);
        //   $this->load->view('layouts/header');
        $this->load->view('viewartikel', $data);
        //    $this->load->view('layouts/footer');
    }
    public function edit($id_artikel)
    {
        $data['artikel'] = $this->artikel_model->lihatt($id_artikel)->row();
        // $this->load->view('layouts/header');
        $this->load->view('edit_artikel', $data);
        //$this->load->view('layouts/footer');
    }
    public function edit_simpan($id_artikel)
    {
        $data = array(
            'name' => $this->input->post('nama'),
            'role' => $this->input->post('role'),

        );

        if ($this->artikel_model->update($data, $id_artikel) == TRUE) {
            $this->session->set_flashdata('edit', true);
        } else {
            $this->session->set_flashdata('edit', false);
        }

        redirect('artikel');
    }
    public function tambah()
    {
        //$this->load->view('layouts/header');
        $this->load->view('tambah_artikel');
        //$this->load->view('layouts/footer');
    }
    public function tambah_simpan()
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'id' => $this->input->post('id'),

        );

        if ($this->artikel_model->tambah($data) == TRUE) {
            $this->session->set_flashdata('tambah', true);
        } else {
            $this->session->set_flashdata('tambah', false);
        }

        redirect('artikel');
    }
    public function hapus($id_artikel)
    {
        if ($this->artikel_model->hapus($id_artikel) == TRUE) {
            $this->session->set_flashdata('hapus', true);
        } else {
            $this->session->set_flashdata('hapus', false);
        }

        redirect('artikel');
    }
}
