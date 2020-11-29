<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function semua()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('id', 'ASC');

        return $this->db->get();
    }
    public function lihat($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $id);

        return $this->db->get();
    }
    public function update($data, $id)
    {
        $this->db->update('user', $data, array('id' => $id));
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }
    public function tambah($data)
    {
        $this->db->insert('user', $data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }
    public function hapus($id)
    {
        $this->db->delete('user', array('id' => $id));
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }
}
