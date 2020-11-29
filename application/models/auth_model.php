<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', $post['password']);

        return $this->db->get();
    }
    public function get($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $id);

        return $this->db->get();
    }
}
