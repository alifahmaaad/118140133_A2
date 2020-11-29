<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class artikel_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function yourartikel()
    {
        $id = getiduser();
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('user', 'user.id = artikel.id');
        $this->db->where('artikel.id', $id);
        $this->db->order_by('id_artikel', 'ASC');

        return $this->db->get();
    }
    public function semua()
    {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('user', 'user.id = artikel.id');
        $this->db->order_by('id_artikel', 'ASC');

        return $this->db->get();
    }
    public function lihatt($id_artikel)
    {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->where('id_artikel', $id_artikel);

        return $this->db->get();
    }
    public function update($data, $id_artikel)
    {
        $this->db->update('artikel', $data, array('id_artikel' => $id_artikel));
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }
    public function tambah($data)
    {
        $this->db->insert('artikel', $data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }
    public function hapus($id_artikel)
    {
        $this->db->delete('artikel', array('id_artikel' => $id_artikel));
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }
}
