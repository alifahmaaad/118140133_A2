<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('Fungsi');
        $this->load->library('fungsi');
        check_not_login();
    }
    public function index()
    {
        $this->load->helper('Fungsi');
        $this->load->model('dashboard_model');
        //$d['yourartikel'] = $this->dashboard_model->get_artikel();
        $nam['na'] = $this->dashboard_model->getname()->row();
        // $this->load->view('dashboardview',  $d);
        $this->load->view('dashboardview', $nam);
    }
}
