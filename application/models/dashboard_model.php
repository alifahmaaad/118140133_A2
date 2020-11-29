<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class dashboard_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    function get_artikel()
    {
        $this->load->model('artikel_model');
        $CI = &get_instance();
        $id = getiduser();
        $data['yourartikel'] = $this->artikel_model->yourartikel($id);
        return $data;
    }
    function getname()
    {
        $name = getnameuser();
        $id = getiduser();
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $id);
        return $this->db->get();
    }
}
